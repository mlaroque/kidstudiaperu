<?php /* Template Name: Portada */ ?>

<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-12 txtBig text-center">
			<h2>En <b><span class="verde">K</span><span class="amarillo">I</span><span class="azul">D</span><span class="rojo">S</span></b><span class="gris">tudia</span> encuentra la mejor escuela para tu hijo.</h2>

			<p class="text-justify">Todas las escuelas de México con la información que necesitas: los niveles educativos, colegiaturas, métodos de enseñanza, actividades extraescolares, inscripciones y becas. Podrás comparar todos los niveles desde preescolar, primaria, secundaria y preparatoria.</p>
			<p class="text-center"><b class="azul">¡Aplica o pide informes de las escuelas que te interesen todo desde aquí!</b></p>
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
				'post_type' => 'escuela',
				'posts_per_page' => -1,
				'post_parent' => 0
			);

		$escuelas = get_posts($args);

		foreach($escuelas as $escuela):?>

			<div class="col-12 col-sm-4 col-md-2 col-lg-2 text-center">
			  <div class="listado-B shadow border rounded-lg">
			    <div class="row">
			      <div class="col-12">
			        <div class="listado-B-logo">
			          <img data-src="<?php echo get_the_post_thumbnail_url($escuela->ID,'medium');?>" class="lazy-img" alt="logo <?php echo ($escuela->post_title);?>">
			        </div>
			        <div class="listado-B-name">
				        <p><?php echo ($escuela->post_title);?></p>
				    </div>
			      </div>
			    </div>
			    <div class="row">
			    	<div class="col-12">        
			    		<a class="btn btn-block btn-amarillo btn-sm" href="<?php echo get_permalink($escuela->ID); ?>">Más Info</a>
			    	</div>
			    </div>
			  </div>
			</div>
 
		<?php endforeach;?>
	</div>
</div>

<div class="colearfix"></div>

<div class="container-fluid marPad0">
	<div class="row">
		<div class="col-12 marPad0 books">
			
		</div>
	</div>
</div>
<?php get_footer(); ?>