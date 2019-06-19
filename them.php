
<!DOCTYPE html>
<html>
<head>
	<title>Thêm mới Album</title>
	<link rel="stylesheet" type="text/css" href="../css/phongcach.css">
</head>
<body>
<h1 style="text-align: center;">THÊM MỚI ALBUM</h1>
<form method="POST" action="themabth.php" enctype="multipart/form-data" >
	<table>
		<tr>
		<td>Tiêu đề</td>
		<TD> <input style="height:60px; width: 600px;" type="text" name="txtTieude">
		</TD>
	</tr>
	<tr>
		<td style="size: 30px">Nội dung</td>
		<TD> <textarea style="height: 300px ; width: 600px;" name="txtNoidung" ></textarea> 
		</TD>
	</tr>
	<tr>
		<td>ảnh</td>
		<TD>  <input type="file" name="img" >
		</TD>

	</tr>
	<tr>
		<td colspan="2" style="text-align: center;">
			
			<input type="submit" name="txtSubmit" value="Cập nhập">
		</td>
		
	</tr>
	</table>
</form>

</body>
</html>