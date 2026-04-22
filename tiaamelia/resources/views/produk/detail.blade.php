@extends('template')

@section('title', 'Ini Halaman Detail')
@endsection

@section('navbar')
    <b>Ini Bisa Diisi Navbar</b>
@endsection


@section('content')
    <h2>Ini Halaman Detail Produk</h2>
    Nama Produk : <b>{{ $product_name }}</b><br>
    Id : <b>{{ $id }}</b>

</hr>
@endsection
