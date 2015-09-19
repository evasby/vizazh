<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Визаж</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.glide.min.js"></script>
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/all-old-ie.css">
  <![endif]-->
  <!--[if gt IE 8]>
    <link rel="stylesheet" href="css/all.css">
  <![endif]-->
  <script>
	  $( document ).ready(function() {
		  var glide = $('.slider').glide().data('api_glide');

			$(window).on('keyup', function (key) {
				if (key.keyCode === 13) {
					glide.jump(3, console.log('Wooo!'));
				};
			});

			$('.slider-arrow').on('click', function() {
				console.log(glide.current());
			});


		});
  </script>
</head>
<body>
	<div class="inner">

		<header class="header">
			<div class="header_top">lovely make up</div>
			<div class="header_bottom">
				<div class="header_item">
					<div class="social">
						<a href="#" class="social_item social_item__fb">Facebook</a>
						<a href="#" class="social_item social_item__ig">Instagram</a>
						<a href="#" class="social_item social_item__vk">Вконтакте</a>
					</div>
				</div>
				<div class="header_item">
					<nav class="mymenu">
						<ul class="mymenu_list">
							<li class="mymenu_item">
								<a href="#" class="mymenu_link">Портфолио</a>
							</li>
							<li class="mymenu_item">
								<a href="#" class="mymenu_link">Тенденции</a>
							</li>
							<li class="mymenu_item">
								<a href="/contacts.php" class="mymenu_link">Контакты</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="header_item">
					<div class="phone"><p>+37529 1160219</p></div>
				</div>
			</div>
		</header>

		<div class="slider">
			<ul class="slides">
				<li class="slide"><div class="box" style="background-image:url(image/slider/slide1.jpg);"></div></li>
				<li class="slide"><div class="box" style="background-image:url(image/slider/slide2.jpg);"></div></li>
				<li class="slide"><div class="box" style="background-image:url(image/slider/slide3.jpg);"></div></li>
				<li class="slide"><div class="box" style="background-image:url(image/slider/slide4.jpg);"></div></li>
			</ul>
		</div>
		

		<footer class="footer">
			<div class="footer_text">be beautiful</div>
		</footer>


	</div>

</body>
</html>