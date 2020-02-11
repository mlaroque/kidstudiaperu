<?php /* Template Name: Portada */ ?>

<?php get_header(); ?>


<div class="container">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12">
			<h2>Pellentesque nec iaculis augue. Maecenas et viverra libero.</h2>
<h3>Donec rutrum imperdiet ipsum sit amet tempor.</h3>
<h4>Donec posuere orci ultrices dictum tristique.</h4>
<h5>Nunc nec dolor ac lectus tempus ultrices.</h5>
<h6>Morbi dapibus libero a mi feugiat ultrices.</h6>
Pellentesque velit enim, tristique eu blandit sed, tempus id neque. Vestibulum vestibulum eu velit sed eleifend. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam enim lectus, tempus vel bibendum at, ultrices eget leo. Maecenas auctor, ligula quis hendrerit pretium, ante quam rutrum diam, sed dictum enim nunc ut nulla. Vestibulum elementum eros id lacus vehicula, nec egestas felis porttitor. Duis tristique mi non erat lobortis laoreet. Vivamus condimentum interdum sapien, a ultrices ante dignissim ut. Aliquam ut lacinia ante, posuere malesuada elit. Sed eu felis vitae quam elementum laoreet eget quis nulla.

Aliquam sagittis nibh ac augue semper vehicula. Proin convallis ut ligula sed laoreet. Donec eu vestibulum est, vitae fermentum leo. Sed id diam lacinia, vulputate justo sed, vehicula felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis sollicitudin iaculis. Sed convallis at nisi quis laoreet. Curabitur finibus eros ac tortor cursus vestibulum. Suspendisse nisi diam, porttitor id velit et, finibus rutrum sapien.

&nbsp;

<ul>
<li>Mauris consequat ante nec risus gravida elementum.</li>
<li>Ut a mi in eros cursus pharetra.</li>
<li>Vestibulum non mi id justo sollicitudin suscipit.</li>
<li>Curabitur venenatis metus a accumsan aliquet.</li>
<li>Duis sed metus vel lectus vehicula faucibus sed et felis.</li>
</ul>
		</div>
	</div>
</div>

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

		<?php 
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
			
		<?php endforeach;?>
		</div>
	</div>
</div>
<?php get_footer(); ?>