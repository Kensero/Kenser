    <meta charset="UTF-8">
    <title>php</title>
<?php
$x = 1000;
$y = 1000.50;
$z = 'Thousand';
$o = true;
define('Kostya', '1488');

$x1 = '«Славная осень! Здоровый, ядреный';
$x2 = 'Воздух усталые силы бодрит';
$x3 = 'Лед неокрепший на речке студеной';
$x4 = 'Словно как тающий сахар лежит.»';
$x5 = 'Н. А. Некрасов';

$y1 = 10;
$y2 = 'Двадцать приветов';


$a = true;
$a1 = false;


echo $x . "<br>" .$y . "<br>". $z . "<br>" . $o . "<br>" . Kostya . "<br>" . "<br>";
echo "$x" . "<br>" . "$y" . "<br>". "$z" . "<br>" . "$o" . "<br>" . "Kostya" . "<br>" . "<br>";
echo '$x' . "<br>" .'$y' . "<br>". '$z' . "<br>" . '$o' . "<br>" . 'Kostya' . "<br>" . "<br>";

echo $x1 . "<br>";
echo $x2 . "<br>";
echo $x3 . "<br>";
echo $x4 . "<br>";
echo '<p style="text-decoration: underline;">'. $x5 ."</p>". "<br>" . "<br>";

echo $x1 . "<br>" . $x2 . "<br>" . $x3 . "<br>" . $x4 . "<br>" . '<p style="text-decoration: underline;">'. $x5 ."</p>". "<br>" . "<br>";

echo $a xor $a1; echo " "; echo $a xor $a;
echo $a1 xor $a1; echo " "; echo  $a1 xor $a;

?>

