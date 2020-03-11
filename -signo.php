<?php
global $post;
setlocale(LC_ALL, 'es_MX');
$purified_content = apply_filters('the_content',$post->post_content);
?>

<div class="container" style="margin-top: 20px">
	<div class="row ficha_signo-A">
		<div class="col-12 col-sm-3 col-md-3 col-lg-3 text-center">
			<div class="shadow">
			<div class="signoIco">
				<img src="<?php echo get_the_post_thumbnail_url();?>">
			</div>
			<h1 class="price mt-0 mb-1 rosa-o"><?php echo $post->post_title; ?></h1>
			<p><b><i><?php echo strftime("%e %B",strtotime(get_post_meta( $post->ID, 'ficha_signo_inicio', true )));	?></i></b> / <b><i><?php echo strftime("%e %B",strtotime(get_post_meta( $post->ID, 'ficha_signo_fin', true )));	?></i></b></p>
			<p>Es signo de:<b> <?php echo get_post_meta( $post->ID, 'ficha_elemento', true );	?></b></p>
			<p>Número de la suerte:<b> <?php echo get_post_meta( $post->ID, 'ficha_num_suerte', true );	?></b></p>
			<p>Color:<b> <?php echo get_post_meta( $post->ID, 'ficha_color', true );	?></b></p>  
			<p>Compatible en el Amor:<br/> <b><?php echo str_replace(";",", ",get_post_meta( $post->ID, 'signo_comp_amor_con', true ));	?></b></p>
			<div class="ficha_signo-A-simbol brdTop">
			<table>
				<tr>
					<td valign="middle">
						<img src="<?php echo get_template_directory_uri() . '/images/trans.gif';?>" data-src="<?php echo get_image_by_value('e-' . get_post_meta( $post->ID, 'ficha_elemento', true ),'svg');?>" class="lazy-img">
						<small><?php echo get_post_meta( $post->ID, 'ficha_elemento', true );	?></small>
					</td>
					<td valign="middle">
						<div class="signoColors BG<?php echo str_replace(" ","-",get_post_meta( $post->ID, 'ficha_color', true ));	?>"></div>
						<small><?php echo get_post_meta( $post->ID, 'ficha_color', true );	?></small>
					</td>
					<td valign="middle">
						<?php $planetas = explode(",", get_post_meta( $post->ID, 'signo_carac_planeta', true ));?>
						<?php foreach($planetas as $planeta): ?>
							<img src="<?php echo get_template_directory_uri() . '/images/trans.gif';?>" data-src="<?php echo get_image_by_value($planeta,'svg');?>" class="lazy-img">
						<?php endforeach;?>
						
						<small><?php echo get_post_meta( $post->ID, 'signo_carac_planeta', true );	?></small>
					</td>
					
				</tr>
			</table>
			</div>
		</div>
		</div>	 
		<?php $purified_content = preg_replace_callback("/<h2(.*?)>(.*?)(?=<\/h2>)/s",'replace_with_ids', $purified_content);?>
		<div class="col-12 col-sm-7 col-md-7 col-lg-7">
			<div class="indice">
				<p><b>Indíce</b></p>
				<ol>
					<li class="brdBtm"><a href="#caracteristicas">Características del Signo <?php echo $post->post_title; ?></a></li>
					<li class="brdBtm"><a href="#como-es">¿Cómo es <?php echo $post->post_title; ?> como signo?</a></li>
					<li class="brdBtm"><a href="#mejor-peor">Lo Mejor y lo Peor de <?php echo $post->post_title; ?></a></li>
					<li class="brdBtm"><a href="#amor"><?php echo $post->post_title; ?> con qué signo es compatible en el Amor?</a></li>
					<li class="brdBtm"><a href="#trabajo"><?php echo $post->post_title; ?> compatible con qué signo en Trabajo?</a></li>
					<li class="brdBtm"><a href="#amistad">¿Sagittarius con qué signo es compatible en Amistad?</a></li>
					<?php 
						preg_match_all('/<h2(.*?)>(.*?)<\/h2/s', $post->post_content, $matches_global, PREG_PATTERN_ORDER); 
				 		foreach($matches_global[2] as $match):
				 		$id_text = strtolower(urlencode($match));
					?>
					<li class="brdBtm"><a href="#<?php echo $id_text; ?>"><?php echo $match; ?></a></li>
					<?php endforeach; ?>
				</ol>
			</div>
		</div>	 	
		<div class="col-12 col-sm-2 col-md-2 col-lg-2 visible-md">
			<div style="width: 160px; height: 600px; background: #ddd; margin: 0 auto">
				<p>skyscraper en dkp y cuadrado o submenu en movil?</p>
			</div>
		</div>
	</div>
