<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>asset/images/gils.ico">
	<title>Gils 2019</title>
	<link href="<?php echo base_url() ?>asset/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!--<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<script src="js/bootstrap.min.js"></script>-->

	<link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo base_url() ?>asset/js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="<?php echo base_url() ?>asset/css/style.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url() ?>asset/css/custom.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!----webfonts---->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url() ?>asset/font_awesome/css/all.css" rel="stylesheet">
	<!--load all styles -->
	<!----//webfonts---->
	<!----//requred-js-files---->
	<script src="<?php echo base_url() ?>asset/js/easing.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.smint.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.subMenu').smint({
				'scrollSpeed': 1000
			});
		});
	</script>

	<script>
		function hover(element, x) {
			element.setAttribute('src', '<?php echo base_url() ?>asset/images/' + x + '_E_SDG_INV.png');
		}

		function unhover(element, x) {
			element.setAttribute('src', '<?php echo base_url() ?>asset/images/' + x + '_E_SDG.png');
		}
	</script>
</head>

<body>
	<div class="header sTop">
		<div class="logo">
			<a href="index.html"><img class="image-logo" src="<?php echo base_url() ?>asset/images/logo_gils.png" alt="" /></a>
		</div>
		<div class="slider_container">
			<div class="wmuSlider example1">
				<div class="wmuSliderWrapper">
					<article style="position: absolute; width: 100%; opacity: 1;">
						<div class="banner-wrap">
							<div id="clockdiv">
								<div>
									<span class="days" id="day"></span>
									<div class="smalltext">Hari</div>
								</div>
								<div>
									<span class="hours" id="hour"></span>
									<div class="smalltext">Jam</div>
								</div>
								<div>
									<span class="minutes" id="minute"></span>
									<div class="smalltext">Menit</div>
								</div>
								<div>
									<span class="seconds" id="second"></span>
									<div class="smalltext">Detik</div>
								</div>
							</div>

						</div>

						<div class="sub-title">
							<p class="top_desc" id="desc"></p>
							<p class="bottom_desc" id="sub-desc"></p>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
	<nav class="subMenu navbar-custom navbar-scroll-top smint" role="navigation" style="position: absolute; top: 737px;">
		<div class="container">
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-main-collapse">
					<img style="width:30px;" src="<?php echo base_url() ?>asset/images/nav-icon.png" title="drop-down-menu">
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="navbar-collapse navbar-left navbar-main-collapse collapse" style="height: 1px;">
				<ul class="nav navbar-nav">
					<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
					<li class="page-scroll">
						<a id="sTop" class="subNavBtn" href="#">Beranda</a>
					</li>
					<li class="page-scroll">
						<a id="s1" class="subNavBtn" href="#">SDGs</a>
					</li>
					<li class="page-scroll">
						<a id="s2" class="subNavBtn" href="#">Pendaftaran</a>
					</li>
					<li class="page-scroll">
						<a id="s4" class="subNavBtn" href="#">Kontak</a>
					</li>
					<li class="page-scroll">
						<a class="subNavBtn" href="<?php echo base_url() ?>FAQ">FAQ</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
			<a id="s5" class="right-msg msg-icon" href="#"><span> </span></a>
			<div class="clearfix"> </div>
		</div>
		<!-- /.container -->
	</nav>

	<div class="description">
		<div class="container">
			<h3 class="m_4">Great Indonesian Leaders Summit (GILS)</h3>
			<p class="m_5">Merupakan salah satu program kerja unggulan organisasi Inovator Nusantara adalah sebuah acara konferensi pemuda tingkat nasional. Konferensi ini digelar sebagai upaya untuk meningkatkan kepedulian para pemuda terhadap permasalahan-permasalahan yang terjadi di Indonesia hingga mencari solusinya, terutama yang berkaitan dengan poin-poin Sustainable Development Goals (SDGs) 2030. </p>
		</div>
	</div>

	<div class="syarat">
		<div class="container">
			<h3 class="m_4" style="color: #ffffff;">Syarat Pendaftaran GILS 2019</h3>
			<div class="row">
				<div class="col-md-6">
					<ol type="1">
						<li class="m_5"> Warga Negara Indonesia usia 19-30 tahun</li>
						<li class="m_5"> Memiliki kepekaan sosial yang tinggi</li>
						<li class="m_5"> Tertarik dengan Isu SDG’s</li>
						<li class="m_5"> Melakukan pembayaran biaya registerasi sebesar Rp 40.000,- dengan transfer ke BNI No. Rek 0534113122 a.n. Mayang Arnindika Prameswari</li>
						<li class="m_5"> Mengupload twibbon yang bisa diperoleh<a target="_blank" href="http://Bit.ly/TWIBBONGILS2019"><b> disini</b></a> beserta caption</li>
						<li class="m_5"> Mengikuti seluruh media sosial Inovator Nusantara</li>
					</ol>
				</div>
				<div class="col-md-6">
					<p align="justify">Mari berkontribusi secara nyata bersama dengan GILS 2019, membangun negara yang berkembang untuk Indonesia. Ada pertanyaan lain? Jangan ragu menghubungi kami ! Narahubung :
					</p><br>
				
				<ol style="margin:0 0 0 -40px; font-size:14pt;">
					<li class="fa fa-address-book"> Anaqoh (085749819730)</li><br>
					<li class="fa fa-address-book"> Sania (081329924913)</li>
				</ol>
			</div>
			</div>
		</div>
	</div>

	<div class="fasilitas">
   	  <div class="container">
			 <h2 style="color:white" class="service_head">Fasilitas</h2>
   	  </div>
	<div style="padding:10px auto; background:#ac3219;">
		 <div style="" class="row text-center">
		 <div class="col-md-1"></div>
   	    <div style="padding:30px;" class="col-md-2 service_grid">
			<i  class="facility fas fa-lightbulb"> </i>
			<p class="m_1 facility-text">Workshop and Mentoring</p>
		</div>
		<div style="padding:30px;" class="col-md-2 service_grid">
			<i  class="facility fas fa-coins"> </i>
			<p class="m_1 facility-text">Pendanaan Project</p>
		</div>
		<div style="padding:30px;" class="col-md-2 service_grid">
			<i  class="facility fas fa-toolbox"> </i>
			<p class="m_1 facility-text">Full Fasilitas</p>
		</div>
		<div style="padding:30px;" class="col-md-2 service_grid">
			<i  class="facility fas fa-project-diagram"> </i>
			<p class="m_1 facility-text">Networking</p>
		</div>
		<div style="padding:30px;" class="col-md-2 service_grid">
			<i  class="facility fas fa-users"> </i>
			<p class="m_1 facility-text">Menjadi Bagian Inovator Nusantara</p>
		</div>
		
   	  </div>
		  </div>
	</div>
