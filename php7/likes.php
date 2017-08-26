<?php 
	require 'dbconfig.php';
	dbconfig();

	if (isset($_GET['id'])){ $id_img = $_GET['id'];}

	$query = "SELECT * FROM `images` WHERE `id_img` = $id_img LIMIT 1";
	$result = mysqli_query($dbc, $query)
	      or die("Ошибка при отправке запроса");
	while ($row = mysqli_fetch_array($result)) {
		$new_like = $row['likes']+1;
		mysqli_query($dbc, "UPDATE `images` SET likes = '$new_like' WHERE id_img = '$id_img'")
			or die('Запрос к БД не выполнен! Количество лайков осталось прежним...');
	}
	mysqli_close($dbc);
    header('Location: photo.php?id='.$id_img.'')
?>