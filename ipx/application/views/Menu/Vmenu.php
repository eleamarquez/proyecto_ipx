<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>::: IPX :::</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<link href="<?php echo base_url(); ?>Dashboard/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!-- Custom Theme files -->
	<link href="<?php echo base_url(); ?>Dashboard/css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<!--js-->
	<script src="<?php echo base_url(); ?>Dashboard/js/jquery-2.1.1.min.js"></script> 
	<!--icons-css-->
	<link href="<?php echo base_url(); ?>Dashboard/css/font-awesome.css" rel="stylesheet"> 
	<!--Google Fonts-->
	<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
	<!--//skycons-icons-->
</head>
<body>	
	<div class="page-container">	
		<div class="left-content">
			<div class="mother-grid-inner">
				<!--header start here-->
				<div class="header-main">
					<div class="header-left">
						<div class="logo-name">
							<a href="<?php echo base_url(); ?>Dashboard/"> <h1>::: IPX :::</h1> 
								<!--<img id="logo" src="" alt="Logo"/>--> 
							</a> 								
						</div>
						<!--search-box-->
						<div class="search-box">
							<form>
								<input type="text" placeholder="Search..." required="">	
								<input type="submit" value="">					
							</form>
						</div><!--//end-search-box-->
						<div class="clearfix"> </div>
					</div>
					<div class="header-right">
						<div class="profile_details_left"><!--notifications of menu start -->

							<div class="clearfix"> </div>
						</div>
						<!--notification menu end -->
						<div class="profile_details">		
							<ul>
								<li class="dropdown profile_details_drop">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<div class="profile_img">	
											<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
											<div class="user-name">
												<p>Orfrey</p>
												<span>Administrator</span>
											</div>
											<i class="fa fa-angle-down lnr"></i>
											<i class="fa fa-angle-up lnr"></i>
											<div class="clearfix"></div>	
										</div>	
									</a>
									<ul class="dropdown-menu drp-mnu">
										<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
										<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
										<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>				
					</div>
					<div class="clearfix"> </div>	
				</div>
				<!--heder end here-->
				<!-- script-for sticky-nav -->
				<script>
					$(document).ready(function() {
						var navoffeset=$(".header-main").offset().top;
						$(window).scroll(function(){
							var scrollpos=$(window).scrollTop(); 
							if(scrollpos >=navoffeset){
								$(".header-main").addClass("fixed");
							}else{
								$(".header-main").removeClass("fixed");
							}
						});

					});
				</script>
				<!-- /script-for sticky-nav -->
				<!--inner block start here-->

				<?php $this->load->view($page);?>

				<!--inner block end here-->
				<!--copy rights start here-->
				<div class="copyrights">
					<p>© 2020 ::: IPX::: . All Rights Reserved </a> </p>
				</div>	
				<!--COPY rights end here-->
			</div>
		</div>
		<!--slider menu-->
		<div class="sidebar-menu">
			<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
				<!--<img id="logo" src="" alt="Logo"/>--> 
			</a> </div>		  
			<div class="menu">
				<ul id="menu" >
					<li id="menu-home" ><a href="<?php echo base_url(); ?>C_Menu/"><i class="fa fa-tachometer"></i><span>Escritorio</span></a></li>
					<li><a href=""><i class="fa fa-cogs"></i><span>Usuarios</span><span class="fa fa-angle-right" style="float: right"></span></a>
						<ul>
							<li><a href="<?php echo base_url(); ?>C_Menu/Usuarios">Administración</a></li>
						</ul>
					</li>

					<li id="menu-comunicacao" ><a href="<?php echo base_url(); ?>C_Menu/#"><i class="fa fa-book nav_icon"></i><span>Cotizaciones</span><span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-comunicacao-sub" >
							<li id="menu-mensagens" style="width: 120px" ><a href="<?php echo base_url(); ?>C_Menu/">Administración</a></li>
						</ul>
					</li>

					<li id="menu-comunicacao" ><a href="<?php echo base_url(); ?>C_Menu/#"><i class="fa fa-book nav_icon"></i><span>Informes</span><span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-comunicacao-sub" >
							<li id="menu-mensagens" style="width: 120px" ><a href="<?php echo base_url(); ?>C_Menu/">Administración</a></li>
						</ul>
					</li>



				</ul>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--slide bar menu end here-->
	<script>
		var toggle = true;

		$(".sidebar-icon").click(function() {                
			if (toggle)
			{
				$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
				$("#menu span").css({"position":"absolute"});
			}
			else
			{
				$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
				setTimeout(function() {
					$("#menu span").css({"position":"relative"});
				}, 400);
			}               
			toggle = !toggle;
		});
	</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="js/bootstrap.js"> </script>
	<!-- mother grid end here-->
</body>
</html>




