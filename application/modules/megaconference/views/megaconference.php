<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Gils 2019</title>

	<link href="<?php echo base_url() ?>asset/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!--<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<script src="js/bootstrap.min.js"></script>-->
	<link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo base_url() ?>asset/js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="<?php echo base_url() ?>asset/css/style.css" rel='stylesheet' type='text/css' />
	

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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!----//webfonts---->
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/form/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/form/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/form/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/form/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/form/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/form/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/form/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/form/vendor/noui/nouislider.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/form/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/form/css/main.css">
	<!--===============================================================================================-->

	<link href="<?php echo base_url() ?>asset/css/custom.css" rel='stylesheet' type='text/css' />
	<!----//requred-js-files---->
	<script src="<?php echo base_url() ?>asset/js/easing.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.smint.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.subMenu').smint({
				'scrollSpeed': 1000
			});
		});

		$(document).ready(function() {
			var max_fields = 5; //maximum input boxes allowed
			var wrapper = $(".wrapper-name"); //Fields wrapper
			var wrapper_email = $(".wrapper-email");
			var wrapper_phone = $(".wrapper-phone");
			var add_button = $(".add_field_button"); //Add button ID
			

			var x = 1; //initlal text box count
			$(add_button).click(function(e) { //on add input button click
				e.preventDefault();
				if (x < max_fields) { //max input box allowed
					x++; //text box increment
					$(wrapper).append('<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name"><span class="label-input100">NAME ' + x + ' *</span><input class="input100" type="text" name="name[]" placeholder="Enter Your Name"><a id="' + x + '" href="#" class="remove_field"><i class="fa fa-close"></i> Remove</a>'); //add input box
					$(wrapper_email).append('<div class="wrap-input100 validate-input bg1" data-validate="Enter Your Email (e@a.x)"><span class="label-input100">Email ' + x + ' *</span><input class="input100 email' + x + '" type="email" name="email[]" placeholder="Enter Your Email "></div>'); //add input box
					$(wrapper_phone).append('<div class="wrap-input100 validate-input bg1" data-validate="Enter Your Phone Number"><span class="label-input100">Phone Number ' + x + ' *</span><input class="input100 phone' + x + '" type="text" name="phone[]" placeholder="Enter Your Phone Number "></div>'); //add input box
				} else {
					alert("You have added more than 5 friends !")
				}
			});

			$(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
				e.preventDefault();
				var current = $(this).attr('id');
				// alert(current);
				$(this).parent('div').remove();
				$(".email" + current).parent('div').remove();
				$(".phone" + current).parent('div').remove();
				x--;
			})
		});

		
	</script>
	
</head>

<body>
	<nav class="subMenu navbar-custom navbar-scroll-top smint" role="navigation" style="position: fixed;">
		<div class="container">
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="navbar-main-collapse">
					<img style="width:30px;" src="<?php echo base_url() ?>asset/images/nav-icon.png" title="drop-down-menu">
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="navbar-collapse navbar-left navbar-main-collapse collapse" style="height: 1px;">
				<ul class="nav navbar-nav">
					<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
					<li class="active">
						<a class="subNavBtn forform" href="<?php echo base_url() ?>">Beranda</a>
					</li>

				</ul>
			</div>
			<!-- /.navbar-collapse -->
			<a id="s4" class="right-msg msg-icon" href="#"><span> </span></a>
			<div class="clearfix"> </div>
		</div>
		<!-- /.container -->
	</nav>

	<div class="services s2" id="services">

		<div class="container-contact100">
			<div class="wrap-contact100">
				<form class="contact100-form validate-form" name="form_pendaftaran" action="<?php echo base_url().'index.php/megaconference/save';?>" method="post" enctype="multipart/form-data">
					<span class="contact100-form-title">
						Registerasi Megaconference
					</span>

					<ul style ="margin:0 0 30px; 0">
						<li><span> Diskon 20% Untuk 50 Pendaftar Pertama</span></li>
						<li><span> Diskon 2k/Tiket Untuk 5 Pembelian</span>	</li>
						<li><span> Total Pendaftar Saat ini : <?php echo $user ?> </span></li>
					</ul>

					
					<div class="wrapper-name input100">
					<span> * Tekan Tambah untuk menambah Slot</span>
						<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
							<span class="label-input100">FULL NAME *</span>
							<input class="input100" type="text" name="name[]" placeholder="Enter Your Name">
							<button class="add_field_button"><i class="fa fa-plus"></i> Add More Friends</button>
						</div>
					</div>

					
					

					<div class="wrapper-email input100">
					<span> *Mohon mengisi email yang valid</span>
						<div class="wrap-input100 validate-input bg1" data-validate="Enter Your Email (e@a.x)">
							<span class="label-input100">Email *</span>
							<input class="input100" type="email" name="email[]" placeholder="Enter Your Email ">
						</div>
					</div>

					
					

					<div class="wrapper-phone input100">
					<span> *Mohon mengisi Nomor Hp yang dapat dihubungi</span>
						<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Phone Number">
							<span class="label-input100">Phone Number *</span>
							<input class="input100" type="text" name="phone[]" placeholder="Enter Number Phone">
						</div>
					</div>

					

					<div class="wrap-input100 input100-select bg1">
						<span class="label-input100">Profession *</span>
						<div>
							<select name="profesi" class="js-select2" name="service">
								<option>Pelajar</option>
								<option>Mahasiswa</option>
								<option>Umum</option>
							</select>
							<div class="dropDownSelect2"></div>
						</div>
					</div>

					<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Institution">
						<span class="label-input100">Institution *</span>
						<input class="input100" type="text" name="institusi" placeholder="Enter Your Institution">
					</div>

					<div class="container-contact100-form-btn">
						<button type="submit" class="contact100-form-btn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</form>
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


	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>asset/form/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>asset/form/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>asset/form/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url() ?>asset/form/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>asset/form/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function() {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function() {
				$(this).on('select2:close', function(e) {
					if ($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					} else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>asset/form/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url() ?>asset/form/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>asset/form/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>asset/form/vendor/noui/nouislider.min.js"></script>
	<script>
		var filterBar = document.getElementById('filter-bar');

		noUiSlider.create(filterBar, {
			start: [1500, 3900],
			connect: true,
			range: {
				'min': 1500,
				'max': 7500
			}
		});

		var skipValues = [
			document.getElementById('value-lower'),
			document.getElementById('value-upper')
		];

		filterBar.noUiSlider.on('update', function(values, handle) {
			skipValues[handle].innerHTML = Math.round(values[handle]);
			$('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
			$('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
		});
	</script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>asset/form/js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
	

</body>

</html>