<?php
	$i=1;
		while($i <= 6){
			echo "<h$i> Heading $i</h$i> ";
	$i++;
		}
			echo "<br>";
	$a="Fitri Lestari";
	
	$Nama="Lestari";
	$Nim="17.55.201.228";
	$Kelas="D2";
 ?>

<!--<!DOCTYPE html>
<html>
<head>
	<title>Heading</title>
</head>
<body>
	<h1><?php echo "$a"?></h1>
	<h2><?php echo "$a"?></h2>
	<h3><?php echo "$a"?></h3>
	<h4><?php echo "$a"?></h4>
	<h5><?php echo "$a"?></h5>
	<h6><?php echo "$a"?></h6>
</body>
</html>-->

<!DOCTYPE html>
<html>
<head>
	<title>PHP didalam HTML</title>
</head>
<body>
	<h1>Nama : Fitri <?php echo"$Nama"?></h1>
 	<h1>Nim : <?php echo"$Nim"?></h1>
 	<h1>Kelas : <?php echo "$Kelas"?></h1>
</body>
</html>