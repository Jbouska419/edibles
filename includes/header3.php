<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

	<title><?php echo $page_title; ?></title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />
	<link rel = "stylesheet" type = "text/css" href = "includes/style.css">
	<link href="fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet">
	<script src="_js/jquery-1.6.3.min.js"></script>
	<script src="_js/jquery.easing.1.3.js"></script>
	<script src="fancybox/jquery.fancybox-1.3.4.min.js"></script>
	<script>
		$(document).ready(function() {
		$('#gallery a').fancybox({
			overlayColor: '#1B1212',
			overlayOpacity: .8,
			transitionIn: 'elastic',
			transitionOut: 'elastic',
			easingIn: 'easeInSine',
			easingOut: 'easeOutSine',
			titlePosition: 'outside' ,		
			cyclic: true
		});
}); // end ready
</script>
</head>

<body>
	<div id="shell">
		<div id="header2">
			<div id="nav2">
					<ul>
						<li><a href = "index.php">Home</a></li>
						<li><a href = "occasions.php">Occasions</a></li>
						<li><a href = "flavors.php">Flavors</a></li>
						<li><a href = "faq.php">F.A.Q.'s</a></li>
						<li><a href = "pricing.php">Pricing</a></li>
						<li><a href = "contact.php">Contact Us</a></li>
					</ul>
			</div> <!-- nav2 -->
		</div> <!-- header2 -->
		<div class="cl">
		</div> <!--cl-->
