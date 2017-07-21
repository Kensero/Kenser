<?php

if(isset ($_POST['a']) && isset ($_POST['b'])) {
    switch ($_POST['select']) {
        case 'plus':
            $result= ($_POST['a'])+($_POST['b']);
            break;
        case 'minus':
            $result= ($_POST['a'])-($_POST['b']);
            break;
        case 'multi':
            $result= ($_POST['a'])*($_POST['b']);
            break;
        case 'divis':
           if($_POST['b']==0){
                $result= "Нельзя делить на ноль";}
                else
                {$result= ($_POST['a'])/($_POST['b']);}
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
        <input type="text" name="a" />
         <select name="select">
             <option value="plus">+</option>
             <option  value="minus">-</option>
             <option  value="multi">*</option>
             <option  value="divis">/</option>
         </select>
          <input type="text" name="b" />
         <input type="submit" value="=" />
    <?php echo $result . "<br>"?>
    </form>
<a href= index.php>В начало</a>
</body>
</html>
