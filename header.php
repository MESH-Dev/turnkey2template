<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>

	<!-- Meta / og: tags -->
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<!-- Typography -->
	<?php
	$pf_css = '';
	$sf_css = '';
	$font_select = get_field('font_pairing', 'option');
	if ($font_select == 1) {
		echo '<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">';
		echo '<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700" rel="stylesheet">';
		$pf_css = "font-family: 'Nunito Sans', sans-serif;";
		$sf_css = "font-family: 'Merriweather', serif;";
	} elseif($font_select == 2){
		echo '<link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">';
		$pf_css = "font-family: 'Montserrat', sans-serif;";
		$sf_css = "font-family: 'Playfair Display', serif;";
	} elseif($font_select == 3){
		echo ' <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Zilla+Slab:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">';
		$pf_css = "font-family: 'Ubuntu', sans-serif;";
		$sf_css = "font-family: 'Zilla Slab', serif;";
	} elseif($font_select == 4){
		echo '<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i|Merriweather:300,300i,400,400i,700,700i" rel="stylesheet">';
		$pf_css = "font-family: 'IBM Plex Serif', serif;";
		$sf_css = "font-family: 'Merriweather', serif;";
	} elseif ($font_select == 5) {
		echo '<link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i|Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">';
		$pf_css = "font-family: 'Muli', sans-serif;";
		$sf_css = "font-family: 'Raleway', sans-serif;";
	} elseif ($font_select == 6) {
		echo '<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Zilla+Slab:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">';
		$pf_css = "font-family: 'Zilla Slab', serif;";
		$sf_css = "font-family: 'Open Sans', sans-serif;";
	} else {
		echo '<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">';
		echo '<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700" rel="stylesheet">';
		$pf_css = "font-family: 'Nunito Sans', sans-serif;";
		$sf_css = "font-family: 'Merriweather', serif;";
	};
	?>

	<style>
		.pf,
		h1,h2,h3,h4,h5,h6,
		blockquote,
		blockquote p,
		.navigation,
		.navigation ul li a,
		a#menuTrigger,
		footer p,
		footer a,
		input,
		textarea{
			<?php echo $pf_css;?>
		}

		.sf,
		p,
		ul,
		a,
		li{
			<?php echo $sf_css;?>
		}
	</style>

	<?php
	$site_logo = get_field('site_logo', 'options');
	$logo_url = $site_logo['sizes']['medium'];
	$favicon_url = $site_logo['sizes']['small'];
	?>
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo $favicon_url ?>">
	<link rel="apple-touch-icon" href="<?php echo $favicon_url ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $favicon_url ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $favicon_url ?>">

	<!-- Analytics -->
	<?php the_field('google_analytics_code', 'option'); ?>

	<!-- SEO -->
	<?php the_field('google_sitemap_verification', 'option'); ?>
	<?php the_field('bing_sitemap_verification', 'option'); ?>

	<?php
	$primary_color = get_field('primary_color', 'option');
	$secondary_color = get_field('secondary_color', 'option');
	$tertiary_color = get_field('tertiary_color', 'options');
	?>

	<style>
		h4.page-callout{
			color: <?php echo $secondary_color; ?>;
		}
		hr{
			background-color: <?php echo $secondary_color; ?>;
		}
		h1{
			color: <?php echo $primary_color; ?>;
		}
		h2{
			color: <?php echo $tertiary_color; ?>;
		}
		h3{
			color: <?php echo $primary_color; ?>;
		}
		h4{
			color: <?php echo $secondary_color; ?>;
		}
		h5{
			color: <?php echo $tertiary_color; ?>;
		}
		h6{
			color: <?php echo $secondary_color; ?>;
		}
		a{
			color: <?php echo $secondary_color; ?>;
		}
	</style>

	<?php wp_head(); ?>

<!-- ////////////////////////// -->

<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</head>
<?php
	if (!is_404()) {
		$background_images = get_field('background_images');
		$rand_bg = array_rand($background_images);
		$bg_url = $background_images[$rand_bg]["image_choice"]["sizes"]['background-fullscreen'];
	} else {
		$bg_url = get_template_directory_uri() . '/img/404bg.jpg';
	};
	?>
	<div class="background-fullscreen" style="background-image:url('<?php echo $bg_url ?>')"></div>
	<body class="home">
<!-- <//?php if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) { ?><//?php } ?> -->
	<div class="container">
		<div class="row">
      <div class="columns-3">
			<header>
				<div class="logo fixed">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="site logo" src="<?php echo $logo_url ?>" /></a>
				</div>
				<div class="desktop-menu">
			  <div class="sidebar fixed">
			    <div class="navigation">
					<a id="mobileLogo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo_url ?>" /></a>
					<a id="menuTrigger">Menu</a>
			      <?php if(has_nav_menu('main_nav')){
			         $defaults = array(
			            'theme_location'  => 'main_nav',
			            'menu'            => 'main_nav',
			            'container'       => false,
			            'container_class' => '',
			            'container_id'    => '',
			            'menu_class'      => 'menu',
			            'menu_id'         => '',
			            'echo'            => true,
			            'fallback_cb'     => 'wp_page_menu',
			            'before'          => '',
			            'after'           => '',
			            'link_before'     => '',
			            'link_after'      => '',
			            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			            'depth'           => 0,
			            'walker'          => ''
			         ); wp_nav_menu( $defaults );
			      }else{
			         echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
			      } ?>
			    </div>
			  </div>
				</div>
			</header>
		</div>
