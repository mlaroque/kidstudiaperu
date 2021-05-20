<?php global $post; global $purified_content; 
	$new_template = get_post_meta( $post->ID,"escuela_new_template", true );
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <?php get_template_part("post_templates/widgets/breadcrumbs"); ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1><?php echo $post->post_title; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="lc_ads">
            <div id="ads_abajo_h1" class="lazy-ads "></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php get_template_part("post_templates/colegio/ficha");?>

        <div class="col-12 col-sm-6 col-md-8 col-lg-8">
            <?php get_template_part("post_templates/widgets/indice");?>
        </div>
    </div>
</div>
<?php get_template_part("post_templates/colegio/datos_adicionales");
	// Si es nuevo template banner responsive sino ln-Article
 if($new_template=="Si"){ $ads_quick_info = "NT_quick"; }else{ $ads_quick_info = "quick"; } ?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="lc_ads">
				<div id="ads_abajo_<?php echo $ads_quick_info; ?>" class="lazy-ads "></div>
			</div>
		</div>
	</div>
</div>
<div class="container">
    <div class="row my-40">
        <div class="col-12">
            <?php 
			ob_start();
			get_template_part("post_templates/nivel/otros_niveles");
			$niveles = ob_get_clean();
			
			$purified_content = preg_replace('/<h2(.*)>(.*?)iveles educativos(.*)<\/h2>/','<h2$1>$2iveles educativos$3</h2>'.$niveles,$purified_content);

			if($post->post_parent == 0 ){
				ob_start();
				get_template_part('post_templates/colegio/costos-por-niveles');
				$h2_costos = ob_get_clean();
				if($new_template=='Si'):
				    $purified_content = preg_replace('/<h2(.*)>(.*?)Costos y Pensiones(.*)<\/h2>/', '$0'.$h2_costos, $purified_content);
                else:
					$purified_content = preg_replace('/<h2(.*)>(.*?)Cómo se enseña en(.*)<\/h2>/', $h2_costos.'$0', $purified_content);
				endif;
			
			}

			if($new_template == 'Si'){//Nuevo template

                //Accordion X Nivel
                preg_match('/(<h2.*>Cunas.*<\/h2>(?sU).*)(<h2.*)/', $purified_content, $matches);
                $h2_content = $matches[1];
                $purified_content = preg_replace('/(<h2.*>Cunas.*<\/h2>(?sU).*)(<h2.*)/', do_shortcode('[accordion h2="si" info_txt="cunas"]'. $h2_content .'[/accordion]').'$2' , $purified_content);

                preg_match('/(<h2.*>Inicial.*<\/h2>(?sU).*)(<h2.*)/', $purified_content, $matches);
                $h2_content = $matches[1];
                $purified_content = preg_replace('/(<h2.*>Inicial.*<\/h2>(?sU).*)(<h2.*)/', do_shortcode('[accordion h2="si" info_txt="inicial"]'. $h2_content .'[/accordion]').'$2' , $purified_content);

                preg_match('/(<h2.*>Primaria.*<\/h2>(?sU).*)(<h2.*)/', $purified_content, $matches);
                $h2_content = $matches[1];
                $purified_content = preg_replace('/(<h2.*>Primaria.*<\/h2>(?sU).*)(<h2.*)/', do_shortcode('[accordion h2="si" info_txt="primaria"]'. $h2_content .'[/accordion]').'$2' , $purified_content);
                
                preg_match('/(<h2.*>Secundaria.*<\/h2>(?sU).*)(<h2.*)/', $purified_content, $matches);
                $h2_content = $matches[1];
                $purified_content = preg_replace('/(<h2.*>Secundaria.*<\/h2>(?sU).*)(<h2.*)/', do_shortcode('[accordion h2="si" info_txt="secundaria"]'. $h2_content .'[/accordion]').'$2' , $purified_content);


                //Me sirve para table X nivel 
                function h3_costos_x_nivel($m)
                {
                    
					if(strpos($m[0],"unas") !== false){
                        $colegio_nivel = "cunas";
                    }else if(strpos($m[0],"nicial") !== false){
                        $colegio_nivel = "inicial";
                    }else if(strpos($m[0],"rimaria") !== false){
                        $colegio_nivel = "primaria";
                    }else if(strpos($m[0],"ecundaria") !== false){
                        $colegio_nivel = "secundaria";
                    }

                    ob_start();
                    $GLOBALS['colegio_nivel'] = $colegio_nivel;
                    get_template_part('post_templates/nivel/costos');
                    $ad .= ob_get_clean();
                    return $m[0] . $ad;// ;
                }
                $purified_content = preg_replace_callback('/<h3(.*)>(.*?)y Pensiones de(.*)<\/h3>/','h3_costos_x_nivel', $purified_content);   
            }


			function insert_ads($m) {
				static $matchcount = 0;

				$matchcount++;

					if($matchcount == 3 and $new_template!='Si'){
						ob_start();?>
						<div class="lc_ads">
							<div id="ads-third-h2" class="lazy-ads "></div>
						</div>
						<?php $ad .= ob_get_clean();
						return $m[0] . $ad;// ;
					}else if($matchcount == 6 and $new_template!='Si'){
						ob_start();?>
						<div class="lc_ads">
							<div id="ads-sixth-h2" class="lazy-ads "></div>
						</div>
						<?php $ad .= ob_get_clean();
						return $m[0] . $ad;// ;
					}else if($matchcount == 4 and $new_template =='Si'){
						echo $matchcount;
						ob_start();?>
						<div class="lc_ads">
							<div id="ads-NT-fourth-h2" class="lazy-ads "></div>
						</div>
						<?php $ad .= ob_get_clean();
						return $m[0] . $ad;// ;
					}else if($matchcount == 6 and $new_template =='Si'){
						echo $matchcount;
						ob_start();?>
						<div class="lc_ads">
							<div id="ads-NT-sixth-h2" class="lazy-ads "></div>
						</div>
						<?php $ad .= ob_get_clean();
						return $m[0] . $ad;// ;
					}else{
						return $m[0];
					}                
			}
			
		  $purified_content = preg_replace_callback('/<h2(.*)>(.*)<\/h2>/', 'insert_ads', $purified_content);


			echo $purified_content; 


			?>
        </div>
    </div>
