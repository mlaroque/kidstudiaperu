<?php
/***AÑADIMOS LOS BOXES A LOS POST TYPES***/

add_action( 'add_meta_boxes', 'add_custom_box' );
function add_custom_box() {
	global $post;
    $new_template = get_post_meta($post->ID, 'escuela_new_template', true);

	if($post->post_type === "colegio"){
        if($post->post_parent == 0){
            add_meta_box(
                'escuela_new_template_data_id',            
                'Nuevo Template',      
                'escuela_new_template_inner_custom_box',  
                 $post->post_type                      
            );
            add_meta_box(
                'escuela_ficha_data_id',            
                'Ficha de Empresa',      
                'escuela_ficha_inner_custom_box',  
                 $post->post_type                      
            ); 
            add_meta_box(
                'escuela_datos_adicionales_ficha_data_id',            
                'Datos adicionales',      
                'escuela_datos_adicionales_inner_custom_box',  
                 $post->post_type                      
            );
            if($new_template == 'Si'): //nuevo template post_type escuelas
                add_meta_box(
                    'escuela_costos_ficha_data_id',            
                    'Costos y Colegiaturas',      
                    'escuela_costos_inner_custom_box',  
                     $post->post_type                      
                );
            endif;
            add_meta_box(
                'escuela_contacto_ficha_data_id',            
                'Contacto',      
                'escuela_contacto_inner_custom_box',  
                 $post->post_type                      
            );
            add_meta_box(
                'escuela_galeria_ficha_data_id',            
                'Galería',      
                'escuela_galeria_inner_custom_box',  
                 $post->post_type                      
            ); 
        }else{
            add_meta_box(
                'nivel_datos_adicionales_ficha_data_id',            
                'Datos adicionales',      
                'nivel_datos_adicionales_inner_custom_box',  
                 $post->post_type                      
            ); 

            add_meta_box(
                'nivel_costos_ficha_data_id',            
                'Costos y Colegiaturas',      
                'nivel_costos_inner_custom_box',  
                 $post->post_type                      
            ); 
        }
	}

}

/***********************************/
/****************ESCUELAS*************/
/***********************************/

require_once ( get_template_directory() . '/functions/metas-bloques/colegio.php' );
require_once ( get_template_directory() . '/functions/metas-bloques/nivel.php' );


/***********************************/
/****************END*************/
/***********************************/

function save_postdata( $post_id ) {
	global $post;

	if($post->post_type === "colegio"){
        if($post->post_parent == 0){

            //Ficha
            basic_input_text_meta_save('escuela_ficha_pub_priv',$post_id);
            basic_input_text_meta_save('escuela_ficha_costo',$post_id);
            basic_input_text_meta_save('escuela_ficha_nivel',$post_id,true);
            basic_input_text_meta_save('escuela_ficha_bachillerato',$post_id);
            basic_input_text_meta_save('escuela_ficha_horarios',$post_id,true);

            //Nuevo template
            basic_input_text_meta_save('escuela_new_template',$post_id);
            basic_input_text_meta_save('escuela_ficha_calificacion',$post_id);

            basic_input_text_meta_save('escuela_ficha_horario',$post_id);
            basic_input_text_meta_save('escuela_ficha_becas',$post_id);
            basic_input_text_meta_save('escuela_ficha_bilingue',$post_id);
            basic_input_text_meta_save('escuela_ficha_idiomas',$post_id,true);
            basic_input_text_meta_save('escuela_ficha_metodo',$post_id);
            basic_input_text_meta_save('escuela_ficha_ranking_puesto',$post_id);
            basic_input_text_meta_save('escuela_ficha_ranking_nombre',$post_id);
            basic_input_text_meta_save('escuela_ficha_ranking_enlace',$post_id);
            
            //Datos adicionales
            basic_input_text_meta_save('escuela_datos_alumnos',$post_id);
            basic_input_text_meta_save('escuela_datos_alumnos_especiales',$post_id);
            basic_input_text_meta_save('escuela_datos_religiosa',$post_id);
            basic_input_text_meta_save('escuela_datos_religiosa_orden',$post_id);
            basic_input_text_meta_save('escuela_datos_horario_extendido',$post_id);
            basic_input_text_meta_save('escuela_datos_transporte_escolar',$post_id);
            basic_input_text_meta_save('escuela_datos_departamentos',$post_id);
            basic_input_text_meta_save('escuela_datos_cafeteria',$post_id);
            basic_input_text_meta_save('escuela_datos_talleres',$post_id);
            basic_input_text_meta_save('escuela_datos_instalaciones',$post_id);
            basic_input_text_meta_save('escuela_datos_no_planteles',$post_id);
            basic_input_text_meta_save('escuela_datos_seguridad',$post_id);
            basic_input_text_meta_save('escuela_datos_ciudad',$post_id);
            

            //new template
            $options_nivel = array("cunas","inicial","primaria","secundaria");
            foreach ($options_nivel as $option_nivel) {
                basic_input_text_meta_save('nivel_costos_inscripcion_'.$option_nivel,$post_id);
                basic_input_text_meta_save('nivel_costos_colegiatura_'.$option_nivel,$post_id);
                basic_input_text_meta_save('nivel_costos_materiales_'.$option_nivel,$post_id);
                basic_input_text_meta_save('nivel_costos_uniformes_'.$option_nivel,$post_id);
                basic_input_text_meta_save('nivel_costos_alimentos_'.$option_nivel,$post_id);
                basic_input_text_meta_save('nivel_costos_seguros_'.$option_nivel,$post_id);
                basic_input_text_meta_save('nivel_costos_anual_'.$option_nivel,$post_id);
                basic_input_text_meta_save('nivel_costos_becas_desde_'.$option_nivel,$post_id);
                basic_input_text_meta_save('nivel_costos_becas_hasta_'.$option_nivel,$post_id);
                basic_input_text_meta_save('nivel_costos_considera_'.$option_nivel,$post_id);
            }

            //Contacto
            basic_input_text_meta_save('escuela_contacto_direccion',$post_id);
            basic_input_text_meta_save('escuela_contacto_web',$post_id);
            basic_input_text_meta_save('escuela_contacto_telefono',$post_id);
            basic_input_text_meta_save('escuela_contacto_facebook',$post_id);
            //Galeria
            for($i=1;$i<=5;$i++){
            image_meta_save('escuela_galeria'.$i,'escuela_galeria'.$i.'_file',$post->ID); 
            } 
        } else {

            //Datos adicionales
            basic_input_text_meta_save('nivel_datos_edades',$post_id);
            basic_input_text_meta_save('nivel_datos_alumnos',$post_id);
            basic_input_text_meta_save('nivel_datos_alumnos_especiales',$post_id);
            basic_input_text_meta_save('nivel_datos_horario_clase',$post_id);
            basic_input_text_meta_save('nivel_datos_horario_extendido',$post_id);
            basic_input_text_meta_save('nivel_datos_transporte_escolar',$post_id);
            basic_input_text_meta_save('nivel_datos_cafeteria',$post_id);
            basic_input_text_meta_save('nivel_datos_talleres',$post_id);
            basic_input_text_meta_save('nivel_datos_instalaciones',$post_id);    
            basic_input_text_meta_save('nivel_datos_seguridad',$post_id); 
            //Costos y Colegiaturas
            basic_input_text_meta_save('nivel_costos_inscripcion',$post_id);
            basic_input_text_meta_save('nivel_costos_colegiatura',$post_id);
            basic_input_text_meta_save('nivel_costos_materiales',$post_id);
            basic_input_text_meta_save('nivel_costos_uniformes',$post_id);
            basic_input_text_meta_save('nivel_costos_alimentos',$post_id);
            basic_input_text_meta_save('nivel_costos_seguros',$post_id);
            basic_input_text_meta_save('nivel_costos_anual',$post_id);
            basic_input_text_meta_save('nivel_costos_becas_desde',$post_id);
            basic_input_text_meta_save('nivel_costos_becas_hasta',$post_id);
            basic_input_text_meta_save('nivel_costos_considera',$post_id);
        }
	}

}
add_action( 'save_post', 'save_postdata' );

