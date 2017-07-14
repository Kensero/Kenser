<meta charset="UTF-8">
<title>тест</title>

<?php
$x= 10;
$y= -2;
if (($x >= 0)&&($y >= 0)){
    echo ($x - $y);}
elseif (($x < 0)&&($y < 0)){
    echo ($x * $y);}
elseif (($x < 0)&&($y > 0)){
    echo ($x + $y);}
else   echo ($x + $y);
echo "<br>";
echo "<br>";

$a= rand(0, 15);
switch($a)
{
    case 1: for ($a = 1; $a <= 1; $a++ ) {echo $a;};
    break;
    case 2: for ($a = 1; $a <= 2; $a++) {echo $a;};
    break;
    case 3: for ($a = 1; $a <= 3; $a++) {echo $a;};
    break;
    case 4: for ($a = 1; $a <= 4; $a++) {echo $a;};
    break;
    case 5: for ($a = 1; $a <= 5; $a++) {echo $a;};
    break;
    case 6: for ($a = 1; $a <= 6; $a++) {echo $a;};
    break;
    case 7:for ($a = 1; $a <= 7; $a++) {echo $a;};
    break;
    case 8: for ($a = 1; $a <= 8; $a++) {echo $a;};
    break;
    case 9: for ($a = 1; $a <= 9; $a++) {echo $a;};
    break;
    case 10: for ($a = 1; $a <= 10; $a++) {echo $a;};
    break;
    case 11: for ($a = 1; $a <= 11; $a++) {echo $a;};
    break;
    case 12: for ($a = 1; $a <= 12; $a++) {echo $a;};
    break;
    case 13: for ($a = 1; $a <= 13; $a++) {echo $a;};
    break;
    case 14: for ($a = 1; $a <= 14; $a++) {echo $a;};
    break;
    case 15: for ($a = 1; $a <= 15; $a++) {echo $a;};
    break;
}
echo "<br>";
echo "<br>";

$false= 'на ноль делить нельзя';
$Q= 3;
$W= 4;
$pls= plus ($Q , $W);
$mns= minus ($Q , $W);
$multi= multiplic ($Q , $W);
$divis= division ($Q , $W);
function plus($Q , $W)
{
    return ($Q + $W);
}

function minus($Q , $W)
{
    return ($Q - $W);
}
function multiplic($Q , $W)
{
    return ($Q * $W);
}
function division($Q , $W)
{
    if($W == 0)
    {
        return 'Нельзя делить на ноль!!!!1';
    }
    else
    {
        return ($Q / $W);
    }
}
echo $pls . ' ' . $mns . ' ' . $multi . ' ' . $divis;

echo "<br>";
echo "<br>";

$arg1= 20;
$arg2= 10;
$operator= plus($arg1, $arg2);
function mathOperation($arg1, $arg2, $operator)
{
    switch ($operator)
    {
        case minus ($arg1 , $arg2):
            break;
        case multiplic ($arg1 , $arg2):
            break;
        case division ($arg1 , $arg2):
            break;
        case plus ($arg1 , $arg2):
            break;
    }
        return $operator;
}

echo $operator . 'Вот так то!';

echo "<br>";
echo "<br>";

function power($val, $pow)
{
    if ($pow==0)
        return 1;
    elseif ($pow<0)
        return power(1/$val, -$pow  );
    else
        return $val* power($val , $pow-1);
}
echo power(2, 5);

echo "<br>";
echo "<br>";

date_default_timezone_set('Asia/Yekaterinburg');

$chas= date( "H" );
$min= date("i");


function hour($hour)//это ебнутый код который я написал
{
    if ($hour==1 or $hour==21){
        return $hour . ' ' . 'час';}
    elseif($hour==2 or $hour==3 or $hour==4 or $hour==22 or $hour==23 or $hour==24){
        return $hour . ' '. 'часа';}
    else{
        return $hour .' '. 'часов';}

}
function minute($min)
{
    if ($min==1 or $min==21 or $min==31 or $min==41 or $min==51){
        return $min . ' '  .'минута';}
    elseif($min==2 or $min==3 or $min==4 or $min==22 or $min==23 or $min==24 or $min==32 or $min==33 or $min==34 or $min==42 or $min==43 or $min==44 or $min==52 or $min==53 or $min==54){
        return $min .' ' . 'минуты';}
    else{
        return $min .' ' . 'минут';}

}
echo hour($chas) ; echo ' '; echo minute($min); //это ебнутый код который я написад

echo '<br>';
echo '<br>';

function sklonen($n,$s1,$s2,$s3){  //это нормальный код который я скопипастил
    $m = $n % 10; $j = $n % 100;

    if($m==0 or $m>=5 or ($j>=10 and $j<=20)) return $n.' '.$s3;
    if($m>=2 and $m<=4) return  $n.' '.$s2;
    return $n.' '.$s1;
}

function sklonen1($n,$s1,$s2,$s3){  //это нормальный код который я скопипастил
    $m = $n % 10;
    $j = $n % 100;

    if ($m == 0 or $m >= 5 or ($j >= 10 and $j <= 20)) return $n . ' ' . $s3;
    if ($m >= 2 and $m <= 4) return $n . ' ' . $s2;
    return $n . ' ' . $s1;
}

echo sklonen( $chas, 'час','часа', часов); echo ' ';
echo sklonen1( $min, 'минута', 'минуты', 'минут');
