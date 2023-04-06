@extends('layout/aplikasi')

@section('content')
    <div>
        <a href='/product' class="btn btn-secondary"><< Kembali</a>
        <h1>{{ $data->nama }}</h1>
        <p>
            <b>Harga Barang</b> {{ $data->harga_barang }}
        </p>
        <p>
            <b>Deskripsi</b> {{ $data->deskripsi }}
        </p>
    </div>
@endsection