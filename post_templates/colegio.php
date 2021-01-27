<?php global $post; global $purified_content; ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php get_template_part("post_templates/widgets/breadcrumbs"); ?>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-12">
			<h1><?php echo $post->post_title; ?></h1>
		</div>
	</div>
</div>
 
<div class="container">
	<div class="row">
		<?php get_template_part("post_templates/colegio/ficha");?>

		<div class="col-12 col-sm-6 col-md-8 col-lg-8">
			<?php get_template_part("post_templates/widgets/indice");?>		
		</div>	
	 </div>
</div>

<?php get_template_part("post_templates/colegio/datos_adicionales");?>

<div class="container">
	<div class="row my-40">
		<div class="col-12">
			<?php 

			ob_start();
			get_template_part("post_templates/nivel/otros_niveles");
			$niveles = ob_get_clean();

			$purified_content = preg_replace('/<h2(.*)>(.*?)iveles educativos(.*)<\/h2>/','<h2$1>$2iveles educativos$3</h2>'.$niveles,$purified_content);

			if($post->post_parent == 0 && is_user_logged_in()){
				ob_start();
				get_template_part('post_templates/colegio/costos-por-niveles');
				$h2_costos = ob_get_clean();
				$purified_content = preg_replace('/<h2(.*)>(.*?)Cómo se enseña en(.*)<\/h2>/', $h2_costos.'$0', $purified_content);
			
			}

			echo $purified_content; 


			?>	
		</div>
	</div>
</div>
<!--
<div class="container-fluid scp-contact shadow" id="contacto">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center"> <br>
				<h2>Contacto</h2> 
				<p><b>Dirección:</b> <?php echo get_post_meta( $post->ID, 'escuela_contacto_direccion', true );	?></p>
				<p><b>Teléfono:</b> <?php echo get_post_meta( $post->ID, 'escuela_contacto_telefono', true );	?></p>
				<p class="text-center">
					<a target="_blank" rel="noopener noreferrer nofollow" href="<?php echo get_post_meta( $post->ID, 'escuela_contacto_web', true );	?>"><img src="<?php bloginfo('template_url'); ?>/images/chrome.svg" /></a>
					<a target="_blank" rel="noopener noreferrer nofollow" href="<?php echo get_post_meta( $post->ID, 'escuela_contacto_facebook', true );	?>"><img src="<?php bloginfo('template_url'); ?>/images/facebook.svg" /></a>
				</p>
			</div>
		</div>
	</div>
</div>-->
<?php get_template_part("post_templates/nivel/contacto");?>


<div class="container">
	<div class="row">
		<?php 
			$galeria = array();
			for($i=1;$i<=5;$i++){
				$img_post_id = get_post_meta($post->ID, 'escuela_galeria'.$i, true);
				$img_post = get_post($img_post_id);
				array_push($galeria,$img_post->guid);
			}
		 ?>

		<?php 
			$GLOBALS["galeria"] = $galeria;
		    get_template_part("post_templates/widgets/galeria"); ?>

	</div>
</div>

<?php get_template_part("post_templates/widgets/post_type_relacionados");?>			

<?php comments_template("/comments.php");?>

</div>


<?php get_template_part("post_templates/nivel/escuela-municipio");?>			

		 