<!DOCTYPE html>
<html>
	<head>
	<title>edibles by erin</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />
	<link rel="stylesheet" type="text/css" href="includes/style.css">
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<script src="_js/jquery-1.6.3.min.js"></script>
	<script src="_js/jquery.validate.min.js"></script>
<script src="bxslider/jquery.bxSlider.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(function(){
  $('#js-slider').bxSlider({
    auto: true,
    autoControls : true,
    prevText: null,
    nextText: null,
    stopText: null,
    speed: 3000,
  });
}); 
$(document).ready(function() {
	$('#promo').validate({
		rules: {
			email: {
				required: true,
				email: true
			},
			zipcode: {
				required: true,
				rangelength: [5,5]
			},
		}, // end rules
		messages: {
			email: {
				required: "<br />Please enter your e-mail address.",
				email: "<br />This is not a valid e-mail address."
			},
			zipcode: {
				required: '<br />Please enter your zip code.',
				rangelength: '<br />Zip code must be 5 digits.'
			}
		}, // end messages
		}); // end validate
}); // end ready
</script>

</head>

<body>
	<div id="shell">
		<header id="big">
		</header> <!-- header -->
		<div class = "cl"></div> <!-- cl -->
				<!--<div id = "top-photo">
				</div> <!-- top-photo -->
				<div id="js-slider">
					<div><img src="images/slider/04.jpg" alt="salon"></div>
					<div><img src="images/slider/03.jpg" alt="restaurant"></div>
					<div><img src="images/slider/05.jpg" alt="restaurant"></div>
					<div><img src="images/slider/02.jpg" alt="restaurant"></div>
				</div> <!--js-slider-->
					<div id="phone">
					</div> <!--phone-->
					<div class = "cl20">
					</div> <!-- cl20 -->
					
		<nav id="main"> 
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="occasions.php">Occasions</a></li>
				<li><a href="flavors.php">Flavors</a></li>
				<li><a href="faq.php">F.A.Q.'s</a></li>
				<li><a href="pricing">Pricing</a></li>
				<li><a href="testimonials.php">Testimonials</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</nav>
					
					<div id="content">
						<div class="cl20"></div>
						<h1>Welcome to edibles by erin!</h1>
						<section id="left">
							<p>&nbsp;&nbsp;&nbsp;edibles by erin creates custom cake pops and more for your next event, or just to show someone
							 how much you care.  Order now for birthdays, holidays, showers, weddings, bar/bat mitzvahs, 
							 graduation, mother’s day and more! See our “occasions” page to begin your search for 
							 something so unique, you’ll be the talk of the town!</p>
							 
							 <p>&nbsp;&nbsp;&nbsp;not sure what you want, but know you want ‘em?  No problem! We’re experts at creatively
							  turning vague ideas into a beautiful centerpiece or favors!</p>
							  
							  <p>&nbsp;&nbsp;&nbsp;don’t be fooled by “cake pop makers” as seen on TV… our cake-pops are custom made, 
							  “truffle-style”, hand shaped, hand dipped &amp; decorated.</p>
							  
							  <p>&nbsp;&nbsp;&nbsp;edibles by erin is fully licensed and insured to create treats to impress your guests at 
							  your next event. need references? we’ve got ‘em!</p>
							  
							  <p>&nbsp;&nbsp;&nbsp;have fun with our website… and as always, please contact us if you have questions, to place 
							  an order, or would like further information!</p>
							  
							  <h4>Don't Forget!!!</h4>
								<div class="event-banner">
								</div>
							  <h4>Please place orders by March 10th</h4>
							  
						</section> <!--left-content-->
							  
						<section id="right">
							<div class="facebook">
								<a href="http://www.facebook.com/EdiblesByErin"><img src="images/like.jpg" alt=""></a>
							</div> <!--facebook-->
							
							<div class="ad">
								<img src="images/ad.jpg" alt="">
							</div> <!--ad-->
							
						<form id="coupon">
							<form action="process.php" method="post" name="promo" id="promo">
							<fieldset>
								<p><label><span>email:</span> <input type="text" name="email" id="email" class="required error" size="12" maxlength="30" /></label></p>
								<p><label><span>zip code:<span></span> <input type="text" name="zipcode" id="zipcode" class="required error" size="5" maxlength="5" /></label></p>
							</fieldset>
								<p align="center"><input type="submit" name="submit" value="Submit" /></p>	
							</form> <!--form1-->
						</section> <!--right-content-->
						<div class="cl">
						</div> <!--cl-->
						</div> <!-- content-->
					
					<footer>
						<ul>
						<li><a href = "index.php">Home</a></li>
						<li><a href = "occasions.php">Occasions</a></li>
						<li><a href = "flavors.php">Flavors</a></li>
						<li><a href = "faq.php">F.A.Q.'s</a></li>
						<li><a href = "pricing.php">Pricing</a></li>
						<li><a href = "contact.php">Contact Us</a></li>
					</ul>
					
					<div class="right">
						<span>&copy; 2012 - edibles by erin &nbsp; Design by James Bouska</span></div>
					</footer> <!--footer-->
 		
	</div> <!-- shell -->
	
</body>

</html>
