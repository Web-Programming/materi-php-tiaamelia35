@extends('template')

@section('title', 'Ini Halaman Detail')
@endsection

@section('navbar')
    <b>Ini Bisa Diisi Navbar</b>
@endsection


@section('content')
    {{-- <h2>Ini Halaman Detail Produk</h2>
    Nama Produk : <b>{{ $product_name }}</b><br>
    Id : <b>{{ $id }}</b>

</hr> --}}

<div class="container-fluid">
    <h1 class="mb-4">{{ $title }}</h1>

    <p>Nama Produk: {{ $product['name'] }}</p>
    <p>ID Produk: {{ $product['id'] }}</p>
    <p>Price: Rp {{ number_format($product['price'], 2, '.', ',') }}</p>
    <hr>
    <a href="{{ url('/produk') }}" class="btn btn-primary">Kembali</a>
</div>
@endsection


{{--buat controller, daftarkan root, tampilkan list supplier di halaman supplier.index, tampilkan detail supplier}}