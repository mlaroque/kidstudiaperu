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
		<?php get_template_part("post_templates/escuela/ficha");?>

		<?php get_template_part("post_templates/widgets/indice");?>			
	</div>
</div>

<?php get_template_part("post_templates/nivel/datos_adicionales");?>	

<div class="container">
	<div class="row my-40">
		<div class="col-12">
		<?php ob_start(); 
		get_template_part("post_templates/nivel/costos"); ?>
		<div class="alert alert-considera"><span class="bg-considera"><?php echo get_post_meta( $post->ID, 'nivel_costos_considera', true );	?></span></div>
		<?php $costos_h2 = ob_get_clean();?>

		<?php $purified_content = preg_replace('/<h2(.*?)>(.*?)ostos(.*?)<\/h2>/','<h2$1>$2ostos$3</h2>' . $costos_h2, $purified_content); ?>

		<?php echo $purified_content; ?>	
		</div>
	</div>
</div>

<div class="container">
	<div class="row my-40">
		<div class="col-12">

			<h2>Otros Niveles Educativos</h2>
			<?php get_template_part("post_templates/nivel/otros_niveles");?>	
		</div>
	</div>
</div>

<?php get_template_part("post_templates/escuela/contacto");?>

<div class="container">
	<div class="row">
		<?php 
			$galeria = array();
			for($i=1;$i<=5;$i++){
				$img_post_id = get_post_meta($post->post_parent, 'escuela_galeria'.$i, true);
				$img_post = get_post($img_post_id);
				array_push($galeria,$img_post->guid);
			}
		 ?>
		<?php
			$GLOBALS["galeria"] = $galeria;
		    get_template_part("post_templates/widgets/galeria"); ?>

	</div>
</div>

<?php comments_template("/comments.php");?>
 
</div>
		 