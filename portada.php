<?php /* Template Name: Portada */ ?>

<?php get_header(); ?>



<div class="container">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
			endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
	</div>

	<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12">

		<!--<?php 
		$args = array(
				'post_type' => 'horoscopos',
				'posts_per_page' => -1
			);

		$horoscopos = get_posts($args);

		foreach($horoscopos as $horoscopo):?>

				<a href="<?php echo get_permalink($horoscopo->ID); ?>">
					<img data-src="<?php echo get_the_post_thumbnail_url($horoscopo->ID,'medium');?>" class="lazy-img ">
					<p><?php echo strtolower($horoscopo->post_title);?></p>
				</a>
			
		<?php endforeach;?>-->
		</div>
	</div>
</div>
<?php get_footer(); ?>