</div>

	<div class="timelines">
		<div align="center" class="container">
		    <img src="<?php echo base_url() ?>asset/images/timeline.png">
		</div>
	</div>

	<div class="sdgs s1">
		<div class="container">
			<h3 class="">Sustainable Development Goals (SDGs)</h3>
			<p class="">Pada tahun ini, GILS 2019 akan berfokus di 6 poin dari 17 poin SDGs yaitu Poin 3 <i style="color:greenyellow">Good Health and Well-Being</i>, Poin 4 <i style="color:orangered">Quality Education</i>, Poin 8 <i style="color:red">Decent Work and Economic Growth</i>, Poin 11 <i style="color:orange">Sustainable Cities and Communities</i>, Poin 13 <i style="color:limegreen">Climate Action</i>, Poin 16 <i style="color:lightblue">Peace, Justice and Strong Institution</i>.</p>
			<div align="center">
				<img class="sdgs-image" src="<?php echo base_url() ?>asset/images/E_2018_SDG.png">
			</div>
		</div>
	</div>


	<div class="services s2" id="services">
		<div class="container">
			<h2 class="contest-head">Pendaftaran Delegasi</h2>
			<div class="row text-center">
				<div class="col-md-4">
					<a href="<?php echo base_url() ?>/chamber/3"> <img onmouseover="hover(this,3);" onmouseout="unhover(this,3);" class="image-contest" src="<?php echo base_url() ?>asset/images/3_E_SDG.png"></a>

					<!-- <i class="icon1"> </i> -->
					<h3 class="m_1"><a href="<?php echo base_url() ?>/chamber/3">Good Health and Well-Being</a></h3>
					<p class="m_2">Menjamin Kehidupan yang Sehat dan Meningkatkan Kesejahteraan Seluruh Penduduk Semua Usia</p>
				</div>
				<div class="col-md-4 ">
					<a href="<?php echo base_url() ?>/chamber/4"> <img onmouseover="hover(this,4);" onmouseout="unhover(this,4);" class="image-contest" src="<?php echo base_url() ?>asset/images/4_E_SDG.png"></a>
					<!-- <i class="icon1"> </i> -->
					<h3 class="m_1"><a href="<?php echo base_url() ?>/chamber/4">Quality Education</a></h3>
					<p class="m_2">Menjamin Kualitas Pendidikan yang Inklusif dan Merata serta Meningkatkan Kesempatan Belajar Sepanjang Hayat untuk semua</p>
				</div>
				<div class="col-md-4 ">
					<a href="<?php echo base_url() ?>/chamber/8"> <img onmouseover="hover(this,8);" onmouseout="unhover(this,8);" class="image-contest" src="<?php echo base_url() ?>asset/images/8_E_SDG.png"></a>
					<!-- <i class="icon1"> </i> -->
					<h3 class="m_1"><a href="<?php echo base_url() ?>/chamber/8">Decent Work and Economic Growth</a></h3>
					<p class="m_2">Meningkatkan pertumbuhan ekonomi yang inklusif dan berkelanjutan, kesempatan kerja yang produktif dan menyeluruh, serta pekerjaan yang layak untuk semua</p>
				</div>
				<div class="col-md-4 ">
					<a href="<?php echo base_url() ?>/chamber/11"> <img onmouseover="hover(this,11);" onmouseout="unhover(this,11);" class="image-contest" src="<?php echo base_url() ?>asset/images/11_E_SDG.png"></a>
					<!-- <i class="icon1"> </i> -->
					<h3 class="m_1"><a href="<?php echo base_url() ?>/chamber/11">Sustainable Cities and Communities</a></h3>
					<p class="m_2">Membangun kota dan pemukiman inklusif, aman, tahan lama dan berkelanjutan</p>
				</div>
				<div class="col-md-4 ">
					<a href="<?php echo base_url() ?>/chamber/13"><img onmouseover="hover(this,13);" onmouseout="unhover(this,13);" class="image-contest" src="<?php echo base_url() ?>asset/images/13_E_SDG.png"></a>
					<!-- <i class="icon1"> </i> -->
					<h3 class="m_1"><a href="<?php echo base_url() ?>/chamber/13">Climate Action</a></h3>
					<p class="m_2">Mengambil tindakan cepat untuk mengatasi perubahan iklim dan dampaknya</p>
				</div>
				<div class="col-md-4 ">
					<a href="<?php echo base_url() ?>/chamber/16"><img onmouseover="hover(this,16);" onmouseout="unhover(this,16);" class="image-contest" src="<?php echo base_url() ?>asset/images/16_E_SDG.png"></a>
					<!-- <i class="icon1"> </i> -->
					<h3 class="m_1"><a href="<?php echo base_url() ?>/chamber/16">Peace, Justice, and Strong Institutions</a></h3>
					<p class="m_2">Menguatkan masyarakat yang inklusif dan damai untuk pembangunan berkelanjutan, menyediaakan akses keadilan untuk semua dan membangun kelembagaan yang efektif, akuntabel, dan inklusif d semua tingkatan</p>
				</div>
			</div>
		</div>
	</div>

