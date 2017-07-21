<?php

if(isset ($_POST['a']) && isset ($_POST['b'])) {
    switch ($_POST['dzen']) {
        case '+':
            $result= ($_POST['a'])+($_POST['b']) ; $sign= "+";
            break;
        case '-':
            $result= ($_POST['a'])-($_POST['b']);$sign= "-";
            break;
        case '*':
            $result= ($_POST['a'])*($_POST['b']);$sign= "*";
            break;
        case '/':
            if($_POST['b']==0){
                $result= "Ошибка";}
            else
            {$result= ($_POST['a'])/($_POST['b']);$sign= "/";}
            break;
    }
}
else{
    $result = "";}

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>калькулятор мать его</title>
</head>
<body>
<form method="post">
    <input type="text" name="a" value="<?php echo $_POST['a'];?>" />
    <?php echo $sign ?>
    <input type="text" name="b" value="<?php echo $_POST['b'];?>"/>
    =
    <?php echo $result . "<br>"?>
    <input name="dzen" type="submit" value="+">
    <input name="dzen" type="submit" value="-">
    <input name="dzen" type="submit" value="*">
    <input name="dzen" type="submit" value="/">

</form>
<a href= index.php>В начало</a>
</body>
</html>