</div>

<div class="clearfix"></div>

<div class="container my-50">
	<div class="row">
		<div class="col-12">
			<p class="SignIntro"><i><?php echo get_the_excerpt();?></i></p>
		</div>
	</div>
</div>

<div class="container my-100">
	<div class="row">
	</div>
</div>

<div class="container-fluid BGwater shadow-lg">
	<div class="container" style="margin: 40px auto;">
		<div class="row">
			<div class="col-12">
				<h2 id="caracteristicas" class="text-center">Características del Signo <?php echo $post->post_title; ?></h2>
			</div>
			<div class="col-12 col-sm-3 col-md-2 col-lg-2">
				<?php foreach($planetas as $planeta): ?>
					<img src="<?php echo get_template_directory_uri() . '/images/trans.gif';?>" data-src="<?php echo get_image_by_value($planeta,'svg');?>" class="lazy-img">
				<?php endforeach;?>
			</div>
			<div class="col-12 col-sm-6 col-md-7 col-lg-7 SignCaract mt20">
				<p><b>Polaridad:</b> <?php echo get_post_meta( $post->ID, 'signo_carac_polaridad', true );	?></b></p>
				<p><b>Modalidad:</b> <?php echo get_post_meta( $post->ID, 'signo_carac_modalidad', true );	?></b></p>
				<p><b>Casa Regente:</b> <?php echo get_post_meta( $post->ID, 'signo_carac_casa', true );	?></b></p>
				<p><b>Parte del cuerpo:</b> <?php echo get_post_meta( $post->ID, 'signo_carac_cuerpo', true );	?></b></p>
				<p><b>Planeta Regente:</b> <?php echo get_post_meta( $post->ID, 'ficha_color', true );	?></b></p>
			</div>
			<div class="col-12 col-sm-3 col-md-3 col-lg-3">
				<img src="<?php echo get_template_directory_uri() . '/images/trans.gif';?>" data-src="<?php echo get_image_by_value('c-'.$post->post_title,'svg');?>" class="lazy-img">
			</div>
		</div>
	</div>	
</div>


<div class="container my-50">
	<div class="row">
		<div class="col-12 text-center">
			<p style="margin-bottom: 0px; font-size: 30px" class="TXTardient">Frase del signo:</p>
			<p style="font-size: 40px; line-height: normal; margin-bottom: 0" class="TXTgardient"><b><i>
				<?php echo get_post_meta( $post->ID, 'signo_carac_frase', true );	?>
			</i></b></p>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-12 col-md-4">
			<h2 id="como-es" class="TXTgardient">¿Cómo es <?php echo $post->post_title; ?> como signo?</h2>
		</div>
		<div class="col-12 col-md-8 brdSxD">
			<p><b>En la naturaleza:</b> <?php echo get_post_meta( $post->ID, 'signo_comoes_naturaleza', true );	?></p>
			<p><b>Lo caracteriza su:</b> <?php echo get_post_meta( $post->ID, 'signo_comoes_caracteriza', true );	?></p>
			<p><b>Le hace feliz:</b> <?php echo get_post_meta( $post->ID, 'signo_comoes_feliz', true );	?></p>
			<p><b>Su Mayor Miedo:</b> <?php echo get_post_meta( $post->ID, 'signo_comoes_miedo', true );	?></p>
			<p><b>Le provoca ansiedad:</b> <?php echo get_post_meta( $post->ID, 'signo_comoes_ansiedad', true ); ?></p>
			<p><b>Lo motiva:</b> <?php echo get_post_meta( $post->ID, 'signo_comoes_motivacion', true ); ?></p>
		</div>
	</div>
