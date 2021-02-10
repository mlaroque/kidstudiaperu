<?php global $post; ?>
<?php $purified_content = apply_filters("the_content",$post->post_content); ?>
<?php $GLOBALS["purified_content"] = $purified_content; ?>
<?php get_header();?>
	<?php if($post->post_type === "colegio" && $post->post_parent > 0):?>
		<?php get_template_part("post_templates/nivel");?>
	<?php elseif($post->post_type === "guia"):?>
		<?php get_template_part("post_templates/guias");?>
	<?php else:?>
		<?php get_template_part("post_templates/" . $post->post_type);?>
	<?php endif;?>
	

<?php get_footer(); ?>