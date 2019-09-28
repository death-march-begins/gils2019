<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<link rel = "icon" type = "image/png" href="<?php echo base_url() ?>asset/images/gils.ico">
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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!----webfonts---->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!----//webfonts---->
<!----//requred-js-files---->
<script src="<?php echo base_url() ?>asset/js/easing.js"></script>
	<script type="text/javascript" 	src="<?php echo base_url() ?>asset/js/jquery.smint.js"></script>
		<script type="text/javascript">
			$(document).ready( function() {
			    $('.subMenu').smint({
			    	'scrollSpeed' : 1000
			    });
			});
		</script>	
</head>
<body> 
	<nav class="subMenu navbar-custom navbar-scroll-top smint" role="navigation" style="position: fixed;">
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
						<li class="active">
	                        <a class="subNavBtn" href="<?php echo base_url() ?>">Beranda</a>
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
   	  <div class="container">
             <div class="container">
             <div class="row text-center">
                <img class="image-contest" src="<?php echo base_url() ?>asset/images/<?php echo $chamber['id'];?>_E_SDG.png" >
            </div>
   			    <h3 class="m_4 contest-ex">Indikator</h3>
   			    <p class="m_5"><?php echo $chamber['indikator']?></p>
                <h3 class="m_4 contest-ex">Pendaftaran</h3>
                <p class="m_5">Daftar <a target="_blank" href="http://Bit.ly/<?php echo $chamber['pendaftaran'];?>">di sini</a></p>
   			
   		    </div>
   	   <div class="row text-center">
   	       	 
	</div>
   	  </div>
   	</div>
		
   	<div class="footer">
   		<div class="container">
   			<div class="copy">
		       <p>&copy; 2019 -<a href="http://inovatornusantara.org" target="_blank"> Inovator Nusantara</a></p>
		    </div>
			<div class="clearfix"></div>
   		</div>
   	</div>
       <script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
       
       <script> 
            var deadline = new Date("jun 29, 2019 15:37:25").getTime(); 
                
            var x = setInterval(function() { 

            var now = new Date().getTime(); 
            var t = deadline - now; 
            var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
            var hours = Math.floor((t % (1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
            var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
            var seconds = Math.floor((t % (1000 * 60)) / 1000); 
            document.getElementById("day").innerHTML =days ; 
            document.getElementById("hour").innerHTML =hours; 
            document.getElementById("minute").innerHTML =minutes;  
            document.getElementById("second").innerHTML =seconds;  
			document.getElementById("desc").innerHTML = "Waktu Pendaftaran Sebelum di Tutup"; 
            document.getElementById("sub-desc").innerHTML = "Daftarkan Dirimu Segera"; 
            if (t <= 0) { 
                    clearInterval(x); 
                    document.getElementById("desc").innerHTML = "Pendaftaran Telah di Tutup"; 
                    document.getElementById("sub-desc").innerHTML = "Selesai"; 
                    document.getElementById("day").innerHTML ='0'; 
                    document.getElementById("hour").innerHTML ='0'; 
                    document.getElementById("minute").innerHTML ='0' ;  
                    document.getElementById("second").innerHTML = '0'; } 
            }, 1000); 
        </script> 

</body>
</html>

