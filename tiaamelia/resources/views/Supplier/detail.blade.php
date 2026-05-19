@extends('app.master')

@section('title', $title)

@section('sidebar')
    @parent
    @section('submenu-supplier')
        <a href="/supplier/create" class="list-group-item list-group-item-action ps-4>">Tambah Supplier</a>
        <a href="/supplier/search" class="list-group-item list-group-item-action ps-4>">Cari Supplier</a>
    @endsection

@endsection

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">{{ $title }}</h1>

    <p>Nama Supplier: {{ $supplier['name'] }}</p>
    <p>ID Supplier: {{ $supplier['id'] }}</p>
    <p>Contact Number: {{ $supplier['contact_number'] }}</p>
    <p>Address: {{ $supplier['address'] }}</p>
    <hr>
    <a href="{{ url('/supplier') }}" class="btn  btn-primary">Kembali</a>
</div>
@endsection