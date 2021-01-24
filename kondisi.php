<?php 

//Buatlah Urutan Angka dengan Output 10 s.d 1
	for($i=10; $i>=1; $i--){
		echo "$i, ";
	}
		echo "<br>";

//Buatlah urutan angka 10 s.d 1 dan setiap kelipatan 3 diganti dengan UMT
	$i=10;
		while($i >= 1){
			if ($i % 3 == 0){
				echo "UMT, ";
			}else{
 				echo "$i, ";
 			}
 	$i--;	
		}
				echo "<br>";

//Buatlah urutan angka ganjil 20 s.d 1
	$i=20;
		do{if ($i % 2 == 0){
			echo "";
		  }else{
 			echo "$i, ";
 		  }
	$i--;
		}while ($i>=1);
			echo "<br>";

//Buatlah urutan angka genap 20 s.d 1
	$i=20;
		do{if ($i % 2 == 0){
			echo "$i, ";
		  }else{
 			echo "";
 		  }
	$i--;
		}while ($i>=1);
			echo "<br>";
?>