</div>


<div class="container-fluid BGviolet shadow-lg">
	<div class="row signoMejorPeor">
		<div class="col-12 text-center">
			<h2 id="mejor-peor">Lo Mejor y lo Peor de <?php echo $post->post_title; ?></h2>
		</div>
		<div class="col-12 col-sm-6 col-md-3 col-lg-3 text-center">
			<p>El mejor para:</p>  
			<p><b><?php echo get_post_meta( $post->ID, 'signo_lomejor_para', true );	?></b></p>
		</div>
		<div class="col-12 col-sm-6 col-md-3 col-lg-3 text-center">
			<p>Puede llegar a ser bueno en:</p>  
			<p><b><?php echo get_post_meta( $post->ID, 'signo_lomejor_puede', true );	?></b></p>
		</div>
		<div class="col-12 col-sm-6 col-md-3 col-lg-3 text-center">
			<p>No es muy bueno para:</p>  <p><b><?php echo get_post_meta( $post->ID, 'signo_lomejor_no', true ); ?></b></p>
		</div>
		<div class="col-12 col-sm-6 col-md-3 col-lg-3 text-center">
			<p>El peor para:</p>  
			<p><b><?php echo get_post_meta( $post->ID, 'signo_comoes_peor', true );	?></b></p>
		</div>
	</div>
</div>

<div class="container my-100">
	<div class="row">
	</div>
</div>

<?php 
	$GLOBALS["comp_title"] = $post->post_title . " con qué signo es compatible en el Amor?";
	$GLOBALS["comp_clase"] = "amor";
	$GLOBALS["comp_img"] = get_template_directory_uri() . "/images/i-en-amor.jpg";
	$GLOBALS["comp_si_values"] = array('En el amor <span class="amor">es compatible</span> con:','signo_comp_amor_con');
	$GLOBALS["comp_no_values"] = array('En el amor <span class="amor">no es compatible</span> con:','signo_comp_amor_no_con');
	$GLOBALS["comp_como_es"] = array('¿Cómo es '.$post->post_title.' en el amor?','signo_comp_amor_comoes');
	$GLOBALS["comp_buen"] = array('Para tener un buen amor con '.$post->post_title.':','signo_comp_amor_tener');
	get_template_part("post_templates/signo/bloque-compatibilidad");
?>

 
<div class="container my-100">
	<div class="row">
	</div>
</div>

<?php 
	$GLOBALS["comp_title"] = $post->post_title . " con qué signo es compatible en el Trabajo?";
	$GLOBALS["comp_clase"] = "trabajo";
	$GLOBALS["comp_img"] = get_template_directory_uri() . "/images/i-en-trabajo.jpg";
	$GLOBALS["comp_si_values"] = array('En trabajo y negocios <span class="trabajo">es compatible</span> con:','signo_comp_trabajo_con');
	$GLOBALS["comp_no_values"] = array('En trabajo y negocios <span class="trabajoD">no es compatible</span> con:','signo_comp_trabajo_no_con');
	$GLOBALS["comp_como_es"] = array('¿Cómo es '.$post->post_title.' en los negocios?','signo_comp_trabajo_comoes');
	$GLOBALS["comp_buen"] = array('Para tener buenos negocios con '.$post->post_title.':','signo_comp_trabajo_tener');
	get_template_part("post_templates/signo/bloque-compatibilidad");
