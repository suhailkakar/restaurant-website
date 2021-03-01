<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);


if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_SERVER['PHP_SELF']);
}

if(isset($_POST['username'])) {
    if($userinfo[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
    }else {
        //Invalid Login
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<title>Restaurant Website</title>
	<link rel="stylesheet" href="css/master.css" />
	<link rel="icon" href="Images/logo.jpg" type="image/png" sizes="16x16">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
	<section class="landing">


		<!--  Header Start Using navigation -->
		<header class="header">
			<a href="" class="logo"></a>
			<input class="menu-btn" type="checkbox" id="menu-btn" />
			<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
			<ul class="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="menu.php">Menu</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="https://www.google.com/maps/place/Austria/@47.6746075,11.102598,7z/data=!3m1!4b1!4m5!3m4!1s0x476d079b259d2a7f:0x1012d47bdde4c1af!8m2!3d47.516231!4d14.550072">Location</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li> <a href="shop.php"><i data-eva="shopping-cart-outline"></i></a> </li>
				<li> <a href="#"><i data-eva="search-outline"></i></a> </li>
				<?php if($_SESSION['username']): ?>
							<li><a href="blog.php">Hi <?=$_SESSION['username']?> </a></li>
              <li><a href="?logout=1">Logout</a></li>

        <?php endif; ?>

			</ul>
		</header>
		<!--  Header End  Using navigation -->

		<div class="landing__flex">
			<div class="">
				<h1 class="landing__maintext">
                        Welcome <br />
                        To Our Cuisine <br />
                        Restaurant
                    </h1>
				<div class="mainsearch">
					<div class="search">
						<li class="search-icon-input"> <a href="#"><i data-eva="search-outline"></i></a> </li>
						<input type="text" name="search" value="Search Here" /> </div>
					<input class="search__button" type="submit" name="" value="Search" /> </div>
				<div class="social">
					<div class="facebook">
						<li> <a href="#"><i data-eva="facebook"></i></a> </li>
						<p>225 K</p>
					</div>
					<div class="facebook">
						<li> <a href="#"><i data-eva="twitter"></i></a> </li>
						<p>972 K</p>
					</div>
					<div class="facebook">
						<li> <a href="#"><i data-eva="video"></i></a> </li>
						<p>178 K</p>
					</div>
				</div>
			</div>
			<div class="image"> <img src="Images/bg.png" alt="" /> </div>
		</div>
	</section>
	<section   class="about">
		<div class="firstimage"> <img src="Images/section1.png" class="section1" alt=""> </div>
		<div class="secondtext">
			<p class="about_orange">About Us</p>
			<h1 class="about_head">Discover Our <br> Restaurant Story</h1> <img src="Images/section3.png" class="section2" alt="">
			<p class="about__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		</div>
	</section>
	<section style="margin-top: 42%; background-color: #F2F6F7" ;>
		<br>
		<br>
		<p class="menu_orangetext">Order Online Now</p>
		<h1 class="menu_mainheading">Our Speciality Cuisine</h1>
		<div class="filters"><a class="filter_link" href="#" data-filter="all">All</a><a class="filter_link" href="#" data-filter="breakfast">BreakFast</a><a class="filter_link" href="#" data-filter="fruits">Dinner</a><a class="filter_link" href="#" data-filter="fruits">Launch</a><a class="filter_link" href="#" data-filter="fruits">Dessert</a><a class="filter_link" href="#" data-filter="fruits">Shake</a></div>
		<ul class="cd-items cd-container">
			<!---------------->
			<li class="cd-item breakfast" style="display: list-item;"><img src="Images/menu/2.png" alt="">
				<div class="cd-trigger">100 €</div>
				<div class="cd-triggers"></div>
				<div class="quick-view-content">
					<div class="quick-view-content-wrapper">
						<div class="cd-slider-wrapper">
							<ul class="cd-slider">
								<li class="selected"><img src="Images/menu/2.png" alt=""></li>
								<li><img src="Images/menu/2.png" alt=""></li>
							</ul>
							<ul class="cd-slider-navigation">
								<li><a class="cd-next">Prev</a></li>
								<li><a class="cd-prev">Next</a></li>
							</ul>
						</div>
						<div class="cd-item-info">
							<h2>Lorem ipsum dolor sit amet</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris malesuada, sem quis feugiat auctor, velit felis efficitur nibh, eu fringilla metus lorem at magna. Nullam aliquet lectus eu commodo sodales.</p>
							<ul class="cd-item-action">
								<li><a class="add-to-cart" href="#" target="_blank">Add to cart</a></li>
							</ul>
						</div>
					</div>
				</div>
			</li>
			<!--------------->
			<li class="cd-item fruits" style="display: list-item;"><img src="Images/menu/3.png" alt="site web societe amtcars creation et hebergement web maroc heberdomaine">
				<div class="cd-trigger">80 €</div>
				<div class="quick-view-content">
					<div class="quick-view-content-wrapper">
						<div class="cd-slider-wrapper">
							<ul class="cd-slider">
								<li class="selected"><img src="Images/menu/3.png" alt="site web societe amtcars creation et hebergement web maroc heberdomaine"></li>
								<li><img src="Images/menu/3.png" alt="site web societe amtcars creation et hebergement web maroc heberdomaine"></li>
							</ul>
							<ul class="cd-slider-navigation">
								<li><a class="cd-next">Prev</a></li>
								<li><a class="cd-prev">Next</a></li>
							</ul>
						</div>
						<div class="cd-item-info">
							<h2>Lorem ipsum dolor sit amet</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris malesuada, sem quis feugiat auctor, velit felis efficitur nibh, eu fringilla metus lorem at magna. Nullam aliquet lectus eu commodo sodales.</p>
							<ul class="cd-item-action">
								<li><a class="add-to-cart" href="#" target="_blank">Add to cart</a></li>
							</ul>
						</div>
					</div>
				</div>
			</li>
			<!----------------->
			<li class="cd-item fruits" style="display: list-item;"><img src="Images/menu/4.png" alt="site web societe allinone.travel maroc creation et hebergement web maroc heberdomaine">
				<div class="cd-trigger">89 €</div>
				<div class="quick-view-content">
					<div class="quick-view-content-wrapper">
						<div class="cd-slider-wrapper">
							<ul class="cd-slider">
								<li class="selected"><img src="Images/menu/4.png"></li>
								<li><img src="Images/menu/4.png" alt="site web societe allinone.travel maroc creation et hebergement web maroc heberdomaine"></li>
							</ul>
							<ul class="cd-slider-navigation">
								<li><a class="cd-next">Prev</a></li>
								<li><a class="cd-prev">Next</a></li>
							</ul>
						</div>
						<div class="cd-item-info">
							<h2>Lorem ipsum dolor sit amet</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris malesuada, sem quis feugiat auctor, velit felis efficitur nibh, eu fringilla metus lorem at magna. Nullam aliquet lectus eu commodo sodales.</p>
							<ul class="cd-item-action">
								<li><a class="add-to-cart" href="#" target="_blank">Add to cart</a></li>
							</ul>
						</div>
					</div>
				</div>
			</li>
			<!------------------>
			<li class="cd-item breakfast" style="display: list-item;"><img src="Images/menu/1.png" alt="site web societe atelier de manue maroc creation et hebergement web maroc heberdomaine">
				<div class="cd-trigger">28 €</div>
				<div class="quick-view-content">
					<div class="quick-view-content-wrapper">
						<div class="cd-slider-wrapper">
							<ul class="cd-slider">
								<li class="selected"><img src="Images/menu/1.png" alt="site web societe atelier de manue maroc creation et hebergement web maroc heberdomaine"></li>
								<li><img src="Images/menu/1.png" alt="site web societe atelier de manue maroc creation et hebergement web maroc heberdomaine"></li>
							</ul>
							<ul class="cd-slider-navigation">
								<li><a class="cd-next">Prev</a></li>
								<li><a class="cd-prev">Next</a></li>
							</ul>
						</div>
						<div class="cd-item-info">
							<h2>Lorem ipsum dolor sit amet</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris malesuada, sem quis feugiat auctor, velit felis efficitur nibh, eu fringilla metus lorem at magna. Nullam aliquet lectus eu commodo sodales.</p>
							<ul class="cd-item-action">
								<li><a class="add-to-cart" href="#" target="_blank">Add to cart</a></li>
							</ul>
						</div>
					</div>
				</div>
			</li>
			<!------------------>
			<li class="cd-item fruits" style="display: list-item;"><img src="Images/menu/5.png" alt="site web societe groupe obc maroc creation et hebergement web maroc">
				<div class="cd-trigger">48 €</div>
				<div class="quick-view-content">
					<div class="quick-view-content-wrapper">
						<div class="cd-slider-wrapper">
							<ul class="cd-slider">
								<li class="selected"><img src="Images/menu/5.png" alt="site web societe goupe obc maroc creation et hebergement web maroc heberdomaine"></li>
								<li><img src="Images/menu/5.png" alt="site web societe groupe obc maroc creation et hebergement web maroc heberdomaine"></li>
							</ul>
							<ul class="cd-slider-navigation">
								<li><a class="cd-next">Prev</a></li>
								<li><a class="cd-prev">Next</a></li>
							</ul>
						</div>
						<div class="cd-item-info">
							<h2>Lorem ipsum dolor sit amet</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris malesuada, sem quis feugiat auctor, velit felis efficitur nibh, eu fringilla metus lorem at magna. Nullam aliquet lectus eu commodo sodales.</p>
							<ul class="cd-item-action">
								<li><a class="add-to-cart" href="#" target="_blank">Add to cart</a></li>
							</ul>
						</div>
					</div>
				</div>
			</li>
			<!----------------->
			<li class="cd-item breakfast" style="display: list-item;"><img src="Images/menu/6.png" alt="site web magasin e-commerce creation et hebergement web maroc heberdomain">
				<div class="cd-trigger">87 €</div>
				<div class="quick-view-content">
					<div class="quick-view-content-wrapper">
						<div class="cd-slider-wrapper">
							<ul class="cd-slider">
								<li class="selected"><img src="Images/menu/6.png" alt="site web  magasin e-commerce maroc creation et hebergement web maroc heberdomain"></li>
								<li><img src="Images/menu/6.png" alt="site web magasin e-commerce maroc creation et hebergement web maroc heberdomain"></li>
							</ul>
							<ul class="cd-slider-navigation">
								<li><a class="cd-next">Prev</a></li>
								<li><a class="cd-prev">Next</a></li>
							</ul>
						</div>
						<div class="cd-item-info">
							<h2>Lorem ipsum dolor sit amet</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris malesuada, sem quis feugiat auctor, velit felis efficitur nibh, eu fringilla metus lorem at magna. Nullam aliquet lectus eu commodo sodales.</p>
							<ul class="cd-item-action">
								<li><a class="add-to-cart" href="#" target="_blank">Add to cart</a></li>
							</ul>
						</div>
					</div>
				</div>
			</li>
			<!------------------>
			<li class="cd-item fruits" style="display: list-item;"><img src="Images/menu/9.png" alt="site web location de voitures simauto france creation et hebergement web maroc heberdomain">
				<div class="cd-trigger">588 €</div>
				<div class="quick-view-content">
					<div class="quick-view-content-wrapper">
						<div class="cd-slider-wrapper">
							<ul class="cd-slider">
								<li class="selected"><img src="Images/menu/9.png" alt="site web ocation de voitures simauto france creation et hebergement web maroc heberdomain"></li>
								<li><img src="Images/menu/9.png" alt="site web location de voitures simauto france creation et hebergement web maroc heberdomain"></li>
							</ul>
							<ul class="cd-slider-navigation">
								<li><a class="cd-next">Prev</a></li>
								<li><a class="cd-prev">Next</a></li>
							</ul>
						</div>
						<div class="cd-item-info">
							<h2>Lorem ipsum dolor sit amet</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris malesuada, sem quis feugiat auctor, velit felis efficitur nibh, eu fringilla metus lorem at magna. Nullam aliquet lectus eu commodo sodales.</p>
							<ul class="cd-item-action">
								<li><a class="add-to-cart" href="#" target="_blank">Add to cart</a></li>
							</ul>
						</div>
					</div>
				</div>
			</li>
			<!------------------->
			<li class="cd-item breakfast" style="display: list-item;"><img src="Images/menu/8.png" alt="site web organisation club amicale des cadres hoteliers agadir creation et hebergement web maroc heberdomaine">
				<div class="cd-trigger">983 €</div>
				<div class="quick-view-content">
					<div class="quick-view-content-wrapper">
						<div class="cd-slider-wrapper">
							<ul class="cd-slider">
								<li class="selected"><img src="Images/menu/8.png" alt="site web organisation club amicale des cadres hoteliers agadir creation et hebergement web maroc heberdomaine"></li>
								<li><img src="Images/menu/8.png" alt="site web organisation club amicale des cadres hoteliers agadir creation et hebergement web maroc heberdomaine"></li>
							</ul>
							<ul class="cd-slider-navigation">
								<li><a class="cd-next">Prev</a></li>
								<li><a class="cd-prev">Next</a></li>
							</ul>
						</div>
						<div class="cd-item-info">
							<h2>Lorem ipsum dolor sit amet</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris malesuada, sem quis feugiat auctor, velit felis efficitur nibh, eu fringilla metus lorem at magna. Nullam aliquet lectus eu commodo sodales.</p>
							<ul class="cd-item-action">
								<li><a class="add-to-cart" href="#" target="_blank">Add to cart</a></li>
							</ul>
						</div>
					</div>
				</div>
			</li>
			<!---------------->
		</ul>
	</section>
  <section id="testim" class="testim">

        <p class="menu_orangetext">Testimonials</p>
        <h1 class="menu_mainheading">Customers Say</h1>
              <div class="wrap">

                  <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                  <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                  <ul id="testim-dots" class="dots">
                      <li class="dot active"></li><!--
                      --><li class="dot"></li><!--
                      --><li class="dot"></li><!--
                      --><li class="dot"></li><!--
                      --><li class="dot"></li>
                  </ul>
                  <div id="testim-content" class="cont">

                      <div class="active">
                          <div class="img"><img src="Images/mobin.jpg" alt=""></div>
                          <h2>Mr Mobin</h2>
                          <h4>⭐⭐⭐⭐⭐</h4>
                        <p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</i></p>
                      </div>

                      <div>
												<div class="img"><img src="Images/mobin.jpg" alt=""></div>
												<h2>Mr Mobin</h2>
                          <h4>⭐⭐⭐⭐⭐</h4>
                          <p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</i></p>
                      </div>

                      <div>
												<div class="img"><img src="Images/mobin.jpg" alt=""></div>
												<h2>Mr Mobin</h2>
                          <h4>⭐⭐⭐⭐⭐</h4>

                          <p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</i></p>
                      </div>

                      <div>
												<div class="img"><img src="Images/mobin.jpg" alt=""></div>
												<h2>Mr Mobin</h2>
                          <h4>⭐⭐⭐⭐⭐</h4>

                          <p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</i></p>
                      </div>

                      <div>
												<div class="img"><img src="Images/mobin.jpg" alt=""></div>
												<h2>Mr Mobin</h2>
                          <h4>⭐⭐⭐⭐⭐</h4>

                          <p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</i></p>
                      </div>

                  </div>

              </div>
  <!--         </div> -->
      </section>
      <div class="contact">

  <section style="margin-top : -20%">
    <p class="menu_orangetext">Book Table</p>
    <h1 class="menu_mainheading">Opening Hours</h1>
    <div class="phone">
<i style="font-size: 3em; padding-left: 1.5%;padding-top: 1%;padding-bottom: 1%;padding-right: 1.5%;
color: #F7882B;border-radius: 100%;
border: 1px solid #F7882B; margin-left: 48%; " class="fa fa-phone"></i>

<p class="contact_call">Call Now</p>



<h1 class="contact_number">+43 123 456 7890</h1>
<div style="display: flex; justify-content: space-between; margin: 0 20% 0 20%">

<div class="">

<p class="contact_call">Monday to Thursday</p>
<h1 class="contact_number">09:00 am - 22:00 pm</h1>

</div>
<div class="">

<p class="contact_call">Firday to Sunday</p>
<h1 class="contact_number">11:00 am - 20:00 pm</h1>
</div>

</div>


  <br>
  <br>
  <br>
  <div class="video_wrapper video_wrapper_full js-videoWrapper">

  <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="https://www.youtube.com/embed/o9o81fJn3FQ?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>
  <button class="videoPoster js-videoPoster"></button>
  </div>
</div>
  </section>
</div>





</body>
<script src="https://unpkg.com/eva-icons"></script>
<script src="https://use.fontawesome.com/1744f3f671.js"></script>
<script src="https://code.jquery.com/jquery-1.8.3.js"></script>
<script src="javascript/master.js"></script>
<script>
eva.replace();
</script>

</html>
