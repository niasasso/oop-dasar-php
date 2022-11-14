<?php 

// define('NAMA', 'Sulenias Asso');

// echo NAMA;
// echo "<br>";

// const UMUR = 20;
// echo UMUR;




// class Coba {
// 	const NAMA = 'Sulenias';
// }

// echo COBA::NAMA;

// echo __FILE__;


// function coba() {
// 	return __FUNCTION__;
// }

// echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;


 ?>