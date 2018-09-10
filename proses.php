<?php 
//Tuliskan kode anda di bawah ini
	$a = $_GET['a'];

	for ($i=$a; $i >=1 ; $i--) { 
		for ($j=$i; $j>= 1 ; $j--) { 
			echo "$j";
		}echo "<br>";
	}

	$genap= array();
	$ganjil= array();
	for ($i=1; $i <= $a ; $i++) { 
		if ($i % 2 == 0) {
			array_push($genap, $i);
			print_r(array_push($genap, $i));
		}else{
			array_push($ganjil, $i);
			print_r(array_push($ganjil, $i));
		}
	}
?>
