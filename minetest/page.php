<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AXIT</title>
	<meta content="" name="description" />
	<meta content="" property="og:image" />
	<meta content="" property="og:description" />
	<meta content="" property="og:site_name" />
	<meta content="website" property="og:type" />
	<meta content="telephone=no" name="format-detection" />
	<meta http-equiv="x-rim-auto-match" content="none">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!--For mobile width images-->
	<meta name="viewport" content="width=device-width initial-scale=1.0" />
	<!--For mobile width images-->

	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/sass/fonts.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/sass/screen.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/sass/media.css" />

	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=latin-ext" rel="stylesheet">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">


</head>
<body>

	<header>
		<div class="black-line"></div>
		<?php wp_nav_menu(array('theme_location'=>'menu', 'menu_class'=>'mobile-menu') ); ?>
		<div class="container">
			<div class="wrap-menu">
					<div class="left-sm-logo">
						<a href="#"><img src="<?php bloginfo('template_directory') ?>/img/small-logo.png" alt="logo" title="AXIT"></a>
					</div>
					<?php wp_nav_menu(array('theme_location'=>'menu', 'menu_class'=>'right-menu') ); ?>

					<div id="toggle" class="toggle-mnu hidden-lg">
						<div class="one"></div>
						<div class="two"></div>
						<div class="three"></div>
					</div>
				<div style="clear: both;"></div>
			</div>



			<div class="header-main">
				<div class="left-hdr-main">
					<div class="big-logo"><img src="<?php bloginfo('template_directory') ?>/img/big-logo.png" alt="big logo" title="AXIT"></div>
					<h1>MODERN AXURE TEMPLATE <br> FOR BEAUTIFUL PROTOTYPES</h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean <br>
						euismod bibendum laoreet. Proin gravida dolor sit amet lacus <br>
						accumsan et viverra justo commodo.</p>

					<button>Download</button>
				</div>

				<div class="right-hdr-main">
					<form id="registration" class="pop-phone all" action="mail.php">
						<div class="wrap-h">
							<h3 class="pop-h3">Try Your <span>FREE</span> Trial Today</h3>
						</div>

						<input type="text" name="name" placeholder="Name" required>
						<input type="email" name="email" placeholder="Email" required>
						<input type="password" name="password" placeholder="Password" data-validation-required-message="Вы не ввели Ваш номер телефона" required>
						<button class="button" type="submit">Get Started</button>
					</form>
				</div>
				<div style="clear: both;"></div>
			</div>

			<div class="header-footer">
				<div class="wrap-soc-text">
					<h3>Social Media</h3>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Aenean euismod bibendum laoreet.</p>
				</div>
				<div class="wrap-imgs">
					<a href="#"><img src="<?php bloginfo('template_directory') ?>/img/fb.png" alt=""></a>
					<a href="#"><img src="<?php bloginfo('template_directory') ?>/img/tw.png" alt=""></a>
					<a href="#"><img src="<?php bloginfo('template_directory') ?>/img/ggl.png" alt=""></a>
					<a href="#"><img src="<?php bloginfo('template_directory') ?>/img/pin.png" alt=""></a>
					<a href="#"><img src="<?php bloginfo('template_directory') ?>/img/inst.png" alt=""></a>
					<a href="#"><img src="<?php bloginfo('template_directory') ?>/img/idontknow.png" alt=""></a>
					<a href="#"><img src="<?php bloginfo('template_directory') ?>/img/rss.png" alt=""></a>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div>
		<div class="white-line"></div>
	</header>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/com.js" ></script>
</body>
</html>