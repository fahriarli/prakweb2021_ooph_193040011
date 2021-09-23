<?php

// define('NAMA', 'Fahri');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// class Coba {
//     const NAMA = 'Fahri';
// }

// echo Coba::NAMA;



// echo __FILE__;


// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas  = __CLASS__;
}

$obj = New Coba;
echo $obj->kelas;

?>