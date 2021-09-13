@extends('warung.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('warung.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada Yang salah dalam penginputan.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('warung.update',$warung->id) }}" method="POST">
        @csrf
        @method('PUT')
        {{-- {{dd($warung->namabarang)}} --}}
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nama barang:</strong>
                    <input type="text" name="namabarang" value="{{ $warung->namabarang }}" class="form-control" placeholder="namabarang">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>harga barang:</strong>
                    <input type="text" name="hargabarang" value="{{ $warung->hargabarang }}" class="form-control" placeholder="hargabarang">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>exp:</strong>
                    <textarea class="form-control" style="height:150px" name="exp" placeholder="exp">{{ $warung->exp }}</textarea>
                </div>
            </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
