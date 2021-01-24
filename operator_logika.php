<?php 
	$x=3;
	$y=4;
		var_dump ($x<$y && $x!==$y);
		echo "<br>";
		var_dump ($x===$y || $y>$x);
		echo "<br>";

	$a = 30;
		var_dump ($a < 20 || $a % 2 == 0);
		echo "<br>";
		var_dump ($a < 20 && $a % 2 == 0);
		echo "<br>";
		var_dump (!$a < 20 || $a % 2 == 0);
		echo "<br>";
		var_dump (!$a < 20 && $a % 2 == 0);
?>