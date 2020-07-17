<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
  <?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




</head>
<body>
	<header>
		<div class="nav-up">
			<div class="container">
				<div class="nav-up-container">
					  <div class="hamburger" onclick="navactive()">
                  	<span><i class="fas fa-bars"></i></span>
                  </div>
					           <nav>
                <div class="nav-close"><span onclick="removenavactive()"><i class="fas fa-times"></i></span></div>
                 <?php
wp_nav_menu( [
    'menu'            => 'Main', 
    'container'       => 'false', 
    'menu_class'      => 'header__nav', 
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'items_wrap'      => '<ul  class="header__nav">%3$s</ul>',
    'depth'           => 6,
] );

                  ?>
                </nav>
			
<div class="nav-button">
	<span class="nav-button-text" onclick="pop_up_open()">TOP FORUM CLUB</span>
</div>


				</div>
			</div>


		</div>
	<div class="nav-down">
		<div class="container">
			<div class="nav-down-container">
				<div class="header_logo">
					 <?php echo get_custom_logo(); ?>
				</div>
			<div class="event-contacts">
				<span class="event-contacts-icon"><i class="fas fa-trophy"></i></span>
			<a href="#" class="event-contacts-text">UPCOMING EVENTS</a>
			</div>
	<div class="event-contacts">
				<span class="event-contacts-icon"><i class="far fa-flag"></i></span>
			<a href="http://localhost:81/%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%20worpdpress/?page_id=239" class="event-contacts-text">Contacts</a>
			</div>
<div class="nav-button">
	<a href="http://localhost:81/%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%20worpdpress/?page_id=242" class="nav-button-text">REGISTER NOW </a>
</div>
			</div>
		</div>

	</div>
	</header>







