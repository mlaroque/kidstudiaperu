<?php global $post, $listado_post;

	if(!$listado_post){
		$current_post = $post;
		if($post->post_parent > 0){
			$current_post = get_post($post->post_parent);
		}
	}else{
		$current_post = $listado_post;
	}

	

?>
<div class="col-12 col-sm-6 col-md-4 col-lg-4 text-center">
			<div class="listado-A shadow rounded-lg border">
				<?php if($listado_post):?><a class="tdn" href="<?php echo get_permalink($current_post->ID);?>"><?php endif;?>
				<div class="listado-A-logo">
					<img data-src="<?php echo get_the_post_thumbnail_url($current_post->ID);?>" class="lazy-img">
				</div>
				<!--<div class="stars text-center">
					<p class="marPad0">Puntuación <b class="puntuacion amarillo">3.6</b>/5 - <a class="amarillo" href="#">Opinar</a></p>
				</div>-->
				<?php if($listado_post):?></a><?php endif;?>
				<?php if($listado_post):?><a class="tdn" href="<?php echo get_permalink($current_post->ID);?>"><?php endif;?>
				<div class="row">
					<div class="col-12">
						<table class="w-100 text-left">
							<tbody>
								<tr>
									<td colspan="3" class="text-center xl30 BGamarillo blanco">
										<b><?php echo get_post_meta( $current_post->ID, 'escuela_ficha_pub_priv', true );	?>	</b>
									</td>
								</tr>
								<tr>
									<td class="text-center td33 brdr brdb" valign="top">
										<span class="quickinfo1Tit">Costo</span>
										<br><b class="xl25"><?php echo get_post_meta( $current_post->ID, 'escuela_ficha_costo', true );	?></b>
									</td>
									<td class="text-center td33 brdr brdb" valign="top">
										<span class="quickinfo1Tit">Becas/Ayudas</span>
										<br>
										<?php if(get_post_meta( $current_post->ID, 'escuela_ficha_becas', true ) === "Si"):?>
											<img data-src="<?php bloginfo('template_url'); ?>/images/si.svg" class="yesNo lazy-img"  />
										<?php else: ?>
												<img data-src="<?php bloginfo('template_url'); ?>/images/no.svg" class="yesNo lazy-img" />
										<?php endif;?>
									</td>
									<td class="text-center td33 brdr brdb" valign="top">
										<span class="quickinfo1Tit">Bilingue</span>
										<br>
										<?php if(get_post_meta( $current_post->ID, 'escuela_ficha_bilingue', true ) === "Si"):?>
											<img data-src="<?php bloginfo('template_url'); ?>/images/si.svg" class="yesNo lazy-img" />
										<?php else: ?>
											<img data-src="<?php bloginfo('template_url'); ?>/images/no.svg" class="yesNo lazy-img" />
										<?php endif;?>
									</td>
								</tr>
								<tr>
									<td colspan="3" class="text-center td33" valign="top">
										<b><span class="quickinfo1Tit">Idiomas:</span> 
											<?php echo str_replace(";",", ",get_post_meta( $current_post->ID, 'escuela_ficha_idiomas', true ));	?></b>
									</td>
								</tr>
							</tbody>
						</table>

						<table class="w-100 text-left">
							<tbody>
							<?php if($listado_post!=true):?>
								<tr class="BGverde">
									<td colspan="2" class="text-center" valign="middle">
										<p class="lhn marPad0 blanco">Puesto <b class="xl35 blanco"><?php echo get_post_meta( $current_post->ID, 'escuela_ficha_ranking_puesto', true );	?></b><!--<br/> Calificado por: <b><a class="blanco" href="<?php echo get_post_meta( $current_post->ID, 'escuela_ficha_ranking_enlace', true );	?>" target="_blank" rel="nofollow"><?php echo get_post_meta( $current_post->ID, 'escuela_ficha_ranking_nombre', true );	?></a></b>--></p>
									</td>
								</tr>
							<?php endif; ?>
									<tr class="verdeC text-left <?php if($listado_post):?>ln90px<?php endif;?>">
									<td class="brdb td33" valign="top">
										<b>Nivel Educativo:</b>
									</td>
									<td class="brdb" valign="top">
										<?php echo str_replace(";",", ", get_post_meta( $current_post->ID, 'escuela_ficha_nivel', true ));	?>
									</td>
								</tr>
								<tr class="azul text-left <?php if($listado_post):?>lm60px<?php endif;?>">
									<td class="brdb td33" valign="top">
										<b>Proyecto educativo:</b>
									</td>
									<td class="brdb" valign="top">
										<?php echo get_post_meta( $current_post->ID, 'escuela_ficha_metodo', true );	?>
									</td>
								</tr>
								<tr class="rojo text-left">
									<td class="brdb td33" valign="top">
										<b>Turnos:</b>
									</td>
									<td class="brdb" valign="top">
										<?php echo str_replace(";",", ", get_post_meta( $current_post->ID, 'escuela_ficha_horarios', true ));	?> 
									</td>
								</tr>
								<?php if($listado_post!=true):?>
								<tr>
									<td class="amarilloC">
										<b>Horario</b>
									</td>
									<td class="amarilloC">
										<?php echo get_post_meta( $current_post->ID, 'escuela_datos_horario_extendido', true );	?>				
									</td>
								</tr>
								<?php endif; ?>
							</tbody>
						</table>
					</div>
				</div>
				<?php if($listado_post):?></a><?php endif;?>
			</div>
		</div>