<meta charset="UTF-8">
<title>php3</title>
<?php
//начало 1 задания
$i= 0;
while($i <= 100) {
    if ($i % 3 == 0)
        echo $i ."<br>";
    $i++;
    continue;
}
//конец 1 задания
echo "<br>";
echo "<br>";
//начало 2 задания
$x= 0;
do {
    if ($x == 0){
        echo $x . "-это ноль" . "<br>";
        $x++;
    }
    elseif ($x % 2 == 0){
        echo $x . "-Это четное число" . "<br>";
        $x++;
    }
    elseif ($x % 2 == 1){
        echo $x . "-Это нечетное число" . "<br>";
        $x++;
    }
}
while($x<=10);
//конец второго задания
echo "<br>";
echo "<br>";
//начало третьего задания
for ($y=0; $y<=9; print $y++ . "<br>")
{}
//конец третьего задания
echo "<br>";
echo "<br>";
//начало четвертого задания
$a= "Московская область";
$b= "Ленинградская область";
$c= "Рязанская область";
$mos= "Москва";
$zel= "Зеленоград";
$klin= "Клин";
$spb= "Санкт-Петербург";
$vsev= "Всеволожск";
$pavl= "Павловск";
$kron= "Кронштадт";
$kasi= "Касимов";
$razhs= "Ряжск";
$skop= "Скопин";
$mih= "Михайлов";
$korab= "Кораблeв";
//первый вариант
$result= "";
$arr1= array(
    $a=> array($mos , $zel, $klin),
    $b=> array($spb , $vsev , $pavl , $kron),
    $c=> array($kasi , $razhs , $skop , $mih , $korab));

foreach($arr1 as $key => $val){
    $result .= $key .":" . "<br>";
    foreach($val as $arr1){
        $result .= $arr1 . ", ";
    }
    $result = substr($result, 0, -2);
    $result .= "." . "<br>";
}
echo $result;

echo "<br>";
echo "<br>";
//второй вариант
$arr2= array(
    $a=> array($mos , $zel, $klin),
    $b=> array($spb , $vsev , $pavl , $kron),
    $c=> array($kasi , $razhs , $skop , $mih , $korab));

$hr="";
foreach($arr2 as $oblast => $gorod){
    echo $oblast . ":" . "<br>";
    foreach($gorod as $arr1)
        $hr= implode(', ',$gorod);
    echo $hr . ".";
    echo "<br>";
}

//конец четвертого задания
echo "<br>";
echo "<br>";
//начало пятого задания
$arr2= array(
    $a=> array($mos , $zel, $klin),
    $b=> array($spb , $vsev , $pavl , $kron),
    $c=> array($kasi , $razhs , $skop , $mih , $korab));

$hr="";
foreach($arr2 as $oblast => $gorod){
    echo $oblast . ":" . "<br>";

    foreach($gorod as $value){
        if(mb_substr($value, 0, 2) == "К"){
            explode("," , $value);
            echo $value . ",";}
    }
    echo"<br>";
}
//конец пятого задания
echo "<br>";
echo "<br>";
//начало шестого задания

$alphabet= array(
    "а"=>"a",  "б"=>"b",   "в"=>"v",   "г"=>"g",
    "д"=>"d",  "e"=>"e",   "ё"=>"yo",  "ж"=>"zh",
    "з"=>"z",   "и"=>"i",   "й"=>"j",   "к"=>"k",
    "л"=>"l",   "м"=>"m",   "н"=>"n",   "о"=>"o",
    "п"=>"p",   "р"=>"r",   "с"=>"s",   "т"=>"t",
    "у"=>"u",   "ф"=>"f",   "х"=>"kh",   "ц"=>"c",
    "ч"=>"ch",  "ш"=>"sh",  "щ"=>"shch","ы"=>"y",
    "э"=>"eh",   "ю"=>"yu",  "я"=>"ya",

    "А"=>"A",
    "Б"=>"B",
    "В"=>"V",
    "Г"=>"G",
    "Д"=>"D",
    "Е"=>"E",
    "Ё"=>"YO",
    "Ж"=>"ZH",
    "З"=>"Z",
    "И"=>"I",
    "Й"=>"J",
    "К"=>"K",
    "Л"=>"L",
    "М"=>"M",
    "Н"=>"N",
    "О"=>"O",
    "П"=>"P",
    "Р"=>"R",
    "С"=>"S",
    "Т"=>"T",
    "У"=>"U",
    "Ф"=>"F",
    "Х"=>"Kh",
    "Ц"=>"C",
    "Ч"=>"CH",
    "Ш"=>"SH",
    "Щ"=>"SHCH",
    "Ы"=>"Y",
    "Э"=>"EH",
    "Ю"=>"YU",
    "Я"=>"YA",
    "ъ"=>"","ь"=>"", "Ь"=>"", "Ъ"=>"",
);

echo strtr("Поцелуйте мой блестящий металлический зад!" , $alphabet);

//конец шестого задания
echo "<br>";
echo "<br>";
//начало седьмого задания
$space= " ";
$lda= "Жопа нахрен новый год!";
$text= str_replace($space, "_",$lda);
echo $text;
//конец седьмого задания
echo "<br>";
echo "<br>";
//начало восьмого задания
$type= "Текст раз два три жопа";
$transcript= strtr($type , $alphabet);
$type= "Текст раз два три раз два три РАЗ ДВА ТРИ";
$transcript= strtr($type , $alphabet);
$space= " ";
$text= str_replace($space, "_",$transcript);
echo $text;
//конец восьмого задания