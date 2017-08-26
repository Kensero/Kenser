<?php
define('IMAGE_PATH','//kenser/php7/img/');
define('THUMB_PATH','//kenser/php7/thumbs/');
function dbconfig()
{

	$hostname = 'localhost';
	$username = 'root';
	$password = NULL;
	$dbName   = 'imgs';


	global $dbc;
	$dbc = mysqli_connect($hostname, $username, $password, $dbName) or die('No connect with data base');
	mysqli_query($dbc, 'SET NAMES utf8');

}