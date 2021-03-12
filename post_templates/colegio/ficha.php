<?php global $post, $listado_post;

	$new_template = get_post_meta( $post->ID,"escuela_new_template", true );

	if(!$listado_post){
		$current_post = $post;
		if($post->post_parent > 0){
			$current_post = get_post($post->post_parent);
		}
	}else{
		$current_post = $listado_post;
	}

	$review = get_post_meta($current_post->ID, 'escuela_ficha_calificacion', true);	

?>
<div class="col-12 col-sm-6 col-md-4 col-lg-4 text-center">
    <div class="ficha shadow rounded-lg border">
        <?php if($listado_post):?><a class="tdn" href="<?php echo get_permalink($current_post->ID);?>"><?php endif;?>
            <div class="listado-A-logo">
                <img data-src="<?php echo get_the_post_thumbnail_url($current_post->ID);?>" class="lazy-img">
            </div> 
            <?php if($listado_post):?>
        </a><?php endif;?>
        <?php if($listado_post):?><a class="tdn" href="<?php echo get_permalink($current_post->ID);?>"><?php endif;?>
            <div class="row">
                <div class="col-12">
                    <table class="w-100 text-left">
                        <tbody>
                            <tr>
                                <td colspan="3" class="text-center stars" valign="bottom">
                                        <span class="fichaTit">
                                           <?php echo get_post_meta( $current_post->ID, 'escuela_ficha_pub_priv', true );   ?> / </span>

                                        <?php 
                                    switch ($review) {
                                        case 1:?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_on.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_off.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_off.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_off.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_off.svg"
                                            class="yesNo" />
                                    <?php break;
                                    case 2:?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_on.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_on.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_off.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_off.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_off.svg"
                                            class="yesNo" />
                                    <?php break;
                                    case 3:?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_on.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_on.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_on.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_off.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_off.svg"
                                            class="yesNo" />
                                    <?php break;
                                    case 4:?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_on.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_on.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_on.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_on.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_off.svg"
                                            class="yesNo" />
                                    <?php break;
                                    default:?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_on.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_on.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_on.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_on.svg"
                                            class="yesNo" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/star_on.svg"
                                            class="yesNo" />
                                    <?php break;
                                    }?>

                                </td>
                            </tr>

                            <tr>
                                <td colspan="3" class="text-center xl30 BGamarillo blanco">
                                   <b><?php 
                                        if($listado_post):
                                            echo $listado_post->post_title;
                                        else:
                                            echo $current_post->post_title;
                                        endif;
                                    ?></b>
                                </td>
                            </tr>
                             <?php if($listado_post!=true):?>
                            <tr>
                                <td class="text-center td33 brdr" valign="top">
                                    <span class="fichaTit">Costo</span>
                                    <br><b
                                        class="xl25 costo"><?php echo get_post_meta( $current_post->ID, 'escuela_ficha_costo', true );	?></b>
                                </td>
                                <td class="text-center td33 brdr" valign="top">
                                    <span class="fichaTit">Becas/Ayudas</span>
                                    <br>
                                    <?php if(get_post_meta( $current_post->ID, 'escuela_ficha_becas', true ) === "Si"):?>
                                    <img data-src="<?php bloginfo('template_url'); ?>/images/si.svg"
                                        class="yesNo lazy-img" />
                                    <?php else: ?>
                                    <img data-src="<?php bloginfo('template_url'); ?>/images/no.svg"
                                        class="yesNo lazy-img" />
                                    <?php endif;?>
                                </td>
                                <td class="text-center td33" valign="top">
                                    <span class="fichaTit">Bilingue</span>
                                    <br>
                                    <?php if(get_post_meta( $current_post->ID, 'escuela_ficha_bilingue', true ) === "Si"):?>
                                    <img data-src="<?php bloginfo('template_url'); ?>/images/si.svg"
                                        class="yesNo lazy-img" />
                                    <?php else: ?>
                                    <img data-src="<?php bloginfo('template_url'); ?>/images/no.svg"
                                        class="yesNo lazy-img" />
                                    <?php endif;?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-left fichaBG" valign="top">
                                    <b><span class="fichaTit">Idiomas:</span>
                                        <?php echo str_replace(";",", ",get_post_meta( $current_post->ID, 'escuela_ficha_idiomas', true ));	?></b>
                                </td>
                            </tr><?php endif;?>
                        </tbody>
                    </table>

                    <table class="w-100 text-left">
                        <tbody>

                            <!--<tr class="BGverde">
									<td colspan="2" class="text-center" valign="middle">
										<p class="lhn marPad0 blanco">Puesto <b class="xl35 blanco"><?php echo get_post_meta( $current_post->ID, 'escuela_ficha_ranking_puesto', true );	?></b>
                            <br/> Calificado por: <b><a class="blanco" href="<?php echo get_post_meta( $current_post->ID, 'escuela_ficha_ranking_enlace', true );	?>" target="_blank" rel="nofollow"><?php echo get_post_meta( $current_post->ID, 'escuela_ficha_ranking_nombre', true );	?></a></b></p>
                            
                            </td>
								</tr>-->
                            <tr class="verdeC text-left">
                                <td colspan="2" class="td33" valign="top">
                                    <b class="fichaTit">Nivel Educativo:</b><br/>
                                    <?php echo str_replace(";",", ", get_post_meta( $current_post->ID, 'escuela_ficha_nivel', true ));	?>
                                </td>
                            </tr>
                            <tr class="azul text-left fichaBG">
                                <td colspan="2" class="td33" valign="top">
                                    <b class="fichaTit">Proyecto educativo:</b><br/>
                                
                                    <?php echo get_post_meta( $current_post->ID, 'escuela_ficha_metodo', true );	?>
                                </td>
                            </tr>
                            <?php if($listado_post!=true):?>
                            <tr class="text-left">
                                <td class="td33" valign="top">
                                    <b class="fichaTit">Turnos:</b>
                                </td>
                                <td valign="top">
                                    <?php echo str_replace(";",", ", get_post_meta( $current_post->ID, 'escuela_ficha_horarios', true ));	?>
                                </td>
                            </tr>
                            <tr>
                                <td class="fichaBG">
                                    <b class="fichaTit">Horario</b>
                                </td>
                                <td class="fichaBG">

                                    <?php 
										if($new_template=="Si"):
											echo get_post_meta( $current_post->ID, 'escuela_ficha_horario', true );
										else:
											echo get_post_meta( $current_post->ID, 'escuela_datos_horario_extendido', true );
										endif;	
										?>
                                </td>
                            </tr>
                             
                            <?php endif; ?>
                            <?php if($new_template=='Si'): ?>
                            <tr>
                                <td class="text-center" colspan="2">
                                    <button type="button" class="btn btn-pideinfo"
                                        onclick="overlay()">PIDE INFORMACIÓN</button>
                                </td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php if($listado_post):?>
        </a><?php endif;?>
    </div>
</div>