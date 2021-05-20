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
	<div class="row">
		<div class="lc_ads">
			<div id="ads_niveles_abajo_h1" class="lazy-ads "></div>
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

<?php get_template_part("post_templates/nivel/datos_adicionales");?>	
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="lc_ads">
				<div id="ads_niveles_abajo_quick" class="lazy-ads "></div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row my-40">
		<div class="col-12">
		<?php ob_start(); 
		get_template_part("post_templates/nivel/costos"); ?>
		<div class="alert alert-considera"><span class="bg-considera"><?php echo get_post_meta( $post->ID, 'nivel_costos_considera', true );	?></span></div>
		<?php $costos_h2 = ob_get_clean();?>

		<?php $purified_content = preg_replace('/<h2(.*?)>(.*?)ostos(.*?)<\/h2>/','<h2$1>$2ostos$3</h2>' . $costos_h2, $purified_content); ?>

		<?php 

			function insert_ads($m) {
				static $matchcount = 0;

				$matchcount++;

					if($matchcount == 3){
						ob_start();?>
						<div class="lc_ads">
							<div id="ads-nivel-third-h2" class="lazy-ads "></div>
						</div>
						<?php $ad .= ob_get_clean();
						return $m[0] . $ad;// ;
					}else if($matchcount == 5 and $new_template!='Si'){
						ob_start();?>
						<div class="lc_ads">
							<div id="ads-nivel-fifth-h2" class="lazy-ads "></div>
						</div>
						<?php $ad .= ob_get_clean();
						return $m[0] . $ad;// ;
					}else{
						return $m[0];
					}                
			}

			$purified_content = preg_replace_callback('/<h2(.*)>(.*)<\/h2>/', 'insert_ads', $purified_content);

			echo $purified_content; ?>	
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

<?php get_template_part("post_templates/colegio/contacto");?>

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
		 