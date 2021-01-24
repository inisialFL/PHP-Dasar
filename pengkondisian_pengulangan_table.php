<?php
//Ada 10 sepeda, 
//sepede 1,2,3,4,6 lagi disewa, 
//sepeda 5 lagi di bengkel, 
//sepeda 7,8,9 lagi di bengkel. 
	for ($i=1; $i<=10; $i++){
		if ($i <= 6 && $i !=5){
			echo "Sepeda $i lagi di sewa<br>";
		}elseif ($i==5){
			echo "Sepeda $i lagi di bengkel<br>";
		}else{
			echo "Sepeda $i lagi rusak<br>";
		}
	}
			echo "<br>";

// Ada 10 motor, 
// motor nomer 1-6  bisa ngojek,
// motor nomer 7-9 lagi di bengkel,
// motor nomer 10 dipake pulang kampung.
	$a =10;
	$b =1;
		for ($b=1; $b<=$a ; $b++) { 
 			if ($b<=6){
				echo "Motor $b bisa ngojek<br>";
			}elseif ($b==10) {
				echo "Motor $b pulang kampung<br>";
			}else{
 				echo "Motor $b lagi di bengkel<br>";
 			}
		} 
				echo "<br>";

//i=bari
//j=kolom
	echo "<table border=3 cellpadding=15 cellspacing=2>";
	for ($i=1; $i<=10; $i++ ){
		echo "<tr>";
	for ($j=1; $j<=5 ; $j++) { 
		echo "<td>$i,$j</td>";
	}
		echo "</tr>";
	}
		echo "</table>";
?>