<div class="sponsor">
   	  <div class="container">
			 <h2 style="color:white" class="service_head">Sponsor & Media Partner</h2>
   	  </div>
	<div style="background:#ffff;">
	<div style="background:#288fce">
	<h2 align="center" style="color:white; padding:20px;" >Sponsor</h2>
	</div>
	<div class="row">
        <div class="col-md-3">
		</div>
		<div class="col-md-2">
		</div>
   	    <div class="col-md-2">
		   <img class="sponsor-image" src="<?php echo base_url() ?>asset/images/sponsor/sp1.png">
		</div>
	</div>

	<div style="background:#f04e2c">
	<h2 align="center" style="color:white; padding:20px;" >Media Partner</h2>
	</div>
		 <div class="row">
   	    <div class="col-md-2">
		   <img class="sponsor-image" src="<?php echo base_url() ?>asset/images/media_partner/mp1.png">
		</div>
		<div class="col-md-2">
		   <img class="sponsor-image" src="<?php echo base_url() ?>asset/images/media_partner/mp2.png">
		</div>
		<div class="col-md-2">
		   <img class="sponsor-image" src="<?php echo base_url() ?>asset/images/media_partner/mp3.png">
		</div>
		<div class="col-md-2">
		   <img class="sponsor-image" src="<?php echo base_url() ?>asset/images/media_partner/mp4.png">
		</div>
		<div class="col-md-2">
		   <img class="sponsor-image" src="<?php echo base_url() ?>asset/images/media_partner/mp5.png">
		</div>
		<div class="col-md-2">
		   <img class="sponsor-image" src="<?php echo base_url() ?>asset/images/media_partner/mp6.png">
		</div>
		<div class="col-md-2">
		   <img class="sponsor-image" src="<?php echo base_url() ?>asset/images/media_partner/mp7.png">
		</div>
		<div class="col-md-2">
		   <img class="sponsor-image" src="<?php echo base_url() ?>asset/images/media_partner/mp8.png">
		</div>
		<div class="col-md-2">
		   <img class="sponsor-image" src="<?php echo base_url() ?>asset/images/media_partner/mp9.png">
		</div>
		<div class="col-md-2">
		   <img class="sponsor-image" src="<?php echo base_url() ?>asset/images/media_partner/mp10.png">
		</div>
		<div class="col-md-2">
		   <img class="sponsor-image" src="<?php echo base_url() ?>asset/images/media_partner/mp11.png">
		</div>
		<div class="col-md-2">
		   <img class="sponsor-image" src="<?php echo base_url() ?>asset/images/media_partner/mp12.png">
		</div>
		<div class="col-md-2">
		   <img class="sponsor-image" src="<?php echo base_url() ?>asset/images/media_partner/mp13.png">
		</div>
		<div class="col-md-2">
		   <img class="sponsor-image" src="<?php echo base_url() ?>asset/images/media_partner/mp14.png">
		</div>
		<div class="col-md-2">
		   <img class="sponsor-image" src="<?php echo base_url() ?>asset/images/media_partner/mp15.png">
		</div>
		<div class="col-md-2">
		   <img class="sponsor-image" src="<?php echo base_url() ?>asset/images/media_partner/mp16.png">
		</div>
		<div class="col-md-2">
		   <img class="sponsor-image" src="<?php echo base_url() ?>asset/images/media_partner/mp17.png">
		</div>
		<div class="col-md-2">
		   <img class="sponsor-image" src="<?php echo base_url() ?>asset/images/media_partner/mp18.png">
		</div>
		
   	  </div>
		  </div>
