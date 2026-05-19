@extends('app.master')

@section('title', $title)

@section('sidebar')
    @parent
    @section('submenu-produk')
        <a href="/produk/create" class="list-group-item list-group-item-action ps-4>">Tambah Produk</a>
        <a href="/produk/search" class="list-group-item list-group-item-action ps-4>">Cari Produk</a>
    @endsection

@endsection

@section('content')
<div class="container-fluid">
    <h1>{{ $title }}</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as @error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('produk.update', $product->id) }}" method = "POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" name="name" id="name" class="form-control @error ('name') is-invalid @enderror value = {{ old('name') }}">
            @error
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" name="price" id="price" step="0.01"
                class="form-control @error('price') is-invalid @enderror"
                value="{{ old('price') }}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" rows="3" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
            @error
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select @error('status') is-invalid @enderror">
                <option value="">Pilih Status</option>
                <option value="new" {{ old('status') === 'new' ? 'selected' :''}}>Baru</option>
                <option value="used" {{ old('status') === 'used' ? 'selected' :'' }}>Bekas</option>
            </select>
            @error('status')
                <div class=:invalid-feedback>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="release_date" class="form-label">Tanggal Rilis</label>
            <input type="date" name="release_date" id="release_date" class="form-control @error('release_date') is-invalid @enderror value="{{ old('release_date') }}>
            @error('release_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="is_active" id="is_active" value="1" class="form-check-input" {{ old('is_active') ? 'checked' :'' }}>
            <label for="is_active" class="form-check-label">Aktif</label>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('produk.index') }}" class="btn btn-secondary">Batal</a>
    </form>


        <p>Nama Produk: <input type="text" class="form-control mb-3" placeholder="tambah produk..."> <p>
        <p>Price: <input type="number" class="form-control mb-3" placeholder="tambah harga..."> <p>
        <p>Description: <input type="text" class="form-control mb-3" placeholder="tambah deskripsi..."> <p>
        <p>Status: <input type="text" class="form-control mb-3" placeholder="tambah status..."> <p>
        <p>Aktif: <input type="text" class="form-control mb-3" placeholder="tambah aktif..."> <p>
        <p>Tanggal Rilis: <input type="text" class="form-control mb-3" placeholder="tambah tanggal rilis..."> <p>
        <button class="btn btn-primary">Simpan</button>
    <hr>
</div>
@endsection