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
			<?php get_template_part("inc/ads/abajo","h1"); ?>
		</div>
	</div>
</div>
 
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-6 col-md-6 col-lg-6">
			<?php get_template_part("post_templates/widgets/indice");?>	
		</div>	

		<div class="col-12 col-sm-6 col-md-6 col-lg-6">
			<img src="<?php echo get_the_post_thumbnail_url();?>" width="100%" alt="<?php echo $post->post_title; ?>">
		</div>

	 </div>
</div>


<div class="container">
	<div class="row my-40">
		<div class="col-12">
            <?php
				echo $purified_content; 
			?>	

		</div>
	</div>
</div>
<?php echo do_shortcode('[relacionados post_type="guia"]'); ?>
<?php comments_template("/comments.php");?>
 
</div>