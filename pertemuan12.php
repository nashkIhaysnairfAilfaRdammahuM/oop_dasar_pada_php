<!--
Constant
    - Sebuah identifier untuk menyimpan nilai
    - Nilainya tidak dapat berubah
    - Dibuat dengan keyword define() atau const

Magic Constant
    - __LINE__
    - __FILE__
    - __DIR__
    - __FUNCTION__
    - __CLASS__
    - __TRAIT__
    - __METHOD__
    - __NAMESPACE__
-->
<?php
// define("NAMA", "Rafli Afriansyah");
// echo NAMA;

// echo "<br>";

// const UMUR = 17;
// echo UMUR;

// class Coba {
//     const NAMA = "Rafli";
// }

// echo Coba::NAMA;

// echo __FILE__;

// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

// class Coba {
//     public $kelas = __CLASS__;
// }

// $obj = new Coba();
// echo $obj->kelas;

echo __LINE__ . "<br>";
echo __FILE__ . "<br>";
echo __DIR__ . "<br>";
echo __FUNCTION__ . "<br>";
echo __CLASS__ . "<br>";
echo __TRAIT__ . "<br>";
echo __METHOD__ . "<br>";
echo __NAMESPACE__;
?>