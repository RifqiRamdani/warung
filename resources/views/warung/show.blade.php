@extends('warung.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
<div class="col-xs-12 col-sm-12 col-md-12 text-center">            <div class="pull-left">
                <h2> Pesanan Anda</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('warung.index') }}"> kembali</a>
            </div>
        </div>
    </div>

    <div class="row">
        <table class="table table-info table-bordered">
<tr>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
    <td>            <strong>Nama barang : </strong>
                {{ $warung->namabarang }}</td>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <td>  <strong>Harga barang : </strong>
                {{ $warung->hargabarang }} </td>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
<td>            <div class="form-group">
                <strong>Exp Date : </strong>
                {{ $warung->exp }} </td>
            </tr>
            </div>
        </div>
</div>
    </div>
@endsection
