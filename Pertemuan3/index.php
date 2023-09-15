<?php
    // Ini Komentar
  /* 
    Ini Komentar Banyak 
  */

//   STANDAR OUTPUT
//   echo "<h2>Pertemuan 3 </h2> ";
  
//   print "Sir Fajar Conan Doyle <br>";
  
//   print_r("Fajar Holmes <br>");

// var_dump(); untuk menampilkan tipe data dan lenght
//   var_dump("Fajar Nurdiansyah");

//   echo"<br>";
//   echo true;

$nama = "Sir Fajar Nurdiansyah <br> <br>";
echo  "$nama";

// Operator aritmatika
echo "Aritmatika + - / * % : <br>";

$x = 10;
$y = 50;
echo $x + $y;
echo "<br>";

$nama_depan = "Fajar";
$nama_belakang = "Nurdiansyah";

echo $nama_depan . " " . $nama_belakang;

echo "<br>";
// Operator assignment += -= /= %=
$a = 1;
$a /= 2;
echo $a;
echo "<br>";

// Operator Pembanding >, <, >=, <=, ==, !=
var_dump(1 == '5');
echo "<br>";
// Operator Identitas ( ===, !== ) 
var_dump(1 === 1);

// Operator Logika
// &&, ||, !

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="color: blue;"><?php echo "Pemrograman Web"; ?></h1>
    <?php 
        echo "<h1> Sir Fajar Conan Doyle </h1>";
    ?>
</body>

</html>