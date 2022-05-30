<!--
Property dan Method
    Property
    - Merepresentasikan data/keadaan dari sebuah object
    - Variabel yang ada di dalam object (member variable)
    - Sama seperti variable di dalam PHP, ditambah dengan visibility di depannya
    
    Method
    - Merepresentasikan perilaku dari sebuah object
    - Function yang ada di dalam object
    - Sama seperti function di dalam PHP, ditambah dengan visibility di depannya
-->
<?php
// Jualan Produk
// Komik
// Game
class Produk {
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha"; 
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik: " . $produk3->getLabel();
echo "<br>";
echo "Game: " . $produk4->getLabel();
?>