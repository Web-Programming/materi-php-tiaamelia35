@extends('app.master')

@section('title', 'Produk Index')


@section('sidebar')
    @parent
    @section('sub-menu-produk')
        <a href="/produk/create" class="list-group-item list-group-item-action ps-4">Tambah Produk</a>
        <a href="/produk/search" class="list-group-item list-group-item-action ps-4">Cari Produk</a>
    @endsection
@endsection


@section('content')
    <h1 class="h3 mb-3">Supplier Index</h1>
    <p class="text-muted">Halaman daftar produk menggunakan lar</p>


    <div class="card">
        <div class="card-body">
            Konten produk bisa ditampilkan disini.
        </div>
    </div>
@endsection