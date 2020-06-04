<?php
	global $post;

	$post_parent = $post->ID;
	if($post->post_parent > 0){
		$post_parent = $post->post_parent;
	}

	$args = array(
		'post_type' => 'escuela',
		'post_per_page' => -1,
		'post_parent' => $post_parent,
		'post__not_in' => array($post->ID)
		);

	$niveles = get_posts($args);

?>
	<div class="text-center">
		<?php foreach($niveles as $nivel): ?>
			<a class="btn btn-azul" href="<?php echo get_permalink($nivel->ID);?>"><?php echo $nivel->post_title; ?></a>
		<?php endforeach;?>
	</div>