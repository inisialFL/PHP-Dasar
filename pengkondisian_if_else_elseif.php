<?php 
	$nilai = 80;
		if($nilai >= 60){
			echo "Nilai andi $nilai, anda Lulus";
		}else{
			echo "Nilai andi $nilai, anda Gagal";
		}
		echo "<br>";

	$nilai = 75;
		if($nilai >= 80){
			echo "Nilai Andi $nilai, maka nilainya A";
		}else{
			echo "Nilai Andi $nilai, maka nilainya B";
		}
		echo "<br>";

	$user = "Fitri";
	$pass = "123";
		if($user === "Fitri"  && $pass === "123"){
			echo "Login Berhasil";
		}else{
			echo "Login Gagal";
		}
		echo "<br>";

	$x = 20;
		if($x < 20){
			echo "Benar";
		}elseif($x == 20){
			echo "Ngopi";
		}else{
			echo "Salah";
		}
?>