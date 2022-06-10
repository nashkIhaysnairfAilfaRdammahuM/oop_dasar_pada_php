<!--
Namespace/Encapsulation
    - Sebuah cara untuk mengelompokkan program ke dalam sebuah package tersendiri
    - PHP tidak mengijinkan kita untuk memiliki 2 class dengan nama yang sama
    - tidak masalah jika kita bekerja sendiri
    - Format untuk namespace itu namespace Vendor\Namespace\SubNamespace;
    - Vendor itu nama pembuat atau nama aplikasi
-->
<?php
require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();