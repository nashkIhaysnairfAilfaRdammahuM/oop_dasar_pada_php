<!-- 
Class dan Object
    Class
    - Blueprint/Template untuk membuat instance dari object
    - Class mendefinisikan Object
    - Menyimpan data dan perilaku yang disebut dengan property dan method
    
    Membuat Class
    - Diawali dengan menuliskan keyword class, diikuti nama dan dibatasi dengan {}, untuk menyimpan property dan method
    - Aturan penamaan class sama seperti variable

    Object
    - Instance yang didefinisikan oleh Class
    - Banyak object dapat dibuat menggunakan satu class
    - Object dibuat dengan menggunakan keyword new
-->
<?php
class Coba {
    public $a; // property

    // method
    public function b() {

    }
}

// membuat instance dari class
$a = new Coba();
$b = new Coba();

var_dump($a);
var_dump($b);
?>