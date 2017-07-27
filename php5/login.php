<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
if ($_SESSION["id"])
    $user = $_SESSION["name"];

// логин - Dio
// пароль - 1488

?>
<h1>Страница авторизации</h1>

<?php if (isset ($_SESSION["name"]))
{echo "Привет, " . $_SESSION["name"] . "<br>";}?>

<form method='post' action = "page_c.php">
    <input type='text' placeholder='логин' name='login' value='<?= $user?>'/>
    <input type='text' placeholder='пароль' name='passw' value=''/>
    <br>
    <input type='submit' name='logsub' value='Войти'>
</form>



