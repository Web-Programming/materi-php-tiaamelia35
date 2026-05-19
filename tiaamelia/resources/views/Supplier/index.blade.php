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

    <div class="tabel-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>NO</th>
                    <th>Nama Supplier</th>
                    <th>Nomor Kontak</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- {{-- @for ($i = 0; $i < count($supplier); $i++)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $suppliers[$i]['name'] }}</td>
                        <td>{{ $suppliers[$i]['contact_number']}}</td>
                        <td>{{ $suppliers[$i]['address'] }}</td>
                        <td>
                            <a href="{{ url('/supplier/' . $suppliers[$i]['id'] )}}" class="btn btn-sm btn-info">Detail</a>
                            <a href="{{ url('/supplier/' . $suppliers[$i]['id'] . '/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                        </td>
                    </tr>
                @endfor --}} -->
                @foreach ($suppliers as $supplier)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $supplier->name }}</td>
                        <td>{{ $supplier->contact_number }}</td>
                        <td>{{ $supplier->address }}</td>
                        <td>
                            <a href="{{ url('/supplier/' . $supplier->id )}}" class="btn btn-sm btn-info">Detail</a>
                            <a href="{{ url('/supplier/' . $supplier->id . '/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $suppliers->links() }}
    </div>
</div>
@endsection