<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

$asset=  AppAsset::register($this);
$baseUrl=$asset->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
<?php $this->beginBody() ?>
    	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-clip-rotate">
				<div></div>
			</div>
		</div>
	</div><!-- Loader /- -->
	
	
	<!-- Header Main -->
	<header class="header-main container-fluid no-padding">	
		<!-- Container -->
		<div class="container">
			<!-- Top Header  -->
			<div class="top-header container-fluid no-padding">
				<div class="row">
					<div class="col-md-5 col-sm-6 col-xs-5 our-contacts">
						<p><i class="fa fa-phone"></i><a href="tel:+1-92-456-7890" title="Phone" class="phone">Call at: <span>+1-92-456-7890</span></a></p>
						<p><i class="fa fa-envelope-o"></i><a href="mailto:info@pizzakitchen.com" title="info@pizzakitchen.com">Mail at: info@pizzakitchen.com</a></p>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 logo-block">
						<a title="Logo" href="index.html" class="navbar-brand"><img src="<?= $baseUrl;?>/images/logo.png" alt="logo" /></a>
					</div>
					<div class="col-md-5 col-sm-6 col-xs-7 header-social">
					<ul>
						<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" title="Google"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<ul class="cart">
						<li>
							<a aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" id="cart" class="btn dropdown-toggle" title="Order Online" href="#">Order Online</a>
						</li>
					</ul>
					</div>
				</div>
			</div><!-- Top Header /- -->
		
			<!-- Menu Block -->
			<div class="menu-block container-fluid no-padding">
				<!-- Navigation -->
				<nav class="navbar ow-navigation">
					<div class="navbar-header">
						<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a title="Logo1" href="index.html" class="navbar-brand logo-1">Pizza Kitchen</a>
					</div>
					<div class="navbar-collapse collapse" id="navbar">
						<ul class="nav navbar-nav">
							<li class="dropdown active">
								<a href="index.html" title="Pages" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">	
									<li><a href="index.html" title="Services">HomePage 1</a></li>
									<li><a href="index-2.html" title="Gallery">HomePage 2</a></li>
								</ul>
							</li>
							<li><a title="About Us" href="about.html">About Us</a></li>
							<li><a title="Our Services" href="services.html">Our Services</a></li>
							<li><a title="Our Portfolio" href="gallery-single.html">Our Portfolio</a></li>
							<li class="dropdown">
								<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Latest News" href="blog.html">Our Blog</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">	
									<li><a title="Blog" href="blog.html">Blog</a></li>
									<li><a title="Blog Post" href="blog-post.html">Blog Post</a></li>
								</ul>
							</li>
							<li><a title="Booking" href="booking.html">Booking</a></li>
							<li><a title="Contact Us" href="contact-us.html">Contact Us</a></li>
						</ul>						
					</div>
				</nav><!-- Navigation -->
			</div><!-- Menu Block /- -->
		</div><!-- Container /- -->
	</header><!-- Header Main /- -->
	
	<main class="site-main page-spacing">
		<!-- Photo Slider -->
		<div class="photo-slider container-fluid no-padding">
			<!-- Main Carousel -->
			<div id="main-carousel" class="carousel slide carousel-fade" data-ride="carousel">
				<div role="listbox" class="carousel-inner">
					<div class="item active">
						<img width="1920" height="960" alt="slider" src="<?= $baseUrl?>/images/slider-1.jpg">
						<div class="carousel-caption">
							<img src="<?= $baseUrl?>/images/slider-ic.png" alt="slider-ic" width="131" height="129">
							<h3>Pizza makes me think that anything is possible</h3>
							<img src="<?= $baseUrl?>/images/section-seprator-1.png" alt="section-seprator" width="76" height="10" />
							<p>The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper too will do their comfortable knew it hunch the first mate.</p>
						</div>
						<span class="goto-next"><a href="#order-section"><i class="fa fa-arrow-down bounce" aria-hidden="true"></i>scroll down</a></span>
					</div>
					<div class="item">
						<img width="1920" height="960" alt="slider" src="<?= $baseUrl?>/images/slider-1.jpg">
						<div class="carousel-caption">
							<img src="<?= $baseUrl?>/images/slider-ic.png" alt="slider-ic" width="131" height="129">
							<h3>Pizza makes me think that anything is possible</h3>
							<img src="<?= $baseUrl?>/images/section-seprator-1.png" alt="section-seprator" width="76" height="10" />
							<p>The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper too will do their comfortable knew it hunch the first mate.</p>
						</div>
						<span class="goto-next"><a href="#order-section"><i class="fa fa-arrow-down bounce" aria-hidden="true"></i>scroll down</a></span>
					</div>
					<a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
						<i class="fa fa-caret-left" aria-hidden="true"></i>
					</a>
					<a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
						<i class="fa fa-caret-right" aria-hidden="true"></i>
					</a>
				</div>
			</div><!-- Main Carousel /-  -->
		</div><!-- Photo Slider /- -->
		
		<!-- Features Section -->
		<div id="features-section" class="features-section container-fluid no-padding">
			<div class="section-padding"></div>
			<div class="top-image">
				<img src="<?= $baseUrl?>/images/features-top-img.png" alt="features-top-img" />
			</div>
			<!-- Container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>Our Spicy Creature</h3>
					<h5>features</h5>
					<img src="<?= $baseUrl?>/images/section-seprator.png" alt="section-seprator" width="76" height="10" />
				</div><!-- Section Header /- -->
				<div class="col-md-4 col-xs-6 col-xs-6">
					<div class="features-content">
						<img src="<?= $baseUrl?>/images/features-ic-1.png" alt="features-ic" width="89" height="106" />
						<h3>delicious receipe</h3>
						<p>The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper.</p>
						<a href="#" title="Read More">Read More</a>
					</div>
				</div>
				<div class="col-md-4 col-xs-6 col-xs-6">
					<div class="features-content">
						<img src="<?= $baseUrl?>/images/features-ic-2.png" alt="features-ic" width="105" height="90" />
						<h3>global flavours</h3>
						<p>The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper.</p>
						<a href="#" title="Read More">Read More</a>
					</div>
				</div>
				<div class="col-md-4 col-xs-6 col-xs-6">
					<div class="features-content">
						<img src="<?= $baseUrl?>/images/features-ic-3.png" alt="features-ic" width="91" height="106" />
						<h3>delightful taste</h3>
						<p>The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper.</p>
						<a href="#" title="Read More">Read More</a>
					</div>
				</div>
			</div><!-- Container /- -->
			<div class="bottom-image">
				<img src="<?= $baseUrl?>/images/features-bottom-img.png" alt="features-bottom-img" />
			</div>
			<div class="section-padding"></div>
		</div><!-- Features Section /- -->
		
		
		<!-- Order Section 2 -->
		<div id="order-section" class="order-section order-section-2 container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="col-md-5 col-sm-5 col-xs-12 order-right-content">
					<!-- Section Header -->
					<div class="section-header left-heder">
						<h3>Make Your Order</h3>
						<h5>BOOK ONLINE</h5>
						<img src="<?= $baseUrl?>/images/section-seprator-1.png" alt="section-seprator" width="76" height="10" />
						<p>The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper too will do their comfortable knew it was much more than a hunch the first mate.</p>
					</div><!-- Section Header /- -->
					<div class="call-us">
						<h5>any quries? call at</h5>
						<p><a href="tel:+1-92-345-7890" title="+1-92-345-7890"><i class="fa fa-phone" aria-hidden="true"></i>+1-92-345-7890</a></p>
					</div>
					<h3 class="delivery-heading"><span>*</span>free delivery within 10km distance</h3>
				</div>
				<div class="col-md-7 col-sm-7 col-xs-12 order-left">
				<div class="img-box">
					<div class="order-box">
						<div class="order-title">
							<h3>fill the order</h3>
						</div>
						<form class="order-form">
							<div class="form-group">
								<input type="text" required="" placeholder="Your Name *" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" required="" placeholder="Your EMail *" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" required="" placeholder="Your Phone Number *" class="form-control">
							</div>
							<div class="form-group">
								<select>
									<option>SELECT YOUR FLAVOURS</option>
									<option>SELECT YOUR FLAVOURS</option>
									<option>SELECT YOUR FLAVOURS</option>
									<option>SELECT YOUR FLAVOURS</option>
								</select>
							</div>
							<div class="form-group">
								<textarea placeholder="Your Address *" rows="6" class="form-control"></textarea>
							</div>
							<input type="submit" title="Order Now" value="Order Now" name="Order Now">
						</form>
					</div>
				</div>
			</div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Order Section 2 -->
		
		<!-- About Section -->
		<div class="about-section container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="col-md-5 col-sm-5 col-xs-6 about-img">
					<img src="<?= $baseUrl?>/images/about-1.png" alt="about" width="597" height="965" />
				</div>
				<div class="col-md-7 col-sm-7 col-xs-6 about-content">
					<!-- Section Header -->
					<div class="section-header left-header">
						<h3>Welcome to PizzaKitchen</h3>
						<h5>About Us</h5>
						<img src="<?= $baseUrl?>/images/section-seprator.png" alt="section-seprator" width="76" height="10" />
					</div><!-- Section Header /- -->
					<div class="about-box">
						<p>The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper too will do their comfortable its like a kind of torture to have to watch the show the ship set ground on the shore of this uncharted desert isle with too the millionaire and his wife If you have a problem if no one else can help  can hire Gilligan the Skipper.</p>
						<p>The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper too will do their comfortable.</p>
						<ul>
							<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" title="Google"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
						<a href="#" title="View More" class="view-more">View More</a>
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- About Section /- -->
		
		<!-- Quotes Section -->
		<div class="quotes-section container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<div class="quotes-content">
					<h3>Everybody likes Pizza! It's a Quick and Easy Clean-Up Meal.</h3>
					<img src="<?= $baseUrl?>/images/quote-ic-1.png" alt="quote-ic" /><h5>Buddy Valastro</h5><img src="<?= $baseUrl?>/images/quote-ic-2.png" alt="quote-ic" />
				</div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Quotes Section /- -->
		
		<!-- Menu Section -->
		<div class="menu-section container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>Fresh From PizzaKitchen</h3>
					<h5>OUR MENU</h5>
					<img src="<?= $baseUrl?>/images/section-seprator.png" alt="section-seprator" width="76" height="10" />
					<p>The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper too will do their comfortable.</p>
				</div><!-- Section Header /- -->
				<div class="menu-details-tab">
					<!-- Nav tabs -->
					<ul class="col-md-12 no-padding nav nav-tabs" role="tablist">
						<li class="col-md-6 col-sm-6 col-xs-6" role="presentation">
							<div class="col-md-6 col-sm-6 col-xs-4">
								<a href="#mexicangreenwave" role="tab" data-toggle="tab"><span><img src="<?= $baseUrl?>/images/menu-flv-1.png" alt="menu-flv" /></span><i><img src="<?= $baseUrl?>/images/flavour-1.png" alt="flavour"/></i>Mexican Green Wave</a>
							</div>
						</li>
						<li class="col-md-6 col-sm-6 col-xs-6" role="presentation">
							<div class="col-md-6 col-sm-6 col-xs-4">
								<a href="#meatzaapizza" role="tab" data-toggle="tab"><span><img src="<?= $baseUrl?>/images/menu-flv-2.png" alt="menu-flv" /></span><i><img src="<?= $baseUrl?>/images/flavour-2.png" alt="flavour"/></i>Meatzaa Pizza</a>
							</div>
						</li>
						<li class="col-md-6 col-sm-6 col-xs-6 active" role="presentation">
							<div class="col-md-6 col-sm-6 col-xs-4">
								<a href="#margheritapizza" role="tab" data-toggle="tab"><span><img src="<?= $baseUrl?>/images/menu-flv-3.png" alt="menu-flv" /></span><i><img src="<?= $baseUrl?>/images/flavour-4.png" alt="flavour"/></i>Margherita Pizza</a>
							</div>
						</li>
						<li class="col-md-6 col-sm-6 col-xs-6" role="presentation">
							<div class="col-md-6 col-sm-6 col-xs-4">
								<a href="#cheeseandpepperoni" role="tab" data-toggle="tab"><span><img src="<?= $baseUrl?>/images/menu-flv-4.png" alt="menu-flv" /></span><i><img src="<?= $baseUrl?>/images/flavour-5.png" alt="flavour"/></i>Cheese and Pepperoni</a>
							</div>
						</li>
						<li class="col-md-6 col-sm-6 col-xs-6" role="presentation">
							<div class="col-md-6 col-sm-6 col-xs-4">
								<a href="#doublecheesepizza" role="tab" data-toggle="tab"><span><img src="<?= $baseUrl?>/images/menu-flv-5.png" alt="menu-flv" /></span><i><img src="<?= $baseUrl?>/images/flavour-7.png" alt="flavour"/></i>Double Cheese Pizza</a>
							</div>
						</li>
						<li class="col-md-6 col-sm-6 col-xs-6" role="presentation">
							<div class="col-md-6 col-sm-6 col-xs-4">
								<a href="#goldenchickendelight" role="tab" data-toggle="tab"><span><img src="<?= $baseUrl?>/images/menu-flv-6.png" alt="menu-flv" /></span><i><img src="<?= $baseUrl?>/images/flavour-8.png" alt="flavour"/></i>Golden Chicken Delight</a>
							</div>
						</li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content col-md-6 col-sm-6 col-xs-12 menu-center">
						<div role="tabpanel" class="tab-pane" id="mexicangreenwave">
							<div class="menu-content-box">
								<img src="<?= $baseUrl?>/images/menu-flavour.png" alt="menu-flavour" width="479" height="266" />
								<h3>mexicangreenwave</h3>
								<h5>Price: <span>$45</span></h5>
								<a href="#" title="Buy Now" class="buy-now">Buy Now</a>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="meatzaapizza">
							<div class="menu-content-box">
								<img src="<?= $baseUrl?>/images/menu-flavour.png" alt="menu-flavour" width="479" height="266" />
								<h3>meatzaapizza</h3>
								<h5>Price: <span>$45</span></h5>
								<a href="#" title="Buy Now" class="buy-now">Buy Now</a>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane active" id="margheritapizza">
							<div class="menu-content-box">
								<img src="<?= $baseUrl?>/images/menu-flavour.png" alt="menu-flavour" width="479" height="266" />
								<h3>margheritapizza</h3>
								<h5>Price: <span>$45</span></h5>
								<a href="#" title="Buy Now" class="buy-now">Buy Now</a>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="cheeseandpepperoni">
							<div class="menu-content-box">
								<img src="<?= $baseUrl?>/images/menu-flavour.png" alt="menu-flavour" width="479" height="266" />
								<h3>cheeseandpepperoni</h3>
								<h5>Price: <span>$45</span></h5>
								<a href="#" title="Buy Now" class="buy-now">Buy Now</a>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="doublecheesepizza">
							<div class="menu-content-box">
								<img src="<?= $baseUrl?>/images/menu-flavour.png" alt="menu-flavour" width="479" height="266" />
								<h3>Double Cheese Pizza</h3>
								<h5>Price: <span>$45</span></h5>
								<a href="#" title="Buy Now" class="buy-now">Buy Now</a>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="goldenchickendelight">
							<div class="menu-content-box">
								<img src="<?= $baseUrl?>/images/menu-flavour.png" alt="menu-flavour" width="479" height="266" />
								<h3>goldenchickendelight</h3>
								<h5>Price: <span>$45</span></h5>
								<a href="#" title="Buy Now" class="buy-now">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Menu Section /- -->
		
		
		<!-- Testimonial Section -->
		<div class="testimonial-section container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<!-- Main Carousel -->
				<div id="main-carousel1" class="carousel slide carousel-fade" data-ride="carousel">
					<div role="listbox" class="carousel-inner">
						<div class="item active">
							<div class="testimonial-content">
								<img src="<?= $baseUrl?>/images/testi-author.jpg" alt="testi-author" width="150" height="170" />
								<div class="testi-box">
									<p>The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper too will do their comforta</p>
									<h3>MARK DEO</h3>
									<h5> Founder,Timeday</h5>
									<span><i class="fa fa-quote-left" aria-hidden="true"></i></span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-content">
								<img src="<?= $baseUrl?>/images/testi-author.jpg" alt="testi-author" width="150" height="170" />
								<div class="testi-box">
									<p>The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper too will do their comforta</p>
									<h3>MARK DEO</h3>
									<h5> Founder,Timeday</h5>
									<span><i class="fa fa-quote-left" aria-hidden="true"></i></span>
								</div>
							</div>
						</div>
						<a class="left carousel-control" href="#main-carousel1" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
						</a>
						<a class="right carousel-control" href="#main-carousel1" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</a>
					</div>
				</div><!-- Main Carousel /-  -->
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Testimonial Section /- -->
		
		<!-- Team Section -->
		<div class="team-section container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>Our Spicy Creature</h3>
					<h5>features</h5>
					<img src="<?= $baseUrl?>/images/section-seprator.png" alt="section-seprator" width="76" height="10" />
					<p>The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper too will do their comfortable.</p>
				</div><!-- Section Header /- -->
				<div class="col-md-4 col-sm-6 col-xs-6">
					<img src="<?= $baseUrl?>/images/team-1.png" alt="team" width="426" height="565">
					<div class="team-hover-box">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<h3>maria luis</h3>
						<h5>chief cook</h5>
						<ul>
							<li><a href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" title="Google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<img src="<?= $baseUrl?>/images/team-2.png" alt="team" width="426" height="565">
					<div class="team-hover-box">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<h3>maria luis</h3>
						<h5>chief cook</h5>
						<ul>
							<li><a href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" title="Google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<img src="<?= $baseUrl?>/images/team-3.png" alt="team" width="426" height="565">
					<div class="team-hover-box">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<h3>maria luis</h3>
						<h5>chief cook</h5>
						<ul>
							<li><a href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" title="Google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- Team Section /- -->
		
		<!-- Subscribe Section -->
		<div class="subscribe-section container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="subscribe-content">
					<h3>SIGNUP TO OUR NEWSLETTER</h3>
					<div class=" col-md-6 col-sm-8 col-xs-10 input-group">
						<input type="text" placeholder="Enter Your Email" class="form-control">
						<span class="input-group-btn">
							<button type="button" title="Sign Up" class="btn btn-default">Subcribe</button>
						</span>
					</div><!-- /input-group -->
				</div>
			</div><!-- Container /- -->
		</div><!-- Subscribe Section /- -->
	</main>
	<!-- Footer Main -->
	<footer id="footer-main" class="footer-main container-fluid no-padding">
		<div class="section-padding"></div>
		<!-- Container -->
		<div class="container">
			<!-- Widget About -->
			<aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget about-widget">
				<a title="Logo" href="index.html" class="navbar-brand"><img src="<?= $baseUrl?>/images/logo.png" alt="logo" /></a>
				<p>The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper too will do their comfortable.</p>
				<a href="#" title="Locate Us" class="locate-us">Locate Us</a>
			</aside><!-- Widget About /- -->
			
			<!-- Widget Hours -->
			<aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget hours-widget">
				<h3>working hours</h3>
				<img src="<?= $baseUrl?>/images/quote-ic-3.png" alt="quote-ic" />
				<ul>
					<li><a href="#">MON : 9.30AM to 10.30PM</a></li>
					<li><a href="#">Tue : 9.30AM to 10.30PM</a></li>
					<li><a href="#">Wed : 9.30AM to 10.30PM</a></li>
					<li><a href="#">Thu : 9.30AM to 10.30PM</a></li>
					<li><a href="#">Fri : 9.30AM to 10.30PM</a></li>
					<li class="active"><a href="#">Sat : Closed</a></li>
					<li><a href="#">Sun : 9.30AM to 10.30PM</a></li>
				</ul>
			</aside><!-- Widget Hours /- -->
			
			<!-- Widget Links -->
			<aside class="col-md-2 col-sm-6 col-xs-6 ftr-widget hours-widget link-widget">
				<h3>Quick links</h3>
				<img src="<?= $baseUrl?>/images/quote-ic-3.png" alt="quote-ic" />
				<ul>
					<li><a href="about.html" title="About Us">About Us</a></li>
					<li><a href="index.html" title="Features">Features</a></li>
					<li><a href="services.html" title="Services">Services</a></li>
					<li><a href="gallery-single.html" title="Portfolio">Portfolio</a></li>
					<li><a href="contact-us.html" title="Sitemap">Sitemap</a></li>
					<li><a href="blog.html" title="Blog">Blog</a></li>
					<li><a href="contact-us.html" title="Contact Us">Contact Us</a></li>
				</ul>
			</aside><!-- Widget Links /- -->
			
			<!-- Widget Contact -->
			<aside class="col-md-4 col-sm-6 col-xs-6 ftr-widget contact-widget">
				<h3>Contact Info</h3>
				<img src="<?= $baseUrl?>/images/quote-ic-3.png" alt="quote-ic" />
				<div class="contact-info">
					<p><span>Address:</span>323A,Olive Palace, Washington DC, USA.</p>
					<p><span>Phone no:</span><a href="tel:+1992746789" title="+1-99-274-6789">+1-99-274-6789</a></p>
					<p><a href="tel:+1773456780" title="+1-77-345-6780">+1-77-345-6780</a></p>
					<ul>
						<li><a href="#" title="Facebbok"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</aside><!-- Widget Contact /- -->
			<div class="bottom-footer">
				<p>&copy; Copyrights PizzaKitchen 2016. All Rights Reserved</p>
				<div class="terms-policy">
					<a href="#">Terms & Condtions</a>
					<a href="#">Privacy Policy</a>
				</div>
			</div>
		</div><!-- Container /- -->
	</footer><!-- Footer Main /- -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
