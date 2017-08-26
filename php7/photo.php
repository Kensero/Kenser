<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Просмотр фото</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <style>
        #hw7_full_image {text-align: center;}
    </style>
</head>
<body>
	

<?php 
	require 'dbconfig.php';
	dbconfig();

	if (isset($_GET['id'])) $id_img = $_GET['id'];
	$query = "SELECT * FROM `images` WHERE `id_img` = $id_img LIMIT 1";
	$result = mysqli_query($dbc, $query)
	      or die("Ошибка при отправке запроса");

	while ($row = mysqli_fetch_array($result)) {
		$new_counter = $row['Views']+1;
		mysqli_query($dbc, "UPDATE `images` SET Views = '$new_counter' WHERE id_img = '$id_img'")
			or die('Запрос к БД не выполнен! Количество просмотров осталось прежним..');
		}
	$result = mysqli_query($dbc, $query)
	      or die("Ошибка при отправке запроса");

	while ($row = mysqli_fetch_array($result)) {
		echo '<div id="hw7_full_image">';
		echo '<img class="img-thumbnail" src=" ' . IMAGE_PATH . $row['image_name'] . ' " alt="полное изображение">';
		echo '<p>';
		echo '<span class="Views" onclick="alert(\'Это количество просмотров, спасибо и Вам, что посмотрели!\')"></span>';
		echo '<b class="badge badge-pill badge-primary">' . $row['Views'] . '</b>';
		echo '<span class="likes" ></span>';
		echo '<b class="badge badge-pill badge-danger">' . $row['likes'] . '</b>';
		echo '</p>';
		echo '<a href= index.php>Вернуться</a>';
		echo "</div>";

	}
	echo '</div>';

	mysqli_close($dbc);

 ?>
</body>
</html>
