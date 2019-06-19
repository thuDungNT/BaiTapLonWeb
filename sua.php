
<!DOCTYPE html>
<html>
<head>
	<title>Sửa Album </title>
	<link rel="stylesheet" type="text/css" href="../css/phongcach.css">
</head>
<body>
<h1 style="text-align: center;">SỬA ALBUM</h1><HR>
<?php
  $id = $_GET["id"];
  include("./cauhinh/db_cauhinh.php");
  $ketnoi=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

  $sql= "
  SELECT *
  from album
  WHERE maalbum ='".$id."'";

  $noidungdv=mysqli_query($ketnoi,$sql);

  while ($row=mysqli_fetch_array($noidungdv)) {
  
  
;?>

<form  method="post" action="suaabth.php" enctype="multipart/form-data" >
<table >
	<tr>
		<td>Tiêu đề</td>
		<TD> <input style="height:60px; width: 600px;" type="text" name="txtTieude" value="<?php echo $row['tenalbum'] ; ?>">
		</TD>
	</tr>
	<tr>
		<td style="size: 30px">Nội dung</td>
		<TD> <textarea style="height: 300px ; width: 600px;" name="txtNoidung" ><?php echo $row['noidung']; ?></textarea> 
		</TD>
	</tr>
	<tr>
		<td>Ảnh</td>
		<TD > <img src="./<?php echo $row['anh'];  ?>" style="height: 200px;width: 600px" >
		<TD>  <input type="file" name="img" >
		
		</TD>
	</tr>
	<tr>
		<td colspan="2" style="text-align: center;">
			<input type="hidden" name="txtId" value="<?php echo $row['maalbum'] ; ?>">
			<input type="submit" name="txtSubmit" value="Cập nhật">
		</td>
		
	</tr>
	<?php 
	}
	mysqli_close($ketnoi);
	 ;?>
</table>
</form>
</body>
</html>