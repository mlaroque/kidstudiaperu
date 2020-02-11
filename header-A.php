<!--HEADER A-->
<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LCtheme2020
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta name="description" content="<?php bloginfo('description'); ?>" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/grid.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
<?php wp_head(); ?>
<body <?php body_class(); ?>>
<header>
	<nav class="navbar navbar-expand-lg border-bottom shadow-in">
		<div class="container">
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img class="logo" src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>" alt="<?php bloginfo( 'name' ); ?>" />
			</a>
	
			<div class="navbar-toggler hamburger_wrapper">
        		<div id="lc_hamburger" class="navbar-toggler" tabindex="1" role="button" onclick="hamburger_toggle();">
        			<span></span>
        			<span></span>
        			<span></span>
        		</div>
    		</div>

      <div class="openLg" id="lc_nav-menu">
      	<?php wp_nav_menu(array(
	                       'theme_location' => 'header',
	                       'container' => false,
	                       'items_wrap' => '<ul id="%1$s" class="navbar-nav ml-auto">%3$s</ul>') )?>
      </div>
    </div>
  </nav>
</header>

<script type="text/javascript">
	
	function hamburger_toggle(){
  		var element = document.getElementById("lc_hamburger");
 		element.classList.toggle("close");

 		var element = document.getElementById("lc_nav-menu");
 		element.classList.toggle("now-active");

	}

</script>

<button style="display: none" class="scroll-to-top">
	<div class="btnUp"><img src="<?php echo get_template_directory_uri() . '/images/arrowTop.svg'; ?>" alt="TOP" /></div>
</button>