<?php
global $post;
?>

<div class="container" style="margin-top: 20px">
	<div class="row ficha_signo-A">
		<div class="col-md-3 text-center">
			<div class="shadow">
			<div class="signoIco">
				<img src="<?php echo get_the_post_thumbnail_url();?>">
			</div>
			<h1 class="price mt-0 mb-1 rosa-o"><?php echo $post->post_title; ?></h1>
			<p><b><i>23 Julio</i></b> / <b><i>22 Agosto</i></b></p>
			<p>Es signo de:<b> <?php echo get_post_meta( $post->ID, 'ficha_elemento', true );	?></b></p>
			<p>Número de la suerte:<b> <?php echo get_post_meta( $post->ID, 'ficha_num_suerte', true );	?></b></p>
			<p>Color:<b> <?php echo get_post_meta( $post->ID, 'ficha_color', true );	?></b></p>  
			<p>Compatible en el Amor:<br/> <b><?php echo get_post_meta( $post->ID, 'signo_comp_amor_con', true );	?></b></p>
			<div class="ficha_signo-A-simbol brdTop">
			<table>
				<tr>
					<td valign="middle">
						<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/aire.svg">
						<small>aire</small>
					</td>
					<td valign="middle">
						<div class="signoColors BG<?php echo get_post_meta( $post->ID, 'ficha_color', true );	?>"></div>
						<small><?php echo get_post_meta( $post->ID, 'ficha_color', true );	?></small>
					</td>
					<td valign="middle">
						<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg">
						<small>pluto</small>
					</td>
					
				</tr>
			</table>
			</div>
		</div>
		</div>	 
		<div class="col-md-6">
			<div class="indice">
				<p><b>Indíce</b></p>
				<ol>
					<li class="brdBtm">
						<a href="#">Características del Signo Sagittarius</a>
					</li>
					<li class="brdBtm">
						<a href="#">¿Cómo es Sagittarius como signo?</a>
					</li>
					<li class="brdBtm">
						<a href="#">Lo Mejor y lo Peor de Sagittarius</a>
					</li>
					<li class="brdBtm">
						<a href="#">Sagittarius con qué signo es compatible en el Amor?</a>
					</li>
					<li class="brdBtm">
						<a href="#">Sagittarius compatible con qué signo en Trabajo?</a>
					</li>
					<li class="brdBtm">
						<a href="#">Sagittarius con qué signo es compatible en Amistad?</a>
					</li>
					<li class="brdBtm">
						<a href="#">¿Cómo es el Sagittarius mujer?</a>
					</li>
					<li class="brdBtm">
						<a href="#">Conquistar a una mujer Sagittarius: </a>
					</li>
					<li class="brdBtm">
						<a href="#">¿Cómo es el Sagittarius hombre?</a>
					</li>
					<li class="brdBtm">
						<a href="#">Los hijos y niños Sagittarius:</a>
					</li>
					<li class="brdBtm">
						<a href="#">Las Estrellas te dicen Sagittarius:</a>
					</li>
				</ol>
			</div>
		</div>	 	
		<div class="col-md-3 visible-md">
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
			<p class="SignIntro"><i>El signo Virgo es signo de fuego. Es “característica 1” y “2” (sinónimos a los usados en los metadatos), una excelente persona en el ámbito laboral pero difícil de comprender en su espacio personal. Las fechas de Virgo son de X  a X.  ¿Quieres conocer todas las características de este signo para mujer y hombre? ¿Saber cuáles son las compatibilidades en el amor de signo? En esta guía podrás encontrar todos los detalles.</i></p>
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
				<h2 class="text-center">Características del Signo <?php echo $post->post_title; ?></h2>
			</div>
			<div class="col-12 col-md-2">
				<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg">
			</div>
			<div class="col-12 col-md-6 SignCaract mt20">
				<p><b>Polaridad:</b> <?php echo get_post_meta( $post->ID, 'signo_carac_polaridad', true );	?></b></p>
				<p><b>Modalidad:</b> <?php echo get_post_meta( $post->ID, 'signo_carac_modalidad', true );	?></b></p>
				<p><b>Casa Regente:</b> <?php echo get_post_meta( $post->ID, 'signo_carac_casa', true );	?></b></p>
				<p><b>Parte del cuerpo:</b> <?php echo get_post_meta( $post->ID, 'signo_carac_cuerpo', true );	?></b></p>
				<p><b>Planeta Regente:</b> <?php echo get_post_meta( $post->ID, 'ficha_color', true );	?></b></p>
			</div>
			<div class="col-12 col-md-4">
				<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/c-aries.svg">
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
			<h2 class="TXTgardient">¿Cómo es <?php echo $post->post_title; ?> como signo?</h2>
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
			<h2>Lo Mejor y lo Peor de <?php echo $post->post_title; ?></h2>
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



