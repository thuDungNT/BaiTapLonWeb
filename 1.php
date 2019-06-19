
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
					            	<img src="img/anh be 3.jpg" alt="">
					                <div class="carousel-caption">
				               			<h1>NGO NGHINH</h1>
				               			<p>Doi ngu nhan vien 30 nam kinh nghiem</p>
					                </div>
					            </div>
					            <div class="item">
					            	<img src="img/anh gia dinh 2.jpg" alt="">
					                <div class="carousel-caption">
				               			<h1>Ngot ngao</h1>
				               			<p>Dem lai nhung khoanh khac ngot ngao nhat</p>
					                </div>
					            </div>
					            <div class="item">
					            	<img src="img/anh me bau 3.jpg" alt="">
					                <div class="carousel-caption">
				               			<h1>Dam am</h1>
				               			<p>Tan tinh, chu dao phuc vu khach hang</p>
					                </div>
					            </div>
					            <div class="item">
					            	<img src="img/anh nghe thuat 4.jpg" alt="">
					                <div class="carousel-caption">
				               			<h1>An tuong</h1>
				               			<p>Dem lai nhung bo anh chat luong nhat</p>
					                </div>
					            </div>
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

					</div>
				</div>
			</section><!-- end of slider section -->


			<!-- about section -->

			<section class="about text-center" id="about">
				<div class="container">
					<div class="row">
						<h2>album</h2>
						<h4>Anh vien Quang Dinh voi hon 30 nam kinh nghiem da luon dong hanh va la nguoi luu giu nhung ki niem dep cua moi gia dinh</h4>

						<?php
						            include("./cauhinh/db_cauhinh.php");
						            $ketnoi = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
									mysqli_set_charset($ketnoi,'utf8');

						            // Lấy ra dữ liệu mong muốn
						            $sql = "SELECT * FROM album";
						            $noidung = mysqli_query($ketnoi, $sql);
						            while ($row = mysqli_fetch_array($noidung)) {
						    
						            // Hiển thị chúng
						;?>

						<div class="col-md-4 col-sm-6">
							<div class="single-about-detail clearfix">
								<div class="about-img">
									<a href="5.php?id=<?php echo $row ['maalbum'] ?>"><img src="<?php echo $row ['anh'] ; ?>" alt=""></a>
								</div>
								<div class="about-details">
									<div class="pentagon-text">
										<h1>T</h1>
									</div>

									<h3><a href="5.php?id=<?php echo $row ['maalbum'] ?>"><?php echo $row ['tenalbum'] ?></a></h3>
									<p><a href="5.php?id=<?php echo $row ['maalbum'] ?>"><?php echo $row ['noidung'] ?></a></p>
							<a href="5.php?id=<?php echo $row ['maalbum'] ?>"><button>XEM ALBUM</button></a>
								</div>
							</div>
						</div>
						<?php 
           }
           mysqli_close($ketnoi);
              ?>												

					</div>
				</div>
			</section><!-- end of about section -->


			<!-- service section starts here -->

			<section class="service text-center" id="service">
				<div class="container">
					<div class="row">
						<h2>PHONG CACH</h2>
						<h4>Anh vien Quang Dinh luon dem den cho khach hang nhung phong cach chup anh doc dao va moi la nhat dap ung moi yeu cau cua khach hang</h4>

						<div class="col-md-3 col-sm-6">
							<div class="single-service">
								<div class="single-service-img">
									<div class="service-img">
										<img class="img-responsive" src="img/anh be 121.jpg" alt="">
									</div>
								</div>
								<h3>Phong cach truyen thong</h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="single-service">
								<div class="single-service-img">
									<div class="service-img">
										<img class="img-responsive" src="img/anh me va be 111.jpg" alt="">
									</div>
								</div>
								<h3>Phong cach cau chuyen</h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="single-service">
								<div class="single-service-img">
									<div class="service-img">
										<img class="img-responsive" src="img/anh nghe thuat 1231.jpg" alt="">
									</div>
								</div>
								<h3>Phong cach sang tao</h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="single-service">
								<div class="single-service-img">
									<div class="service-img">
										<img class="img-responsive" src="img/anh me va be 111.jpg" alt="">
									</div>
								</div>
								<h3>Phong cach hien dai</h3>
							</div>
						</div>
					</div>
				</div>
			</section><!-- end of service section -->


			<!-- team section -->

			<section class="team" id="team">
				<div class="container">
					<div class="row">
						<div class="team-heading text-center">
							<h2>KINH NGHIEM</h2>

							<h4>Anh vien Quang Dinh voi hon 30 nam kinh nghiem chac chan se dem den cho khach hang su hai long va tin tuong nhat</h4>
						</div>

						<div class="col-md-2 single-member col-sm-4">
							<div class="person">
								<img class="img-responsive" src="img/anh 1a.jpg" alt="member-1">
							</div>

							<div class="person-detail">
								<div class="arrow-bottom"></div>
								<h3>NHAN VIEN</h3>
								<p>Nhân viên tận tình, chu đáo với khách hàng. Đội ngũ nhân viên nhiều năm kinh nghiệm luôn sẵn sàng phục vụ và chăm sóc khách hàng của Ảnh Viện.</p>
							</div>
						
						</div>

						<div class="col-md-2 single-member col-sm-4">

							<div class="person-detail">
								<div class="arrow-top"></div>
								<h3>TRANG THIET BI</h3>
								<p>Trang thiết bị hiện đại, liên tục đổi mới đem đến cho khách hàng những bộ ảnh chất lượng và đẹp nhất, đáp ứng yêu cầu của khách hàng đưa ra.</p>
							</div>
							<div class="person">
								<img class="img-responsive" src="img/anh 4a.jpg" alt="member-2">
							</div>
						</div>
						<div class="col-md-2 single-member col-sm-4">
							<div class="person">
								<img class="img-responsive" src="img/anh 5a.jpg" alt="member-3">
							</div>
							<div class="person-detail">
								<div class="arrow-bottom"></div>
								<h3>PHONG CHUP</h3>
								<p>Hệ thống ba phòng chụp rộng và thoải mái, liên tục cập nhật xu hướng với trang thiết bị hiện đại đảm bảo đem lại sự thoải mái cho khách hàng. </p>
							</div>
						</div>

						<div class="col-md-2 single-member col-sm-4">
							<div class="person-detail">
								<div class="arrow-top"></div>
								<h3>KHONG GIAN</h3>
								<p>Không gian phòng chụp thoải mái và gần gữi, bố trí phòng vui chơi cho trẻ em khi các bé chờ bố mẹ chuẩn bị trang điểm và chuẩn bị trang phục.</p>
							</div>
							<div class="person">
								<img class="img-responsive" src="img/anh 5a.jpg" alt="member-4">
							</div>
						</div>

						<div class="col-md-2 single-member col-sm-4">
							<div class="person">
								<img class="img-responsive" src="img/anh 7a.jpg" alt="member-5">
							</div>

							<div class="person-detail">
								<div class="arrow-bottom"></div>
								<h3>TRANG PHUC</h3>
								<p>Trang phục cưới luôn cập nhật những mẫu váy và trang phục đẹp nhất hiện nay, đường may và chất vải tinh tế đem lại cho khách hàng sự hài lòng. </p>
							</div>
						</div>

						<div class="col-md-2 single-member col-sm-4">

							<div class="person-detail">
								<div class="arrow-top"></div>
								<h3>CHAT LUONG ANH</h3>
								<p>Chất lượng ảnh sắc nét, đội ngũ kỹ thuật dày dặn kinh nghiệm đem lại những bộ ảnh sắc nét và hoàn hảo nhất cho khách hàng, luôn sẵn sàng phục vụ.</p>
							</div>
							<div class="person">
								<img class="img-responsive" src="img/anh.jpg" alt="member-5">
							</div>

						</div>
					</div>
				</div>
			</section><!-- end of team section -->

			<!-- map section -->
			<section class="api-map" id="contact">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 map" id="map"></div>
					</div>
				</div>
			</section><!-- end of map section -->

			<!-- contact section starts here -->
			<section class="contact">
				<div class="container">
					<div class="row">
							<div class="contact-caption clearfix">
								<div class="contact-heading text-center">
									<h2>THONG TIN</h2>
								</div>

								<div class="col-md-5 contact-info text-left">
									<h3>THONG TIN LIEN HE</h3>
									<div class="info-detail">
										<ul><li><i class="fa fa-calendar"></i><span> Giờ làm việc:</span> 8h – 21h hàng ngày</li></ul>
										<ul><li><i class="fa fa-map-marker"></i><span>Địa chỉ:</span>  65 Nguyễn Lương Bằng – Hà Nội</li></ul>
										<ul><li><i class="fa fa-phone"></i><span>Điện thoại tư vấn:</span> 0366040593</li></ul>
										<ul><li><i class="fa fa-envelope"></i><span>Email:</span> anhdepquangdinh@gmail.com</li></ul>
									</div>
								</div>


								<div class="col-md-6 col-md-offset-1 contact-form">
									<h3>LIEN HE VOI CHUNG TOI</h3>

									<form class="form">
										<input class="name" type="text" placeholder="Họ và tên">
										<input class="email" type="email" placeholder="Email">
										<input class="phone" type="text" placeholder="Số điện thoại:">
										<textarea class="message" name="message" id="Message" cols="30" rows="10" placeholder="Lời nhắn"></textarea>
										<input class="submit-btn" type="submit" value="XAC NHAN">
									</form>
								</div>

							</div>
					</div>
				</div>
			</section><!-- end of contact section -->


			<!-- footer starts here -->
			<footer class="footer clearfix">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 footer-para">
						</div>

						<div class="col-xs-6 text-right">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-skype"></i></a>
						</div>
					</div>
				</div>
			</footer>



	

	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>