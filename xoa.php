
<?php 
$id=$_GET["id"];

include("./cauhinh/db_cauhinh.php");

$ketnoi = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
$sql="
		DELETE 
		FROM `album` 
		WHERE `album`.`maalbum` = '".$id."'
		";

mysqli_query($ketnoi,$sql);

header('location:quanlyalbum.php');

 ?>