<?php
// Pertemuan 2 - PHP
/*
Sintaks PHP
*/
// Standar Output
// echo, print
// print_r (mencetak array) untuk debugging
// var_dump (melihat isi dari variabel) untuk debugging

echo "Yulianto";
print "Yulianto";
print_r("Yulianto");
var_dump("Yulianto");
echo 123;
echo true;
echo false;
echo 'Yulianto';
// Variabel
$nama = "Yulianto";
?>
<!-- PHP didalam HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Belajar PHP</title>title>
</head>
<body>
	<h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
	<p> Ini adalah paragraph </p>
</body>
</html>
<?php
// Operator aritmatika + - * / %
$x = 10;
$y = 20;
echo $x * $y;

echo "<br>";
// Operator penggabung string / concate
// .
$nama_depan = "Yulianto";
$nama_belakang ="geo99";
echo $nama_depan." ".$nama_belakang;

echo "<br>";
// Operator assignment atau penugasan
// =, +=, -+, *=, /=, %=, .=
$x =1;
$x += 5;
echo $x;

$y =1;
$y -= 5;
echo $y;

$nama ="Yulianto";
$nama .=" ";
$nama .="geo99";
echo $nama;

echo "<br>";
//Perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 < 5);
var_dump(1 > 5);
var_dump(1 == "1");

echo "<br>";
// identitas
// ===, !==
var_dump(1 === "1");

echo "<br>";
// Logika
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);

$y = 30;
var_dump($y < 20 && $y % 2 == 0);

$y = 30;
var_dump($y < 20 || $y % 2 == 0);


?>







