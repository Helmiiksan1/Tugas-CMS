@extends('layout/aplikasi')

@section('content')
    <form method="post" action="/product">
        @csrf
        <div class="mb-3">
            <label for="harga_barang" class="form-label">Harga Barang</label>
            <input type="text" class="form-control" name="harga_barang" id="harga_barang" value="{{ Session::get('harga_barang') }}">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ Session::get('nama') }}">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi">{{ Session::get('deskripsi') }}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
    </form>
@endsection