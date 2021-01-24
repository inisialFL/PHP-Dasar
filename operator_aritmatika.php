<?php 
	$x=20;
	$y=5;
		echo $x*$y;
		echo "<br>";
		echo $x/$y;
		echo "<br>";
		echo $x+$y;
		echo "<br>";
		echo $x-$y;
		echo "<br>";
		echo $x%$y;
		echo "<br>";
		echo 15*2;
		echo "<br>";
		echo 15/2;
		echo "<br>";
		echo 15+2;
		echo "<br>";
		echo 15-2;
		echo "<br>";
		echo 15%2;
		echo "<br>";

	$Uang_Utuh = 100000;
	$Uang_Dipakai = 0.1;
	$Total = $Uang_Utuh - ($Uang_Utuh*$Uang_Dipakai);
		echo "Uang Utuh = Rp. $Uang_Utuh<br>";
		echo "Uang Dipakai = Rp. $Total";
 ?>