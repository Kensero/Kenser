<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();

echo "Имя сессии: ".session_name()."
        <br>
        Значение: ".session_id()."
        <br>";

if (isset($_SESSION["id"]))
{
    echo "Сессия ".$_SESSION["id"]." завершена. Прощай, ".$_SESSION["name"];
    unset($_SESSION["id"]);
    unset($_SESSION["name"]);
}
else
    echo "Кто здесь?";
echo "<br><a href = 'login.php'>Авторизоваться</a>";

?>
