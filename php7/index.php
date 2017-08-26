<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Просмотр фото</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>
<body>
	<p class="border border-danger">
		Создать галерею изображений, состоящую из двух страниц:
		index.php – просмотр всех фотографий (уменьшенных копий);
		photo.php – просмотр конкретной фотографии (изображение оригинального размера).
		В базе данных создать таблицу, в которой будет храниться информация о картинках.
	</p>
	<p class="border border-danger">
		На странице просмотра фотографии полного размера под картинкой должно быть указано число ее просмотров.
		На странице просмотра галереи список фотографий должен быть отсортирован по популярности. 
		Популярность - число кликов по фотографии.
	</p>


	<?php 
	require 'dbconfig.php';
	dbconfig();
	
	$query = "SELECT * FROM `images` ORDER BY `likes` DESC, `Views` DESC ";
	$result = mysqli_query($dbc, $query)
	      or die("Ошибка при отправке запроса");


	while ($row = mysqli_fetch_array($result)) {

		echo '<div style="float:left;">';

		echo '<a href = likes.php?id='.$row['id_img'].'><img class="img-thumbnail"  src="' . THUMB_PATH . $row['thumb_name'] . '" alt="миниатюра"></a>';
		echo '<p>';

		echo '<span class="Views" onclick="alert(\'Это количество просмотров, спасибо и Вам, если посмотрели!\')"></span>';
		echo '<i class="badge badge-pill badge-primary">' . $row['Views'] . '</i>';
		
		echo '<span class="likes"></span>';
		echo '<i class="badge badge-pill badge-danger">' . $row['likes'] . '</i>';

		echo '</p>';
		echo '</div>';
	}

	mysqli_close($dbc);
	?>


</div>
</body>
</html>
