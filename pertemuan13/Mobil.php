<?php
namespace Kendaraan;

//Cara penulisan class Mobil
class Mobil{
    //Cara penulisan Property
    public $warna;
    public $merk;


    //Cara penulisan Method
    function maju() {
        //Isi Method maju()
        return "Mobil maju";
    }

    function berhenti(){
        //Isi Method berhenti()
        return "Mobil berhenti";
    }
}

use Kendaraan\Mobil as KMobil;

// instansiasi object dari namespace alias
$mobil_ahmad  = new KMobil();



//Instansiasi object
$mobil_ahmad  = new Mobil();
$mobil_anton  = new Mobil();


//Set property
$mobil_ahmad->warna  = "Hitam";
$mobil_ahmad->merk  = "Toyota";


//Tampilkan property
echo "Mobil Ahmad";
echo "<br>Warna : ". $mobil_ahmad->warna;
echo "<br>Merk : ". $mobil_ahmad->merk;


//Tampilkan method
echo $mobil_ahmad->maju();
echo "<br>";
echo $mobil_ahmad->berhenti();
?>







