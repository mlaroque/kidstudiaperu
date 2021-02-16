<!--HEADER B -->
<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LCtheme2020
 */

 global $post;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/grid.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/elements.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/indice.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/escuela.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fuentes.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/alerts.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/widgets.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/comments.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/galeria.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/niveles.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact-form.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/relacionados.css">
<?php if(is_front_page()):?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/portada.css">
<?php elseif($post->ID === 1398):?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/listado-guias.css">
<?php elseif($post->post_type == "guias"): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/guias.css">
<?php endif; ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/form.css">



<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P6CFCHM');</script>
<!-- End Google Tag Manager -->
    <?php wp_head(); ?>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P6CFCHM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


		<?php
			if($post->post_type == 'escuela'): 
				get_template_part('post_templates/widgets/markups/school');
			endif; 
		?>

    <header>
        <nav class="navbar navbar-expand-lg border-bottom shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img class="logo" src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>"
                        alt="<?php bloginfo( 'name' ); ?>" />
                </a>
                <div class="navbar-toggler hamburger_wrapper">
                    <div id="lc_hamburger" class="navbar-toggler" tabindex="1" role="button"
                        onclick="hamburger_toggle();">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <div class="openLg" id="lc_nav-menu">
                    
                    <?php wp_nav_menu(array(
	                       'theme_location' => 'header',
	                       'container' => false,
	                       'walker' => new LCMN_Walker(),
	                       'items_wrap' => '<ul id="%1$s" class="navbar-nav ml-auto">%3$s</ul>') )?>

                </div>
                <button type="button" class="btn btn-azul d-none d-sm-block d-md-block d-lg-block"
                    onclick='overlay()'>Pide Información</button>
                <?php get_template_part('/post_templates/widgets/pide-info');?>
            </div>
        </nav>
    </header>

    <script type="text/javascript">
    function hamburger_toggle() {
        var element = document.getElementById("lc_hamburger");
        element.classList.toggle("close");

        var element = document.getElementById("lc_nav-menu");
        element.classList.toggle("now-active");

    }
    </script>
 