<div class="container signo">
	<div class="row">
		<div class="col-12 text-center">
			<h2 class="amorD"><?php echo $post->post_title; ?> con qué signo es compatible en el Amor?</h2>
		</div>

		<div class="clearfix"></div>

		<div class="col-12 col-md-4">
			<img src="<?php bloginfo('template_url'); ?>/images/i-en-amor.jpg">
		</div>
		<div class="col-12 col-md-8">
			<div class="row">
				<div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center">
					<div class="shadow compatiblidad">
					<p><b>En el amor <span class="amor">es compatible</span> con:</b></p>
					<table>
						<tr>
							<td valign="middle"><img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg"><small>SAGITTARIUS</small></td>
							<td valign="middle"><img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg"><small>AQUARIUS</small></td>
							<td valign="middle"><img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg"><small>PLUTO</small></td>
						</tr>
					</table>
					</div>
				</div>


				<div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center">
					<div class="shadow compatiblidad">
					<p><b>En el amor <span class="amorD">no es compatible</span> con:</b></p>
					<table>
						<tr>
							<td valign="middle"><img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg"><small>PLUTO</small></td>
							<td valign="middle"><img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg"><small>PLUTO</small></td>
							<td valign="middle"><img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg"><small>PLUTO</small></td>
						</tr>
					</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row my-50">
			<div class="clearfix"></div>
			<div class="col-12">
			<!--<p><b>En el amor es compatible con:</b> Aries, Taurus, Virgo.</p>
			<p><b>En el amor no es compatible con:</b> Gemini, Aquarius, Sagittarius.</p>-->
			<p><b class="amor">¿Cómo es <?php echo $post->post_title; ?> en el amor?</b> <?php echo get_post_meta( $post->ID, 'signo_comp_amor_comoes', true );	?></p>
			<p><b class="amor">Para tener un buen amor con <?php echo $post->post_title; ?>:</b> <?php echo get_post_meta( $post->ID, 'signo_comp_amor_tener', true );	?></p>
		</div>
		</div>
	</div>
</div>
 
<div class="container my-100">
	<div class="row">
	</div>
</div>





<div class="container signo">
	<div class="row d-flex flex-row-reverse">
		<div class="col-12 text-center">
			<h2 class="trabajoD"><?php echo $post->post_title; ?> compatible con qué signo en Trabajo?</h2>
		</div>
		<div class="col-12 col-md-4">
			<img src="<?php bloginfo('template_url'); ?>/images/i-trabajo.jpg">
		</div>
		<div class="col-12 col-md-8">
			<div class="row">
				<div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center">
					<div class="shadow compatiblidad">
					<p><b>En trabajo y negocios <span class="trabajo">es compatible</span> con:</b></p>
					<table>
						<tr>
							<td valign="middle"><img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg"><small>SAGITTARIUS</small></td>
							<td valign="middle"><img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg"><small>AQUARIUS</small></td>
							<td valign="middle"><img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg"><small>PLUTO</small></td>
						</tr>
					</table>
					</div>
				</div>


				<div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center">
					<div class="shadow compatiblidad">
					<p><b>En trabajo y negocios <span class="trabajoD">no es compatible</span> con:</b></p>
					<table>
						<tr>
							<td valign="middle"><img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg"><small>PLUTO</small></td>
							<td valign="middle"><img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg"><small>PLUTO</small></td>
							<td valign="middle"><img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg"><small>PLUTO</small></td>
						</tr>
					</table>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>
			<!--<p><b>En trabajo y negocios es compatible con:</b> Piscis, Scorpio; Libra.</p>
			<p><b>En trabajo y negocios no es compatible con:</b> Cancer, Saggitarius, Capricorn.</p>-->
			<p><b class="trabajo">¿Cómo es <?php echo $post->post_title; ?> en los negocios?</b> <?php echo get_post_meta( $post->ID, 'signo_comp_trabajo_comoes', true );	?></p>
			<p><b class="trabajo">Para tener buenos negocios con <?php echo $post->post_title; ?>:</b> <?php echo get_post_meta( $post->ID, 'signo_comp_trabajo_tener', true );	?></p>

		</div>
	</div>
</div>
 
<div class="container my-100">
	<div class="row">
	</div>
</div>



<div class="container signo">
	<div class="row">
		<div class="col-12 text-center">
			<h2 class="amistadD">¿Sagittarius con qué signo es compatible en Amistad?</h2>
		</div>
		<div class="col-12 col-md-4">
			<img src="<?php bloginfo('template_url'); ?>/images/i-amistad.jpg">
		</div>
		<div class="col-12 col-md-8">
			<div class="row">
				<div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center">
					<div class="shadow compatiblidad">
					<p><b>En tel amistad <span class="amistad">es compatible</span> con:</b></p>
					<table>
						<tr>
							<td valign="middle"><img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg"><small>SAGITTARIUS</small></td>
							<td valign="middle"><img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg"><small>AQUARIUS</small></td>
							<td valign="middle"><img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg"><small>PLUTO</small></td>
						</tr>
					</table>
					</div>
				</div>


				<div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center">
					<div class="shadow compatiblidad">
					<p><b>En el amistad <span class="amistadD">no es compatible</span> con:</b></p>
					<table>
						<tr>
							<td valign="middle"><img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg"><small>PLUTO</small></td>
							<td valign="middle"><img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg"><small>PLUTO</small></td>
							<td valign="middle"><img src="https://astrologuias.com/wp-content/themes/LCtheme2020/provisionales/pluton.svg"><small>PLUTO</small></td>
						</tr>
					</table>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>		 
			<!--<p><b>En el amistad es compatible con:</b> Escoger 3 de las 12 casas en menú desplegable.
			<p><b>En el amistad no es compatible con:</b> Escoger 3 de las 12 casas en menú desplegable.-->

			<p><b class="amistad">Tipo de personas con las que se lleva:</b> <?php echo get_post_meta( $post->ID, 'signo_comp_amistad_selleva', true );	?></p>
			<p><b class="amistad" class="amistad">Tipo de gente que no soporta:</b> <?php echo get_post_meta( $post->ID, 'signo_comp_amistad_nosoporta', true );	?></p>
			<p><b class="amistad">¿Cómo es Signo en la amistad?</b> <?php echo get_post_meta( $post->ID, 'signo_comp_amistad_comoes', true );	?></p>
			<p><b class="amistad">Para tener una buena amistad con Signo:</b> <?php echo get_post_meta( $post->ID, 'signo_comp_amistad_tener', true );	?></p>

		</div>
	</div>
</div>
 
<div class="container my-100">
	<div class="row">
	</div>
</div>