</div>
<!--
<div class="container-fluid scp-contact shadow" id="contacto">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center"> <br>
				<h2>Contacto</h2> 
				<p><b>Dirección:</b> <?php echo get_post_meta( $post->ID, 'escuela_contacto_direccion', true );	?></p>
				<p><b>Teléfono:</b> <?php echo get_post_meta( $post->ID, 'escuela_contacto_telefono', true );	?></p>
				<p class="text-center">
					<a target="_blank" rel="noopener noreferrer nofollow" href="<?php echo get_post_meta( $post->ID, 'escuela_contacto_web', true );	?>"><img src="<?php bloginfo('template_url'); ?>/images/chrome.svg" /></a>
					<a target="_blank" rel="noopener noreferrer nofollow" href="<?php echo get_post_meta( $post->ID, 'escuela_contacto_facebook', true );	?>"><img src="<?php bloginfo('template_url'); ?>/images/facebook.svg" /></a>
				</p>
			</div>
		</div>
	</div>
</div>-->
<?php get_template_part("post_templates/colegio/contacto");?>


<div class="container">
    <div class="row">
        <?php 
			$galeria = array();
			for($i=1;$i<=5;$i++){
				$img_post_id = get_post_meta($post->ID, 'escuela_galeria'.$i, true);
				$img_post = get_post($img_post_id);
				array_push($galeria,$img_post->guid);
			}
		 ?>

        <?php 
			$GLOBALS["galeria"] = $galeria;
		    get_template_part("post_templates/widgets/galeria"); ?>

    </div>
</div>

<?php get_template_part("post_templates/widgets/post_type_relacionados");?>

<?php comments_template("/comments.php");?>

</div>


<?php get_template_part("post_templates/nivel/escuela-municipio");?>