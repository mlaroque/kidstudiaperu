<?php get_header(); global $post; $purified_content = apply_filters("the_content",$post->post_content);?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<h1><?php echo $post->post_title; ?></h1>    
			<?php echo $purified_content; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>