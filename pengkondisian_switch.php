<?php  
	$x=5;
		switch ($x) //kondisi awal atau ibarat if
			{
			case 1 : //kondisi yang dibandingkan dulu dengan kondisi awal
				echo "Anda memasukkan angka 1";
				break;
			case 2 :
				echo "Anda memasukkan angka 2";
				break;
			case 3 :
				echo "Anda memasukkan angka 3";
				break;
			default : //ibarat else
				echo "Yang anda masukkan salah";
				break;
		}

		echo "<br>";

	$day=date ("D");
		Switch ($day) 
			{
			case 'Sun' : $hari = "Minggu"; 
				break;
			case 'Mon' : $hari = "Senin"; 
				break;
			case 'Tue' : $hari = "Selasa"; 
				break;
			case 'Wed' : $hari = "Rabu"; 
				break;
			case 'Thu' : $hari = "Kamis"; 
				break;
			case 'Fri' : $hari = "Jum'at"; 
				break;
			case 'Sat' : $hari = "Sabtu"; 
				break;
			default : $hari = "Kiamat";
				break;
			}
				echo "Hari ini hari <b>$hari</b>";
?>