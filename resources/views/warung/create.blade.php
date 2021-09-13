@extends('warung.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>tambah barang baru</h2>
        </div>
        <div class="pull-right">

        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>oops!</strong> sepertinya ada yang error dalam penginputan<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('warung.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama barang</strong>
                <input type="text" name="namabarang" class="form-control" placeholder="cth : Oreo">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Harga barang</strong>
            <input type="number" name="hargabarang" class="form-control" placeholder="Masukan Harga Barang">
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Exp</strong>
                <textarea class="form-control" style="height:150px" name="exp" placeholder="Masukan Tanggal expired"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('warung.index') }}"> Back</a>
        </div>
    </div>

</form>
@endsection
