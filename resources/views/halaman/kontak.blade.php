@extends('layout/aplikasi')

@section('content')
<h1>{{ $judul }}</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore provident quasi id quas quidem? Consequatur iste asperiores eaque officiis quidem est dolor, quas libero laborum incidunt repudiandae, totam nesciunt similique!</p>
<p>
    <ul>
        <li>Email: {{ $kontak['email']}}</li>
        <li>Whatsapp: {{ $kontak['whatsapp']}}</li>
    </ul>
</p>
@endsection