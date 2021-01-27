<?php global $post;

	$current_post = $post;
	if($current_post->post_parent > 0){
		$current_post = get_post($post->post_parent);
	}

?>
<div id="contacto" class="container-fluid scp-contact shadow">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center"> <br>
				<h2>Contacto</h2> 
				<p><b>Dirección:</b> <?php echo get_post_meta( $current_post->ID, 'escuela_contacto_direccion', true );	?></p>
				<p><b>Teléfono:</b> <?php echo get_post_meta( $current_post->ID, 'escuela_contacto_telefono', true );	?></p>
				<p class="text-center">
					<a target="_blank" rel="noopener noreferrer nofollow" href="<?php echo get_post_meta( $current_post->ID, 'escuela_contacto_web', true );	?>"><img src="<?php bloginfo('template_url'); ?>/images/chrome.svg" /></a>
					<a target="_blank" rel="noopener noreferrer nofollow" href="<?php echo get_post_meta( $current_post->ID, 'escuela_contacto_facebook', true );	?>"><img src="<?php bloginfo('template_url'); ?>/images/facebook.svg" /></a>
				</p>
			</div>
		</div>
	</div>
</div>