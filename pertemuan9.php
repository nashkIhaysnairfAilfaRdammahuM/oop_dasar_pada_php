<!--
Visibility (Access Modifier)
    - Konsep yang digunakan untuk mengatur akses dari property dan method pada sebuah objek
    - Ada 3 keyword visibility: public, protected, dan private
        = public, dapat digunakan di mana saja, bahkan di luar class
        = protected, hanya dapat digunakan di dalam sebuah class beserta turunannya
        = private, hanya dapat digunakan di dalam sebuah class tertentu saja
    - Alasan perlunya menerapkan Visibility (Access Modifier)
        = Hanya memperlihatkan aspek dari class yang dibutuhkan oleh 'client'
        = Menentukan kebutuhan yang jelas untuk object
        = Memberikan kendali pada kode untuk menghindari 'bug'
-->
<?php
// Jualan Produk
// Komik
// Game
class Produk {
    public $judul, $penulis, $penerbit;
    
    protected $diskon = 0;
    private $harga;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    
    
    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel() {
        return "{$this->penulis}, {$this->penerbit}";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    
    public function getInfoProduk() {
        $str = "Komik: " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman,";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getInfoProduk() {
        $str = "Game: " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam,";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str =  "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
?>