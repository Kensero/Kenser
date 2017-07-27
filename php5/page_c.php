<?php
header("Content-Type: text/html; charset=UTF-8");
function auth($user, $pass)
{
    if ($user != "Dio")
    {
        echo "Ты не тот за кого себя выдаешь!<br><a href = 'login.php'>Авторизоваться</a>";
        return false;
    }
    elseif ($pass != "8a146f1a3da4700cbf03cdc55e2daae6")
    {
        echo "Пароль неверный!<br><a href = 'login.php'>Авторизоваться </a>";
        return false;
    }
    else{
    session_start();
    $_SESSION["name"] = $user;
    $_SESSION["id"] = 1;
    return true;}
}
if (($_POST["login"] && $_POST["passw"]))
{
    $user = $_POST["login"];
    $pass = md5($_POST["passw"]);
}

if (auth($user, $pass)){
    echo "Добро пожаловать, великий ".($_SESSION["name"]) . "<br> Твоя сессия: номер  ". $_SESSION["id"];
    echo "<p><a href = page_a.php>Страница А</a></p>";
    echo "<p><a href = page_b.php>Страница Б</a></p>";
    echo"<p><a href = login.php>Страница авторизации</a></p>";
    echo "<p><a href = logout.php>Выйти</a></p>";}

?>