?>

 
<div class="container my-100">
	<div class="row">
	</div>
</div>

<?php 
	$GLOBALS["comp_title"] = $post->post_title . " con qué signo es compatible en Amistad?";
	$GLOBALS["comp_clase"] = "amistad";
	$GLOBALS["comp_img"] = get_template_directory_uri() . "/images/i-amistad.jpg";
	$GLOBALS["comp_si_values"] = array('En el amistad <span class="amistad">es compatible</span> con:','signo_comp_amistad_con');
	$GLOBALS["comp_no_values"] = array('En el amistad <span class="amistadD">no es compatible</span> con:','signo_comp_amistad_no_con');
	$GLOBALS["comp_como_es"] = array('¿Cómo es '.$post->post_title.' en la amistad?','signo_comp_amistad_comoes');
	$GLOBALS["comp_buen"] = array('Para tener una buena amistad con '.$post->post_title.':','signo_comp_amistad_tener');
	$GLOBALS["comp_se_lleva"] = array('Tipo de personas con las que se lleva:','signo_comp_amistad_selleva');
	$GLOBALS["comp_no_soporta"] = array('Tipo de gente que no soporta:','signo_comp_amistad_nosoporta');
	get_template_part("post_templates/signo/bloque-compatibilidad");
?>


<div class="container my-100">
	<div class="row">
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-12">
			<?php
				$purified_content = preg_replace('/<h2/', '<div class="signo-signo"><h2', $purified_content, 1);
				$purified_content = preg_replace('/<\/h2>(.*?)<h2/s', '</h2>$1</div><h2', $purified_content, 1);
				$purified_content = preg_replace('/<h2(.*?)>(.*)[mM]ujer(.*?)<\/h2>/', '<div class="signo-mujer"><h2$1>$2mujer$3</h2><div class="col-12 col-sm-4 col-md-4 col-lg-4 float-left"><img src="'. get_template_directory_uri() . '/images/trans.gif" data-src="'.get_template_directory_uri().'/images/i-mujer.jpg" class="lazy-img" title="¿Cómo es el signo '.$post->post_title.' mujer?" alt="¿Cómo es el signo '.$post->post_title.' mujer?" width="282" height="243"></div>', $purified_content);
				$purified_content = preg_replace('/<h2(.*?)>(.*)[hH]ombre(.*?)<\/h2>/', '</div><div class="signo-hombre"><h2$1>$2hombre$3</h2><div class="col-12 col-sm-4 col-md-4 col-lg-4 float-left"><img src="'. get_template_directory_uri() . '/images/trans.gif" data-src="'.get_template_directory_uri().'/images/i-hombre.jpg" class="lazy-img" title="¿Cómo es el signo '.$post->post_title.' hombre?" alt="¿Cómo es el signo '.$post->post_title.' hombre?" width="282" height="243"></div>', $purified_content);
				$purified_content = preg_replace('/<h2(.*?)>(.*)[hH]ijos(.*?)<\/h2>/', '</div><div class="signo-ninos"><h2$1>$2hijos$3</h2><div class="col-12 col-sm-4 col-md-4 col-lg-4 float-left"><img src="'. get_template_directory_uri() . '/images/trans.gif" data-src="'.get_template_directory_uri().'/images/i-ninos.jpg" class="lazy-img" title="¿Cómo son los hijos y niños '.$post->post_title.'?" alt="¿Cómo son los hijos y niños '.$post->post_title.'?" width="282" height="243"></div>', $purified_content);
				$purified_content = preg_replace('/<h2(.*?)>(.*)[eE]strellas(.*?)<\/h2>/', '</div><h2$1>$2estrellas$3</h2>', $purified_content);

				?>
			<?php echo $purified_content; ?>
		</div>
	</div>
</div>

 
<div class="container my-100">
	<div class="row">
	</div>
</div>