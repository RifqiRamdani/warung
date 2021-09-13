<?php

namespace App\Http\Controllers;

use App\Models\Warung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WarungController extends Controller
{

    public function index()
    {
        $data = Warung::all();
        return view('warung.index')->with([
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('warung.create');
    }

    public function store(Request$request)
    {
        $request->validate([
            'namabarang' => 'required',
            'exp' => 'required',
        ]);
        Warung::create($request->all());
        return redirect()->route('warung.index')
        ->with('success','Warung berhasil dibuat');
    }

    public function show(Warung $warung)
    {
        return view('warung.show',compact('warung'));
    }

    public function edit(Warung $warung)
    {
        // dd($warung->namabarang);
        return view('warung.edit',compact('warung'));

    }

    public function update(Request $request, Warung $warung)
    {
        $request->validate([

        ]);
        $warung->update($request->all());

        return redirect()->route('warung.index')
        ->with('success','Update Warung sukses');
    }

    public function destroy(Warung $warung)
    {
        $warung->delete();

        return redirect()->route('warung.index')
        ->with('success','Sukses menghapus Data');
    }

    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }
}
