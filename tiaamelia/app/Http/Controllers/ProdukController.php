<?php

namespace App\Http\Controllers;
USE Iluminate\Http\Request;
class ProdukController extends Controller
{

public function index()
{
    $products = [
        ['id' => 1, 'name' => 'Laptop', 'price' => 750.000],

    ];


    return view('produk.index', ['products => $products']);
}

public function create()
{
    return view('produk.create')
}



public function store (Request $request)
}