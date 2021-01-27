<?php global $post; ?>
<div class="container-fluid shadow scpBox">
	<div class="container">
		<div class="row">
			 <div class="col-12 col-sm-6 col-md-6 col-lg-6 quickinfoH">
				<table>
					<tr class="brdb">
						<td class="scp"><img data-src="https://kidstudia.pe/wp-content/themes/LCtheme2020/images/scp-students.svg" class="lazy-img"/></td>
						<td colspan="2"><p>Alumnos por Salón: <b class="azul"><?php echo get_post_meta( $post->ID, 'escuela_datos_alumnos', true );	?></b></p></td>
					</tr>
				</table>
			</div>
			
			<div class="col-12 col-sm-6 col-md-6 col-lg-6 quickinfoH">
				<table>
					<tr>
						<td class="scp"><img data-src="https://kidstudia.pe/wp-content/themes/LCtheme2020/images/scp-planteles.svg" class="lazy-img"/></td>
						<td><p>Número de Planteles: <b class="azul"><?php echo get_post_meta( $post->ID, 'escuela_datos_no_planteles', true ); ?></b></p></td>
					</tr>
				</table>
			</div>

			<div class="col-12 col-sm-6 col-md-6 col-lg-6 quickinfoH">
				<table>
					<tr>
						<td class="scp"><img data-src="https://kidstudia.pe/wp-content/themes/LCtheme2020/images/scp-extendido.svg" class="lazy-img"/></td>
						<td colspan="2"><p>Horario Extendido: <b class="azul"><?php echo get_post_meta( $post->ID, 'escuela_datos_horario_extendido', true ); ?></b></p></td>
					</tr>
				</table>
			</div>
			 <div class="col-12 col-sm-6 col-md-6 col-lg-6 quickinfoH">
				<table>
					<tr>
						<td class="scp"><img data-src="https://kidstudia.pe/wp-content/themes/LCtheme2020/images/scp-discapacidad.svg" class="lazy-img"/></td>
						<td><p>Educación Inclusiva:</p></td>
						<td class="scpYesNo">
							<?php if(get_post_meta( $post->ID, 'escuela_datos_alumnos_especiales', true ) === "Si"):?>
								<img data-src="<?php bloginfo('template_url'); ?>/images/si.svg" class="lazy-img"/>
							<?php else: ?>
								<img data-src="<?php bloginfo('template_url'); ?>/images/no.svg" class="lazy-img"/>
							<?php endif;?>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-12 col-sm-6 col-md-6 col-lg-6 quickinfoH">
				<table>
					<tr>
						<td class="scp"><img data-src="https://kidstudia.com/wp-content/themes/LCtheme2020/images/scp-religion.svg" class="lazy-img"/></td>
						<td><p>Religiosa  de orden: <b class="azul"><?php echo get_post_meta( $post->ID, 'escuela_datos_religiosa_orden', true ); ?></b></p></td>
						<td class="scpYesNo">
							<?php if(get_post_meta( $post->ID, 'escuela_datos_religiosa', true ) === "Si"):?>
								<img data-src="<?php bloginfo('template_url'); ?>/images/si.svg" class="lazy-img"/>
							<?php else: ?>
								<img data-src="<?php bloginfo('template_url'); ?>/images/no.svg" class="lazy-img"/>
							<?php endif;?>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-12 col-sm-6 col-md-6 col-lg-6 quickinfoH">
				<table>
					<tr>
						<td class="scp"><img data-src="https://kidstudia.pe/wp-content/themes/LCtheme2020/images/scp-bus.svg" class="lazy-img"/></td>
						<td><p>Transporte Escolar:</p></td>
						<td class="scpYesNo">
							<?php if(get_post_meta( $post->ID, 'escuela_datos_transporte_escolar', true ) === "Si"):?>
								<img data-src="<?php bloginfo('template_url'); ?>/images/si.svg" class="lazy-img"/>
							<?php else: ?>
								<img data-src="<?php bloginfo('template_url'); ?>/images/no.svg" class="lazy-img"/>
							<?php endif;?>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-12 col-sm-6 col-md-6 col-lg-6 quickinfoH">
				<table>
					<tr>
						<td class="scp"><img data-src="https://kidstudia.pe/wp-content/themes/LCtheme2020/images/scp-cafeteria.svg" class="lazy-img"/></td>
						<td><p>Cafetería o Alimentos:</p></td>
						<td class="scpYesNo">
							<?php if(get_post_meta( $post->ID, 'escuela_datos_cafeteria', true ) === "Si"):?>
								<img data-src="<?php bloginfo('template_url'); ?>/images/si.svg" class="lazy-img"/>
							<?php else: ?>
								<img data-src="<?php bloginfo('template_url'); ?>/images/no.svg" class="lazy-img"/>
							<?php endif;?>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-12 col-sm-6 col-md-6 col-lg-6 quickinfoH">
				<table>
					<tr>
						<td class="scp"><img data-src="https://kidstudia.pe/wp-content/themes/LCtheme2020/images/scp-cultural.svg" class="lazy-img"/></td>
						<td><p>Talleres Culturales:</p></td>
						<td class="scpYesNo">
							<?php if(get_post_meta( $post->ID, 'escuela_datos_talleres', true ) === "Si"):?>
								<img data-src="<?php bloginfo('template_url'); ?>/images/si.svg" class="lazy-img"/>
							<?php else: ?>
								<img data-src="<?php bloginfo('template_url'); ?>/images/no.svg" class="lazy-img"/>
							<?php endif;?>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-12 col-sm-6 col-md-6 col-lg-6 quickinfoH">
				<table>
					<tr>
						<td class="scp"><img data-src="https://kidstudia.pe/wp-content/themes/LCtheme2020/images/scp-sport.svg" class="lazy-img"/></td>
						<td><p>Instalaciones Deportivas:</p></td>
						<td class="scpYesNo">
							<?php if(get_post_meta( $post->ID, 'escuela_datos_instalaciones', true ) === "Si"):?>
								<img data-src="<?php bloginfo('template_url'); ?>/images/si.svg" class="lazy-img"/>
							<?php else: ?>
								<img data-src="<?php bloginfo('template_url'); ?>/images/no.svg" class="lazy-img"/>
							<?php endif;?>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-12 col-sm-6 col-md-6 col-lg-6 quickinfoH">
				<table>
					<tr>
						<td class="scp"><img data-src="https://kidstudia.pe/wp-content/themes/LCtheme2020/images/scp-tecnologia.svg" class="lazy-img"/></td>
						<td><p>Tecnología: <b class="azul"><?php echo get_post_meta( $post->ID, 'escuela_datos_seguridad', true ); ?></b></p></td>
					</tr>
				</table>
			</div>

			<div class="col-12 col-sm-6 col-md-6 col-lg-6 quickinfoH">
				<table>
					<tr>
						<td class="scp"><img data-src="https://kidstudia.pe/wp-content/themes/LCtheme2020/images/scp-departamentos.svg" class="lazy-img"/></td>
						<td><p>Departamentos: <b class="azul"><?php echo get_post_meta( $post->ID, 'escuela_datos_departamentos', true ); ?></b></p></td>
					</tr>
				</table>
			</div>

			<div class="col-12 col-sm-6 col-md-6 col-lg-6 quickinfoH">
				<table>
					<tr>
						<td class="scp"><img data-src="https://kidstudia.pe/wp-content/themes/LCtheme2020/images/scp-ciudad.svg" class="lazy-img"/></td>
						<td><p>Ciudad: <b class="azul"><?php echo get_post_meta( $post->ID, 'escuela_datos_ciudad', true ); ?></b></p></td>
					</tr>
				</table>
			</div>

		</div>
	</div>
</div>