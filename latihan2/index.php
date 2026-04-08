<?php
require_once "app/produk/Item.php"           //require: memanggil file lain
require_once "app/service/Item2.php"          //filenya ga ada ga masalah
//bebas mau pake yg mna (atas)

//Menggunakan alias utk menghindari konflik nama
use App\Produk\Item as ProdukItem;
use App\Service\Item as ServiceItem;


//Membuat instance
$produk = new ProdukItem("Laptop");
$service = new ProdukItem("Perbaikan Laptop");


//Menampilkan hasil
echo $produk->info() .\"n";
echo $service->info();