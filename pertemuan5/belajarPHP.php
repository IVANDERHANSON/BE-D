<?php

// Cara comment ctrl + /
// Ini Single-Line Comment
echo "bagian ini aktif\n"; // Bagian ini tidak aktif

/*
Ini Multi-Line Comment
Ini Multi-Line Comment
Ini Multi-Line Comment
*/

echo 2+/*In-Line Comment*/2;

// Cara print di PHP
echo "output menggunakan echo\n";
print "output menggunakan print\n";

// Variable Declaration
$number1 = 1;
$number2 = 2;
echo $number1+$number2;

$name = 'Hanson';
echo "My name is ".$name;

// Data Type
$name1 = 'Budi'; // Tipe datanya string
$number = 12; // Tipe datannya integer
$number3 = 3.4; // Tipe datanya double/float
$bool1 = true; // Tipe datanya boolean
$bool2 = false;
$array = array("Budi", "Jakarta", 20, 500000.50);
$x = NULL;

// Accessing Array
echo "Nama: ".$array[0]."\n";
echo "Tempat Tinggal: ".$array[1]."\n";
echo "Umur: ".$array[2]."\n";
echo "Uang: ".$array[3]."\n";

// Arithmetic Operator
$number1 = 21;
$number2 = 5;
echo $number1+$number2."\n";
echo $number1-$number2."\n";
echo $number1*$number2."\n";
echo $number1/$number2."\n";
echo $number1%$number2."\n";
echo $number1**$number2."\n";

// Check Data Type
$x = 5;
var_dump($x);

// Increment & Decrement Operator
$x = 4;
echo ++$x;
echo $x++;
echo $x;

$x = 4;
echo --$x;
echo $x--;
echo $x;

// Assignment Operator
echo "\n";
$x = 5;
$y = 7;
$x = $y;
echo $x;
echo "\n";

$x += $y; // $x = $x + $y
echo $x;
echo "\n";

// Comparison Operator
$x = 1;
$y = 1.0;
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x !== $y);

// Conditional Operator & If-Else
$x = 100;
$y = 90;
if($x == 100 and $y == 90) {
    echo "x bernilai 100 dan y bernilai 100";
}
else if($x == 100 or $y == 90) {
    echo "antara x dan y bernilai 100";
}

if($x == 100 xor $y == 90) {
    echo "antara x dan y bernilai 100";
}
else if($x != 85) {
    echo "Ya x tidak sama dengan 85";
}

// Switch Case
$warna = "hijau";
switch($warna) {
    case "biru":
        echo "warnanya biru";
        break;
    case "merah":
        echo "warnanya merah";
        break;
    default:
        echo "warnanya bukan merah dan biru";
        break;
}

// Looping
$x = 1;
while($x <= 5) {
    echo "\n";
    echo $x;
    $x++;
}

$x = 10;
do {
    echo "\n";
    echo $x++;
} while($x <= 15);

for($i = 0; $i < 5; $i++) {
    echo "\nHello World";
}

$buahBuahan = array("Jeruk", "Mangga", "Apel");
foreach($buahBuahan as $x) {
    echo $x;
    echo "\n";
}

// Built-in Function
$nama = "budi";
echo strlen($nama)."\n"; // mengembalikan panjang string
echo strtoupper($nama)."\n"; // mengubah semua huruf dalam string ke dalam huruf BESAR
$nama = "BUDIMAN";
echo strtolower($nama)."\n"; // mengubah semua huruf dalam string ke dalam huruf KECIL
$nama = "BUDI BUDIMAN";
echo str_word_count($nama)."\n"; // untuk menghitung jumlah huruf dalam sebuah string
$nama = "BUDI";
echo strrev($nama)."\n"; // untuk membalik sebuah string
$x = 6;
echo abs($x)."\n";
$x = -6;
echo abs($x)."\n"; // untuk mengubah angka negatif menjadi angka positif
$x = 100;
echo sqrt(100)."\n"; // untuk mendapatkan akar kuadrat dari sebuah angka

// User-Defined Function

// Declare Function
function message() {
    echo "Hello World!\n";
}
// Call Function
message();

// Declare Function With Parameter
function sum($a, $b) {
    echo $a." + ".$b." = ".$a+$b;
}
sum(10, 5);

?>