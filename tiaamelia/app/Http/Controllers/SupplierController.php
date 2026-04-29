<?php

namespace App\Http\Controllers;
USE Iluminate\Http\Request;
class SupplierController extends Controller
{

public function index()
{
    $products = [
        ['id' => 1, 'name' => 'Supplier1', 'phone' => 750.000, 'address' => 'Jalan Krakatau'],

    ];


    return view('supplier.detail', ['id' => $id, 'title' => 'Detail Supplier', 'supplier' => $supplier]);
}