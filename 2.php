
<!DOCTYPE html>
<!--
	ubusina by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BLOG</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	
	<?php
		include("menubaitaplon.php");
		;?>

			<section class="slider" id="home">
				<div class="container-fluid">
					<div class="row">
					

					    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
							<div class="header-backup"></div>
					        <!-- Wrapper for slides -->
					        <div class="carousel-inner" role="listbox">
					            <div class="item active">
					            <?php
									$id = $_GET["id"];
						            include("./cauhinh/db_cauhinh.php");
						            $ketnoi = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
									mysqli_set_charset($ketnoi,'utf8');

						            // Lấy ra dữ liệu mong muốn
						            $sql = "SELECT * FROM anhqd where maalbum = '".$id."'";
						            $noidung = mysqli_query($ketnoi, $sql);
						            while ($row = mysqli_fetch_array($noidung)) {
						    
						            // Hiển thị chúng
						;?>
					            	<a href="2.php"><img src="<?php echo $row ['link'] ; ?>" alt=""></a>
					            </div>
					           
					        <!-- Controls -->
					        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
					            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					            <span class="sr-only">Previous</span>
					        </a>
					        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
					            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					            <span class="sr-only">Next</span>
					        </a>
					    </div>
						<?php 
						           }
						           mysqli_close($ketnoi);
						              ?>			
					</div>
				</div>
			</section><!-- end of slider section -->
</body>
</html>