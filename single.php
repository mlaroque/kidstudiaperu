<?php global $post; ?>
<?php get_header(); ?>

	<?php get_template_part("post_templates/" . $post->post_type);?>

<?php get_footer(); ?>