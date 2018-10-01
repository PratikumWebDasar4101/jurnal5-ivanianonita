<?php
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$komentar=$_POST['komentar'];
$hitung=count(explode(" ",$komentar));

echo "Nim	: $nim <br>";
echo "Nama : $nama<br>";
echo "Email : $email";

echo "<br>Jumlah Kata : $hitung";

if($hitung <5){
	echo"<br>Maaf Jumlah kata Kurang dari 5 kata ";
}
else
{
	die("<br><br>$komentar");
}



?>
