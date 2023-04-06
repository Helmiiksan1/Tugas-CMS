@extends('layout/aplikasi')

@section('content')
    <a href="/product/create" class="btn btn-primary">+Tambah Data Product</a>
    <table class="table">
        <thead>
            <tr>
                <th>Harga Barang</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->harga_barang }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td><a class='btn btn-secondary btn-sm' href='{{ url('/product/'.$item->harga_barang) }}'>Detail</a></td>
                    <td><a class='btn btn-warning btn-sm' href='{{ url('/product/'.$item->harga_barang.'/edit') }}'>Edit</a></td>
                    <form onsubmit="return confirm('Yakin mau hapus data?')" class='d-inline' action="{{ '/product/'.$item->harga_barang }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Del</button>
                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
@endsection