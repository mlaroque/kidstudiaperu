<div class="container">
	<div class="row ficha_signo-A">
		<div class="col-12 col-sm-3 col-md-3 col-lg-3 text-center">
			<div class="shadow">
			<div class="signoIco">
				<img src="<?php echo get_the_post_thumbnail_url();?>">
			</div>
			<h1 class="price mt-0 mb-1 rosa-o"><?php echo $post->post_title; ?></h1>
			<p><b><i><?php echo strftime("%e %B",strtotime(get_post_meta( $post->ID, 'ficha_signo_inicio', true )));	?></i></b> / <b><i><?php echo strftime("%e %B",strtotime(get_post_meta( $post->ID, 'ficha_signo_fin', true )));	?></i></b></p>
				<div class="ficha_signo-A-stars brdTop brdBtm">
				<table width="100%">
					<tr>
					<td class="text-left" valign="middle">
							<b>Amor:</b>
						</td>
						<td>
							<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/images/starSi.svg" width="10" />
							<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/images/starSi.svg" width="10" />
							<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/images/starSi.svg" width="10" />
							<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/images/starSi.svg" width="10" />
							<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/images/starNo.svg" width="10" />
						</td>
					</tr>
					<tr>
					<td class="text-left" valign="middle">
							<b>Dinero:</b>
						</td>
						<td>
							<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/images/starSi.svg" width="10" />
							<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/images/starSi.svg" width="10" />
							<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/images/starSi.svg" width="10" />
							<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/images/starSi.svg" width="10" />
							<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/images/starNo.svg" width="10" />
						</td>
					</tr>
					<tr>
					<td class="text-left" valign="middle">
						<b>Salud:</b>
					</td>
						<td>
							<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/images/starSi.svg" width="10" />
							<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/images/starSi.svg" width="10" />
							<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/images/starSi.svg" width="10" />
							<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/images/starSi.svg" width="10" />
							<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/images/starNo.svg" width="10" />
						</td>
					</tr>
				</table>
				</div>

				<div class="ficha_signo-A-txt brdBtm">
					<p>Números de la suerte: <b>99, 23</b></p>
					<p>Día de la semana: <b>Miercoles</b></p>
				</div>


 				<div class="ficha_signo-A-lunas">
				<table>
					<tr>
						<td valign="middle">
							<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/images/luna-llena.svg">
						</td>
						<td class="text-left"  valign="middle"><span class="upper"><b>Luna Llena</b> cae el</span><br>
							<b><?php echo get_post_meta( $post->ID, 'horoscopo_ficha_luna_llena', true );?></small>
						</td>
					</tr>
					<tr>
						<td valign="middle">
							<img src="https://astrologuias.com/wp-content/themes/LCtheme2020/images/luna-nueva.svg">
						</td>
						<td class="text-left"  valign="middle"><span class="upper"><b>Luna Nueva</b> cae el</span><br>
							<b><?php echo get_post_meta( $post->ID, 'horoscopo_ficha_luna_nueva', true );?></small>
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
			<p class="SignIntro"><i><?php echo get_post_meta( $post->ID, 'horoscopo_intro', true );?></i></p>
		</div>
	</div>
</div>


<div class="container-fluid BGwater shadow-lg">
	<div class="container my-50">
		<div class="row">
			<div class="col-12">
				<p>FRASE MOTIVACIONAL</p>
			</div>
		</div>
	</div>
</div>
 


<div class="container horoscopo my-40">
	<div class="row">
		<div class="col-12">
			<?php the_content(); ?>	
		</div>
	</div>
</div>

<?php 

if($post->post_parent == 145 || $post->ID == 145):

global $wpdb;
$results = $wpdb->get_results ( "SELECT * FROM  LCMN_HOROSCOPOS_HOY" );

foreach($results as $result): ?>

	<ul>
		<li><?php echo "periodo: " . $result->PERIODO;?></li>
		<li><?php echo "amor en pareja: " . $result->AMOR_PAREJA;?></li>
		<li><?php echo "dinero y trabajo: " . $result->DINERO_TRABAJO;?></li>
		<li><?php echo "viaje y amistad: " . $result->VIAJE_AMISTAD;?></li>
		<li><?php echo "salud: " . $result->SALUD;?></li>
		<li><?php echo "reto: " . $result->RETO;?></li>
		<li><?php echo "nivel de amor: " . $result->AMOR_NIV;?></li>
		<li><?php echo "nivel de dinero: " . $result->DINERO_NIV;?></li>
		<li><?php echo "nivel de salud: " . $result->SALUD_NIV;?></li>
	</ul>

<?php endforeach; endif;?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<p><?php echo get_post_meta( 145, 'horoscopos_texto_cierre', true );?></p>
		</div>
	</div>
</div>
 


<?php comments_template("/comments.php");?>
		 