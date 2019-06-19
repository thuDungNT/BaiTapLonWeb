<?php 
$img=$_FILES["img"]["name"];
$linkanh='img/'.$img;
$tendv=$_POST["txtTieude"];
$noidung=$_POST["txtNoidung"];

include("./cauhinh/db_cauhinh.php");
$ketnoi=mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

$linkanh='img/'.$img;
move_uploaded_file($_FILES["img"]["tmp_name"], "../img/".$img);
$sql="
INSERT INTO `album` ( `tenalbum`, `noidung`, `anh`) 
VALUES  ('".$tendv."', '".$noidung."', '".$linkanh."')";

mysqli_query($ketnoi, $sql);
header('location:quanlyalbum.php');
 ?>