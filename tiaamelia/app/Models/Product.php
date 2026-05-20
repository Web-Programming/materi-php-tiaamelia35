<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; //manual
use Illuminate\Database\Eloquent\Model;


//Cara 2: mendaftarkan policy
//Cara 1 ada di AppServiceProvider
#[UsePolicy(ProductPolicy::class)]
class Product extends Model
{
    use HasFactory;
    //jika nama tabel tidak sesuai dengan konvensi,
    //maka kita bisa mendefinisikan nama tabel secara eksplisit
    protected $table = 'products';

    // $fillable wajib didefinisikan agar mass assignment (Product::create())
    // dapat berjalan. Tanpa ini, Laravel melempar MassAssignmentException.
    protected $fillable = [
    'name', 'price', 'description', 'status', 'is_active', 'release_date',
    ];
}