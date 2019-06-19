
<?php 
$id=$_POST["txtId"];
$img=$_FILES["img"]["name"];
$linkanh='img/'.$img;
$tendv=$_POST["txtTieude"];
$noidung=$_POST["txtNoidung"];
include("./cauhinh/db_cauhinh.php");
$ketnoi=mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
mysqli_set_charset($ketnoi,'utf8');
move_uploaded_file($_FILES["img"]["tmp_name"], "../img/".$img);
$sql="
UPDATE `album` SET `tenalbum` = '".$tendv."', `noidung` = '".$noidung."', `anh` = '".$linkanh."' WHERE `album`.`maalbum` = '".$id."' 
";
mysqli_query($ketnoi,$sql);
header('location:quanlyalbum.php');

 ?>