function basic_input_text_meta_save($input_name, $post_id, $is_array = false){

	global $_POST;
	if($is_array && !array_key_exists($input_name, $_POST )){
		$_POST[$input_name] = "";
	}

    if ( array_key_exists($input_name, $_POST ) ) {
    	$save_val = $_POST[$input_name];
    	if($is_array){
    		$save_val = implode(";",$save_val);
    	}
    	$meta_exists = update_post_meta( $post_id,
    	       $input_name,
    	        $save_val
    	 );		
    }		

}

function image_meta_save($input_name, $input_file_name, $post_id){

	if ( isset( $_POST[$input_file_name.'_nonce'] ) && wp_verify_nonce( $_POST[$input_file_name.'_nonce'], $input_file_name ) && $_FILES[$input_file_name]['error'] != 4 && $_FILES[$input_file_name]['size'] != 0) {
            // These files need to be included as dependencies when on the front end.
            require_once( ABSPATH . 'wp-admin/includes/image.php' );
            require_once( ABSPATH . 'wp-admin/includes/file.php' );
            require_once( ABSPATH . 'wp-admin/includes/media.php' );
    
            $attachment_id = media_handle_upload( $input_file_name,0);
            update_post_meta( $post_id,$input_name, $attachment_id);
    
    }else if( array_key_exists($input_name, $_POST ) ) {
            update_post_meta( $post_id,$input_name, $_POST[$input_name]);
    }

}

function build_input_text($name,$title,$placeholder,$help = "",$textarea=false){
    global $post;
    $GLOBALS["name"] = $name;
    $GLOBALS["title"] = $title;
    $GLOBALS["placeholder"] = $placeholder; 
    $GLOBALS["help"] = $help;
    ob_start();
    if($textarea){
        get_template_part("functions/metas-bloques/inputs/textarea");
    }else{
        get_template_part("functions/metas-bloques/inputs/input-text"); 
    }
    return ob_get_clean();

}

function build_select($name,$title,$default_value,$options,$multi=false){
    global $post;
    $GLOBALS["name"] = $name;   
    $GLOBALS["title"] = $title;
    $GLOBALS["default_value"] = $default_value; 
    $GLOBALS["options"] = $options;
    ob_start();
    if($multi){
        get_template_part("functions/metas-bloques/inputs/select-multiple");
    }else{
        get_template_part("functions/metas-bloques/inputs/select"); 
    }
    
    return ob_get_clean();

}

function build_image($name,$title){
    global $post;
    $GLOBALS["name"] = $name;   
    $GLOBALS["title"] = $title;
    ob_start();
    get_template_part("functions/metas-bloques/inputs/image");
    return ob_get_clean();

}

function xxxx_add_edit_form_multipart_encoding() {

    echo ' enctype="multipart/form-data"';

}
add_action('post_edit_form_tag', 'xxxx_add_edit_form_multipart_encoding');