<?php 
function parseStarGroup($star){
	for ($j = 5; $j > 0; $j--) {
		echo '<span';
			 if (isset($star) && ($star >= $j))
					echo ' class="rated"';
		echo '>'.'☆</span>';
	} 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Frontend Practive</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
			
			<div class="left-header">
				<a href="" id="logo">
					<img src="images/logo.png" alt="logo">
				</a>

			</div>

			<div class="right-header">
				<ul>
					<li><a href="">My Account</a><span>|</span></li>
					<li class="tb-hidden"><a href="">Wishlist</a><span>|</span></li>
					<li><a href="">My Cart</a><span>|</span></li>
					<li class="tb-hidden"><a href="">Checkout</a><span>|</span></li>
					<li><a href="">Login</a></li>
				</ul>


				<div class="sm-menu-left">
					<div class="btn-sm-category" onclick="toggleDisplay('list-menu-left')"><img src="images/list-menu.png" alt="category"></div>
					<div id="list-menu-left" style="display: none;">
						<ul>
							<a href=""><li>Clothing</li></a>
							<a href=""><li>Electronics</li></a>
							<a href=""><li>Shoes</li></a>
							<a href=""><li>Watches</li></a>
							<a href=""><li>Jewellery</li></a>
							<a href=""><li>Health and Beauty</li></a>
							<a href=""><li>Kids and Babies</li></a>
							<a href=""><li>Sports</li></a>
							<a href=""><li>Home and Garden</li></a>
						</ul>
					</div>
					
				</div>

				<div class="box-search">
					<form>
						<input type="text" placeholder="Search here...">
						<button class="btn btn-bg"><img src="images/icon-search.png" alt="icon search"></button>
					</form>
				</div>

				<div class="cart-total">
					<button class="btn btn-bg"><img src="images/icon-cart.png" alt="icon cart"></button>
					<table>
						<tr><td id="total">TOTAL</td></tr>
						<tr><td id="price-total">$600.00</td></tr>
					</table>
				</div>
				
				<div class="sm-menu">
					<div class="btn-sm-menu" onclick="toggleDisplay('box-sm-menu')">≡</div>
					<div class="box-sm-menu" id="box-sm-menu" style="display: none;">
						<ul class="list-sm-menu">
							<a href=""><li><img src="images/logo.png" alt=""></li></a>
							<a href=""><li>Home</li></a>
							<a href=""><li>Clothing</li></a>
							<a href=""><li>Electronics Hot</li></a>
							<a href=""><li>Health & Beauty</li></a>
							<a href=""><li>Watches</li></a>
							<a href=""><li>Jewellery</li></a>
							<a href="" ><li >Shoes</li></a>
							<li id="line"></li>
							<a href="" class="sm-show"><li>My Account</li></a>
							<a href="" class="sm-show"><li>Wishlist</li></a>
							<a href="" class="sm-show"><li>My Cart</li></a>
							<a href="" class="sm-show"><li>Checkout</li></a>
							<a href="" class="sm-show"><li>Login</li></a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- end header -->

	<!-- nav -->
	<nav>
		<div class="container">
			<div class="left-column">
				<div class="category-title"><img src="images/list-menu.png" alt="category">Categories</div>
			</div>

			<div class="right-column">
				<ul>
					<a href=""><li>Clothing</li></a>
					<a href=""><li>Electronics Hot</li></a>
					<a href=""><li>Health & Beauty</li></a>
					<a href=""><li>Watches</li></a>
					<a href=""><li>Jewellery</li></a>
					<a href=""><li>Shoes</li></a>
				</ul>
			</div>
		</div>	
	</nav>
	<!-- end nav -->
	

	<div class="container" id="main">

		<!-- left column -->
		<div class="left-column">
			<div class="box">
				<ul class="menu-left">
					<a href=""><li><img src="images/item-list.png" alt="item-list">Clothing</li></a>
					<a href=""><li><img src="images/item-list.png" alt="item-list">Electronics</li></a>
					<a href=""><li><img src="images/item-list.png" alt="item-list">Shoes</li></a>
					<a href=""><li><img src="images/item-list.png" alt="item-list">Watches</li></a>
					<a href=""><li><img src="images/item-list.png" alt="item-list">Jewellery</li></a>
					<a href=""><li><img src="images/item-list.png" alt="item-list">Health and Beauty</li></a>
					<a href=""><li><img src="images/item-list.png" alt="item-list">Kids and Babies</li></a>
					<a href=""><li><img src="images/item-list.png" alt="item-list">Sports</li></a>
					<a href=""><li><img src="images/item-list.png" alt="item-list">Home and Garden</li></a>
				</ul>
			</div>


			<!-- hot deals -->
			<div class="box box-padding">
				<div class="top-box">
					<div class="heading">Hot deals</div>
					<div class="arrow-group">
						<a href="" class="btn btn-default left-arrow"><img src="images/icon-left-arrow.png" alt="icon left arrow"></a>
						<a href="" class="btn btn-default right-arrow"><img src="images/icon-right-arrow.png" alt="icon right arrow"></a>
					</div>

				</div>

				<div class="box-content item">
					<a href=""><img class="lazy" data-src="images/img_03.png" width="260" height="209"></a>

					<p class="box-content-text center"><a href="">Lorem ipsum dolor</a></p>
					<table class="price-item">
						<tr>
							<td class="price-through">$100.00</td>
							<td class="price-offer">$90.00</td>
						</tr>
					</table>
					<div class="rating center">
						<?php parseStarGroup(4); ?>
					</div>
				</div>
			</div>
			<!-- end hot deals -->

			<!-- special deal -->
			<div class="box box-padding">
				<div class="top-box">
					<div class="heading">Special deal</div>
					<div class="arrow-group">
						<a href="" class="btn btn-default left-arrow"><img src="images/icon-left-arrow.png" alt="icon left arrow"></a>
						<a href="" class="btn btn-default right-arrow"><img src="images/icon-right-arrow.png" alt="icon right arrow"></a>
					</div>

				</div>

				<div class="box-content item">
					<a href=""><img class="lazy" data-src="images/img_20.png" width="260" height="209"></a>

					<p class="box-content-text center"><a href="">Lorem ipsum dolor</a></p>
					<table class="price-item">
						<tr>
							<td class="price-through">$100.00</td>
							<td class="price-offer">$90.00</td>
						</tr>
					</table>
					<div class="rating center">
						<?php parseStarGroup(4); ?>
					</div>
				</div>
			</div>
			<!-- end special deal -->


			<!-- newsletters -->
			<div class="box box-padding newsletters">
				<div class="top-box">
					<div class="heading">NewsLetters</div>
					
				</div>
				<div class="label-text">Sign Up for Our Newsletter!</div>
					<form>
						<input type="text" id="signup-newsletter"> <br>
						<input type="submit" value="SUBSCRIBE" class="btn btn-2">
					</form>
			</div>
			<!-- end newsletters -->



			<!-- ads -->
			<div class="ads">
				<a href=""><img class="lazy" data-src="images/ads.png" width="300" height="444px"></a>
			</div>
			<!-- end ads -->
		</div>
		<!-- end left column-->

		<!-- right column -->
		<div class="right-column">
			
			<!-- slides -->
			<div class="slide-wrapper">
				<div class="item-slide slide-animate">
					<div class="banner" style="background-image: url('images/banner.png')">
						<div class="wrap-hero center">
							<div class="hero-text-1">Collection 2016</div>
							<div class="hero-text-2">Save 50% for</div>
							<div class="hero-text-3">Frist purchase</div>
							<a href="" class="shop-now pulse-grow">Shop now</a>
						</div>
					</div>
				</div>

				<div class="item-slide slide-animate">
					<div class="banner" style="background-image: url('images/beach.jpg')">
						<div class="wrap-hero center">
							<div class="hero-text-1">Collection 2017</div>
							<div class="hero-text-2">Save 60% for</div>
							<div class="hero-text-3">Frist purchase</div>
							<a href="" class="shop-now pulse-grow">Shop now</a>
						</div>
					</div>
				</div>

				<div class="item-slide slide-animate">
					<div class="banner" style="background-image: url('images/girl.jpg')">
						<div class="wrap-hero center">
							<div class="hero-text-1">Collection 2018</div>
							<div class="hero-text-2">Save 70% for</div>
							<div class="hero-text-3">Frist purchase</div>
							<a href="" class="shop-now pulse-grow">Shop now</a>
						</div>
					</div>
				</div>

				<a class="prev" onclick="changeSlide(-1)">&#10094;</a>
				<a class="next" onclick="changeSlide(1)">&#10095;</a>
			</div>
			


			<!-- end slides -->
			

			<table class="offer-detail">
				<tr>
					<td>
						<div class="title-offer">Money Back</div>
						<div class="text-offer">30 Days Money Back Guarantee</div>
					</td>
					<td>
						<div class="title-offer">Free Shipping</div>
						<div class="text-offer">Shipping on orders over $99</div>
					</td>
					<td>
						<div class="title-offer">Special Sale</div>
						<div class="text-offer">Extra $5 off on all items</div>
					</td>
				</tr>
			</table>

			
			<div class="box box-padding box-product">
				<div class="top-box">
					<div class="heading">New products</div>
					<ul class="list-tab">
						<li><a href="">All</a></li>
						<li><a href="">Clothing</a></li>
						<li><a href="">Electronics</a></li>
						<li><a href="">Shoes</a></li>
					</ul>
					<div class="arrow-group">
						<a href="" class="btn btn-default left-arrow"><img src="images/icon-left-arrow.png" alt="icon left arrow"></a>
						<a href="" class="btn btn-default right-arrow"><img src="images/icon-right-arrow.png" alt="icon right arrow"></a>
					</div>
				</div>

				<div class="box-content">
					<?php for ($i=0; $i < 4; $i++) { ?>
					<div class="item">
						<a href=""><img class="lazy" data-src="images/img_06.png" width="178" height="205"></a>

						<p class="box-content-text center"><a href="">Lorem ipsum dolor</a></p>
						<table class="price-item">
							<tr>
								<td class="price-through">$100.00</td>
								<td class="price-offer">$90.00</td>
							</tr>
						</table>
						<div class="rating center">
							<?php parseStarGroup(4); ?>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			



			<?php for ($i=0; $i < 2; $i++) { ?>
			<div class="mini-column box" style="background-image: url(images/slash-img-2.png);">
				<div class="right">
					<img src="images/2016.png" alt="2016">
					<div class="line"><a href="">Buy Now</a></div>
					<div class="line">*on select items only</div>
					<span class="triangle"></span>
				</div>
			</div>
			<?php } ?>


			
			<div class="box box-padding box-product">
				<div class="top-box">
					<div class="heading">Latest products</div>
					<ul class="list-tab">
						<li><a href="">All</a></li>
						<li><a href="">Clothing</a></li>
						<li><a href="">Electronics</a></li>
						<li><a href="">Shoes</a></li>
					</ul>
					<div class="arrow-group">
						<a href="" class="btn btn-default left-arrow"><img src="images/icon-left-arrow.png" alt="icon left arrow"></a>
						<a href="" class="btn btn-default right-arrow"><img src="images/icon-right-arrow.png" alt="icon right arrow"></a>
					</div>

				</div>

				<div class="box-content">
					<?php for ($i=0; $i < 4; $i++) { ?>
					<div class="item">
						<a href=""><img class="lazy" data-src="images/img_23.png" width="178" height="205"></a>

						<p class="box-content-text center"><a href="">Lorem ipsum dolor</a></p>
						<table class="price-item">
							<tr>
								<td class="price-through">$100.00</td>
								<td class="price-offer">$90.00</td>
							</tr>
						</table>
						<div class="rating center">
							<?php parseStarGroup(4); ?>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>


			<div class="box box-padding beautiful">
				<div class="image-beautiful">
					<img class="lazy" data-src="images/laptop.png" width="480" height="174">
				</div>
				<div class="text-beautiful">
					<div class="line">Beautiful laptop</div>
					<div class="line">Retina  display 18” ready !</div>
					<div class="line"><button class="btn btn-2">Shop Now</button></div>

				</div>
			</div>

			<div class="box box-padding box-featured-product">
				<div class="top-box">
					<div class="heading">Featured products</div>
					<div class="arrow-group">
						<a href="" class="btn btn-default left-arrow"><img src="images/icon-left-arrow.png" alt="icon left arrow"></a>
						<a href="" class="btn btn-default right-arrow"><img src="images/icon-right-arrow.png" alt="icon right arrow"></a>
					</div>

				</div>

				<div class="box-content">
					<?php for ($i=0; $i < 6; $i++) { ?>
					<div class="item">
						<div class="left-item">
							<a href=""><img class="lazy" data-src="images/img2_03.png" width="87" height="82"></a>
						</div>

						<div class="right-item">
							<p class="box-content-text"><a href="">Lorem ipsum dolor</a></p>
							<table class="price-item">
								<tr>
									<td class="price-through">$100.00</td>
									<td class="price-offer">$90.00</td>
								</tr>
							</table>
							<div class="rating left">
								<?php parseStarGroup(4); ?>
							</div>
						</div>
					</div>
					<?php } ?>

					
				</div>
			</div>
		</div>
		<!-- end right column -->
	</div>
	

	<div class="logo-relate">
		<div class="container">
			<div class="logo-item"><img src="images/logo-f1.png" alt="logo f1"></div>
			<div class="logo-item"><img src="images/logo-f2.png" alt="logo f2"></div>
			<div class="logo-item"><img src="images/logo-f3.png" alt="logo f3"></div>
			<div class="logo-item"><img src="images/logo-f4.png" alt="logo f4"></div>
			<div class="logo-item"><img src="images/logo-f5.png" alt="logo f5"></div>
			<div class="logo-item"><img src="images/logo-f6.png" alt="logo f6"></div>
		</div>
	</div>

	<!-- footer -->
	<footer>

		<div class="container">
			<div class="top-footer">
				<div class="left-column">
					<a href="">
						<img src="images/logo.png" alt="logo">
					</a>

					<p>This is Photoshop's version of Lorem Ipsum. <br> Proin gravida nibh velit it's a cold world out <br> there.</p>
					
					<ul class="list-contact">
						<li><img class="mini-icon" src="images/footer/local.png" alt="local">Main Road, Your City, NY 123456</li>
						<li><img class="mini-icon" src="images/footer/phone.png" alt="phone">(000) 2345 - 6789</li>
						<li><img class="mini-icon" src="images/footer/contact.png" alt="contact">info@psdfreebies.com</li>
					</ul>

				</div>
				<div class="right-column">
					<div class="col-footer">
						<div class="heading-footer">Infomation</div>
						<ul>
							<li><a href="">Our Story</a></li>
							<li><a href="">Privacy & Policy</a></li>
							<li><a href="">Terms & Conditions</a></li>
							<li><a href="">Shipping & Delivery</a></li>
							<li><a href="">Careers</a></li>
							<li><a href="">FAQs</a></li>
						</ul>
					</div>

					<div class="col-footer">
						<div class="heading-footer">Our Social</div>
						<ul>
							<li><a href=""><img class="mini-icon" src="images/footer/google-plus.png" alt="google plus">Google+</a></li>
							<li><a href=""><img class="mini-icon" src="images/footer/pinterest.png" alt="Pinterest">Pinterest</a></li>
							<li><a href=""><img class="mini-icon" src="images/footer/vimeo.png" alt="vimeo">Vimeo</a></li>
							<li><a href=""><img class="mini-icon" src="images/footer/instagram.png" alt="instagram">Instagram+</a></li>
						</ul>
					</div>


					<div class="col-footer">
						<ul>
							<li><a href=""><img class="mini-icon" src="images/footer/facebook.png" alt="facebook">Facebook</a></li>
							<li><a href=""><img class="mini-icon" src="images/footer/twitter.png" alt="Twitter">Twitter</a></li>
							<li><a href=""><img class="mini-icon" src="images/footer/rss.png" alt="rss">RSS</a></li>
							<li><a href=""><img class="mini-icon" src="images/footer/youtube.png" alt="youtube">YouTube</a></li>
						</ul>
					</div>

					<div class="col-footer">
						<div class="heading-footer">Opening Time</div>
						<ul>
							<li style="padding-left: 25px;"><img class="mini-icon" src="images/footer/clock.png" alt="clock" >Monday - Friday: 08:30 am - 09:30 pm</li>
							<li class="li-time">Sat - Sun: 09:00 am - 10:00 pm</li>
						</ul>
						<div class="heading-footer paymentoption">Paymentoption</div>
						<div class="card-group">
							<img src="images/footer/master-card.png" alt="master-card">
							<img src="images/footer/discover.png" alt="discover">
							<img src="images/footer/american-express.png" alt="american-express">
							<img src="images/footer/visa.png" alt="visa">
							<img src="images/footer/stripe.png" alt="stripe">
							<img src="images/footer/oo.png" alt="oo">
							<img src="images/footer/jcb.png" alt="jcb">
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="bottom-footer">
			<div class="line">
				<a href="">Sitemap</a>
				<a href="">Searchs</a>
				<a href="">Searchs</a>
				<a href="">Advance</a>
				<a href="">Searchs</a>
				<a href="">Contact Us</a>
			</div>
			<div class="line">
				© 2016 PSDFreebies.com&nbsp;&nbsp;|&nbsp;&nbsp;All Rights Reserved.
 			</div>
		</div>
	</footer>
	<!-- end footer -->
	<script src="myScript.js"></script>
</body>
</html>