</div>
	<!-- <div class="photograph">
   	  <div class="container">
   		<div class="slider-left">
		  <h1>Galeri</h1>
		  <p class="top_desc">Berbagi Kenangan Bersama Gils 2019</p>
		  <p class="bottom_desc">- imperdiet doming</p>
		</div>
   	  </div>
   	</div>
   	<div class="portfolio s1" id="portfolio">
	  <div class="portfolio_box">
		<div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="<?php echo base_url() ?>asset/images/p1.jpg" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img style="width : 80px" src="<?php echo base_url() ?>asset/images/logo_gils.png" class="img-responsive" alt=""/>
					 <br>
					 <br>
					 <span>Gils 2019</span>
					 <br>
					 <button>View photo</button>
					</h2>
				</div>
			</a>
		</div>
		<div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="<?php echo base_url() ?>asset/images/p1.jpg" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img style="width : 80px" src="<?php echo base_url() ?>asset/images/logo_gils.png" class="img-responsive" alt=""/>
					 <br>
					 <br>
					 <span>Gils 2019</span>
					 <br>
					 <button>View photo</button>
					</h2>
				</div>
			</a>
		</div>
		<div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="<?php echo base_url() ?>asset/images/p1.jpg" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img style="width : 80px" src="<?php echo base_url() ?>asset/images/logo_gils.png" class="img-responsive" alt=""/>
					 <br>
					 <br>
					 <span>Gils 2019</span>
					 <br>
					 <button>View photo</button>
					</h2>
				</div>
			</a>
		</div>
		<div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="<?php echo base_url() ?>asset/images/p1.jpg" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img style="width : 80px" src="<?php echo base_url() ?>asset/images/logo_gils.png" class="img-responsive" alt=""/>
					 <br>
					 <br>
					 <span>Gils 2019</span>
					 <br>
					 <button>View photo</button>
					</h2>
				</div>
			</a>
		</div>
		<div class="clearfix"> </div>
	</div>
   </div>
   <div class="portfolio_bottom">
   	 <a class="btn3" href="#"><span>Lebih Banyak</span></a>
   </div> -->
	<!-- <div class="about" id="about">
   		<div class="container">
   			<h3 class="m_4">About Us</h3>
   			<p class="m_5">nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan</p>
   			<div class="row text-center">
   				<div class="col-md-3 about-grid text-center">
   				  <img src="<?php echo base_url() ?>asset/images/pic1.png" class="img-responsive" alt=""/>
   				  <h3><a href="#">John Doe<br>General Manager</a></h3>
   				  <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </p>
   				</div>
   				<div class="col-md-3 about-grid text-center">
   				  <img src="<?php echo base_url() ?>asset/images/pic3.png" class="img-responsive" alt=""/>
   				  <h3><a href="#">John Doe<br>General Manager</a></h3>
   				  <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </p>
   				</div>
   				<div class="col-md-3 about-grid text-center">
   				  <img src="<?php echo base_url() ?>asset/images/pic2.png" class="img-responsive" alt=""/>
   				  <h3><a href="#">John Doe<br>General Manager</a></h3>
   				  <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </p>
   				</div>
   				<div class="col-md-3 about-grid text-center">
   				  <img src="<?php echo base_url() ?>asset/images/pic4.png" class="img-responsive" alt=""/>
   				  <h3><a href="#">John Doe<br>General Manager</a></h3>
   				  <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </p>
   				</div>
   			</div>
   		</div>
   	</div> -->
	<div class="contact s4">
		<div class="container">
			<div class="row">
				<div class="col-md-8 contact_left">
					<h3>Kamu punya pertanyaan lain?</h3>
					<p class="m_6">Jangan ragu untuk bertanya kepada kami! Kami siap membantu segala keresahan anda dalam mengikuti Great Indonesian Leaders Summit! Silahkan klik tombol FAQ untuk melihat halaman FAQ (Frequently Asked Question) dan bertanya langsung dengan Narahubung kami. </p>

				</div>
				<div class="col-md-4">
					<div class="contact-person">
						<h3>Kontak kami</h3>
					</div>
					<div class="contact_right">
						<ul class="contact_info">
							<li class="icon fab fa-facebook-square"><a href="https://www.facebook.com/InovatorNusantara/" target="_blank"><i><span> Inovator Nusantara</span></i></a></li>
							<li class="icon fab fa-instagram"><a href="https://www.instagram.com/inovatornusantara/" target="_blank"><i><span> @Inovator Nusantara</span></i></a></li>
							<li class="icon fab fa-youtube-square"><a href="https://www.youtube.com/channel/UCTmhgxlFEWs_zwR7Mf3NK2w" target="_blank"><i><span> Inovator Nusantara</span></i></a></li><br>
							<li class="icon fab fa-line"><a><i><span> @wjr1052c</span></i></a></li>
							<li class="icon fa fa-envelope-square"><a href="https://mail.google.com" target="_blank"><i><span> contact@inovatornusantara.com</span></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="copy">
				<p>&copy; 2019 -<a href="#" target="_blank"> Inovator Nusantara</a></p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>

	<script>
		var deadline = new Date("aug 15, 2019 23:59:59").getTime();

		var x = setInterval(function() {

			var now = new Date().getTime();
			var t = deadline - now;
			var days = Math.floor(t / (1000 * 60 * 60 * 24));
			var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((t % (1000 * 60)) / 1000);
			document.getElementById("day").innerHTML = days;
			document.getElementById("hour").innerHTML = hours;
			document.getElementById("minute").innerHTML = minutes;
			document.getElementById("second").innerHTML = seconds;
			document.getElementById("desc").innerHTML = "Waktu Pendaftaran Sebelum di Tutup";
			document.getElementById("sub-desc").innerHTML = "Daftarkan Dirimu Segera";
			if (t <= 0) {
				clearInterval(x);
				document.getElementById("desc").innerHTML = "Pendaftaran Telah di Tutup";
				document.getElementById("sub-desc").innerHTML = "Selesai";
				document.getElementById("day").innerHTML = '0';
				document.getElementById("hour").innerHTML = '0';
				document.getElementById("minute").innerHTML = '0';
				document.getElementById("second").innerHTML = '0';
			}
		}, 1000);
	</script>



</body>

</html>