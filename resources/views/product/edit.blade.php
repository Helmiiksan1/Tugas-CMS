@extends('layout/aplikasi')

@section('content')
    <a href='/product' class="btn btn-secondary"><< Kembali</a>
    <form method="post" action="{{ '/product/'.$data->harga_barang }}">
        @csrf
        @method('PUT')
        <div>
            <h1>Harga Barang: {{ $data->harga_barang }}</h1>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $data->nama }}">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi">{{ $data->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>
@endsection