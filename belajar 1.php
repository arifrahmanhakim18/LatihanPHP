<?php
// String Variables
    $string_saya = "Hello Teman, Bagaimana kabar kamu? <br>";
    echo $string_saya;

    echo "<br>";
?>


<?php
// Float

$x = 1.989;
$y = 1.8e4;

echo $x;
echo "
";

echo $y;
echo "<br>";
echo "<br>";
?>

<?php
// Boolean

$z=1;
$a=0;

if($z)
echo "z adalah benar";

if($a)
echo "a adalah salah";

echo "<br>";
echo "<br>";
?>


<?php 
// var_dumb

var_dump("Output Var_dumb dalam sebuah string");
echo "<br>";
var_dump(true);

echo "<br>";
var_dump(89);

echo "<br>";
var_dump(18.04);
echo "<br>";
echo "<br>";
?>

<?php
// NULL

$b = null;
var_dump($b);

echo "<br>";
echo "<br>";

?>

<?php
// Constants

// Mendefinisikan Constant
define("SITE_URL", "https://www.arifrahmanhakim.com");

// Menggunakan Contant
echo "Terimakasih banyak sudah mengunjungi " .SITE_URL;

echo "<br>";
echo "<br>";
?>

<?php
// Array
// Indexed Array 1

$ar = array(4,5,6);

foreach($ar as $nilai)
{
    echo "Nilainya adalah $nilai";
    echo "<br>";
}

echo "<br>";

?>

<?php
// Indexed Array 2

$ray[0] = "Aespa";
$ray[1] = "NCT";
$ray[2] = "EXO";
$ray[3] = "SHINee";
$ray[4] = "Super Junior";
$ray[5] = "TVXQ";

foreach ($ray as $grup)
{
    echo "Grup dibawah naungan SM Entertainment adalah $grup <br />";
}

echo "<br>";
?>

<?php

// Associative array 1

$exo = "Growl";
$shinee = "Lucifer";
$superjunior = "Sorry Sorry";
$lagu = array("EXO" => $exo, "SHINee" => $shinee, "Super Junior" => $superjunior);

echo "Lagu dari EXO adalah " . $lagu['EXO'] . "<br />";
echo "Lagu dari SHINee adalah " . $lagu['SHINee'] . "<br />";
echo "Lagu dari Super Junior adalah " . $lagu['Super Junior'] . "<br />";

echo "<br>";

?>

<?php

// Associative Array 2

$member['exo'] = "D.O.";
$member['shinee'] = "Minho";
$member['Super Junior'] = "Donghae";

echo "Salah satu member dari EXO adalah " . $member['exo'] . "<br />";
echo "Salah satu member dari SHINee adalah " . $member['shinee'] . "<br />";
echo "Salah satu member dari Super Junior adalah " . $member['Super Junior'] . "<br />";

echo "<br>";

?>

<?php
// Multidimentional Array 1

$mobil = array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

foreach($mobil as $nilai)
{
    echo $nilai[0][0].": Dalam stok " . $nilai[0][1] . ", terjual: " . $nilai[0][2] . ".<br>";
}

echo "<br>";

?>

<?php
// Multideminsional Array 2

$nilai = array (
"D.O." => array (
    "fisika" => 39,
    "matematika" => 30,
    "kimia" => 39
),

"Minho" => array (
    "fisika" => 30,
    "matematika" => 32,
    "kimia" => 29,
),

"Donghae" => array (
    "fisika" => 31,
    "matematika" => 22,
    "kimia" => 35
)

);

echo "Nilai untuk D.O dalam Fisika : ";
echo $nilai['D.O.']['fisika']."<br />";

echo "Nilai untuk Minho dalam Matematika : ";
echo $nilai['Minho']['matematika']. "<br />";

echo "Nilai untuk Donghae dalam Kimia : ";
echo $nilai['Donghae']['kimia'];

echo "<br>";
echo "<br>";

?>

<?php
// print_r

$var1 = 'def';
$def = array ('Mapel1' => 'Fisika', 'Mapel2' => 'Kimia', 'Mapel3' => 'Matematika', 'Kelas' => array(9,10,11,12));

print_r($var1);
echo "<br>";
print_r($def);
echo "<br>";
echo "<br>";


?>

<?php
    // Single Line Comments

    # Ini juga Single Line Comment

    // Kita juga bisa menggunakan komen untuk meninggalkan keluar bagian dari garis kodingan

    $x = 20 + 100; // Ini adalah operasi tambahan
    echo $x;

    echo "<br>";
    echo "<br>";


?>

<?php
// Multi Line Comments

/*
Ini digunakan untuk memberikan komen 
dengan baris ganda atau multiple
*/

$x = 100 /* + 56 */ + 363;
echo $x;

echo "<br>";
echo "<br>";

?>

<?php 

// isset

$var2 = 'test';
var_dump(isset($var2));

echo "<br>";
var_dump(isset($var3));

echo "<br>";
echo "<br>";

?>

<?php
// unset

$var2 = 'test';
unset($var2);

var_dump(isset($var2));

echo "<br>";
echo "<br>";
?>

<?php
// if statement

$c = 40;

if($c==40)
{
    echo "nilai c adalah 40";
}

echo "<br>";
echo "<br>";
?>

<?php
// if else statement

$d = 30;

if($d==40)
{
    echo "nilai d adalah 40";
}
else
{
    echo "nilai d bukan 40";
}

echo "<br>";
echo "<br>";
?>

<?php
// if elseif else statement

$e = 10;

if($e==11)
{
    echo "nilai e adalah 11";
}
elseif($e==12)
{
    echo "nilai e adalah 12";
}
else
{
    echo "Nilai e adalah 10";
}

echo "<br>";
echo "<br>";

?>

<?php
// Perbedaan == & ===

$f = 345;
$g = 345;

if($f===$g)
{
    echo "Tipe data dan nilai keduanya adalah sama";
}
else
{
    echo "Tipe data dan nilainya berbeda";
}

echo "<br>";
echo "<br>";

?>

<?php
// Switch Statement

$h = "Senin";

switch($h)
{
    case "Senin";
    echo "Ini adalah Hari Senin";
    break;

    case "Selasa";
    echo "Ini adalah Hari Selasa";
    break;

    case "Rabu";
    echo "Ini adalah Hari Rabu";
    break;

    case "Kamis";
    echo "Ini adalah Hari Kamis";
    break;

    case "Jumat";
    echo "Ini adalah Hari Jumat";
    break;

    case "Sabtu";
    echo "Ini adalah Hari Sabtu";
    break;

    case "Minggu";
    echo "Ini adalah Hari Minggu";
    break;

    default:
    echo "Bayangkan hari apa ini ?";
}

echo "<br>";
echo "<br>";


?>

<?php

// for loop statement

$a = 0;
$b = 0;

for($i = 0;$i<5;$i++)
{
    echo $i. "<br>";

}

echo "<br>";
echo "<br>";
?>