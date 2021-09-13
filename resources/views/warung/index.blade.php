@extends('warung.layout')

@section('content')

<div class="pull-left">
    <div class="container mt-5">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <h2> Warung Rifqi Jaya Makmur</h2></div>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="btn btn-outline-success" aria-current="page" href="#">Home</a>
          </li>
          <form action="{{ route('logout') }}" method="POST" >      @csrf    <li class="nav-item">

            <button class="btn btn-outline-danger" onclick="return confirm('Apa Anda yakin Ingin Logout?');">Logout</button>
          </li></form>
        </ul>

      </div>
    </div>
  </nav>

</div>
<div class="row mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="2%">Id Barang</th>
            <th width="15%">Nama Barang</th>
            <th width="5%">Harga</th>
            <th width="14%">Exp Date/kadaluarsa</th>
            <th width="14%" class="text-center">Action</th>
        </tr>
        @php
            $i = 1;
        @endphp
        @foreach ($data as $warung)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $warung->namabarang }}</td>
            <td>Rp. {{ $warung->hargabarang }}</td>
            <td>{{ $warung->exp }}</td>
            <td>
                <form class="text-center" action="{{ route('warung.destroy',$warung->id) }}" method="POST">
                    <a class="btn btn-outline-info" href="{{ route('warung.show',$warung->id) }}">Lihat</a>
                    <a class="btn btn-primary" href="{{ route('warung.edit',$warung->id) }}">Edit</a>
                    @csrf

                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"  onclick="return confirm('Apa Anda yakin Menghapus data ini?');" >Hapus</button>
                </form>
            </td>
        </tr>

        @endforeach
    </table>
        <a class="btn btn-success" href="{{ route('warung.create') }}"> Tambah Barang Baru</a>
@endsection
