<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; //manual
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'suppliers';

    protected $fillable = [
    'name', 'contact_number', 'address',
    ];
}