<?php /* Template Name: Portada */ ?>

<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-12 txtBig text-center">
			<h2>Encuentra en <b><span class="verde">K</span><span class="amarillo">I</span><span class="azul">D</span><span class="rojo">S</span></b><span class="gris">tudia</span> Perú el mejor colegio para tu hijo.</h2>

			<p class="text-justify">Toda la información de los mejores colegios del Perú desde cunas hasta secundaria: Pensiones, fechas de admisión, becas, proyectos educativos, instalaciones y mucho más. Conoce cada nivel desde cunas, inicial, primaria y secundaria.</p>
			<p class="text-center"><b class="azul">¡Pide informes de los colegios de tu interés desde aquí!</b></p>
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
</div>

<div class="container HPultimas">
	<div class="row">
		<div class="col-12 text-center">
			<h2>Ultimas escuelas añadidas</h2>
		</div>
	</div>	
	<div class="row">
 
		<?php 
		$args = array(
				'post_type' => 'colegio',
				'posts_per_page' => 12,
				'post_parent' => 0
			);

		$colegios = get_posts($args);

		foreach($colegios as $colegio):?>

			<div class="col-12 col-sm-4 col-md-2 col-lg-2 text-center">
			  <div class="listado-B shadow border rounded-lg">
			    <div class="row">
			      <div class="col-12">
			        <div class="listado-B-logo">
			          <img data-src="<?php echo get_the_post_thumbnail_url($colegio->ID,'medium');?>" class="lazy-img" alt="logo <?php echo ($colegio->post_title);?>">
			        </div>
			        <div class="listado-B-name">
				        <p><?php echo ($colegio->post_title);?></p>
				    </div>
			      </div>
			    </div>
			    <div class="row">
			    	<div class="col-12">        
			    		<a class="btn btn-block btn-amarillo btn-sm" href="<?php echo get_permalink($colegio->ID); ?>">Más Info</a>
			    	</div>
			    </div>
			  </div>
			</div>
 
		<?php endforeach;?>
	</div>
</div>
<div class="clearfix"></div>

<div class="container-fluid marPad0">
	<div class="row">
		<div class="col-12 marPad0 books">
			
		</div>
	</div>
</div>
<?php get_footer(); ?>