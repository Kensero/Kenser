<html>
<head>
    <meta charset="UTF-8">
    <title>Галерея изображений</title>
</head>
<body>
<h2>Какое-то описание картинки</h2>
<?php
for($i = 1; $i <= 4; $i++)
    echo "<a href = photo.php?id=$i >Картинка №$i</a><br/>";
    echo "<a href= sum.php>Калькулятор</a>". "<br>";
    echo "<a href= sum2.php>Калькулятор2</a>";
?>
</body>
</html>