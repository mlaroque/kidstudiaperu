<?php
/***AÑADIMOS LOS BOXES A LOS POST TYPES***/

add_action( 'add_meta_boxes', 'add_custom_box' );
function add_custom_box() {
	global $post;
	if($post->post_type === "signo"){
		add_meta_box(
            'signo_ficha_data_id',            
            'Ficha de ' . $post->post_title,      
            'signo_ficha_inner_custom_box',  
             $post->post_type                      
        );
        add_meta_box(
            'signo_carac_data_id',            
            'Características astrológicas del ' . $post->post_title,      
            'signo_carac_inner_custom_box',  
             $post->post_type                      
        );
        add_meta_box(
            'signo_comoes_data_id',            
            '¿Como es ' . $post->post_title . '?',      
            'signo_comoes_inner_custom_box',  
             $post->post_type                      
        );
        add_meta_box(
            'signo_lomejor_data_id',            
            'Lo mejor y peor de ' . $post->post_title,      
            'signo_lomejor_inner_custom_box',  
             $post->post_type                      
        );
        add_meta_box(
            'signo_compatibilidad_amor_data_id',            
            'Compatibilidad en el amor de ' . $post->post_title,      
            'signo_compatibilidad_amor_inner_custom_box',  
             $post->post_type                      
        );
        add_meta_box(
            'signo_compatibilidad_trabajo_data_id',            
            'Compatibilidad en el trabajo y los negocios de ' . $post->post_title,      
            'signo_compatibilidad_trabajo_inner_custom_box',  
             $post->post_type                      
        );
        add_meta_box(
            'signo_compatibilidad_amistad_data_id',            
            'Compatibilidad en la amistad de ' . $post->post_title,      
            'signo_compatibilidad_amistad_inner_custom_box',  
             $post->post_type                      
        );
	}

}

/***********************************/
/****************SIGNOS*************/
/***********************************/

require_once ( get_template_directory() . '/functions/metas-bloques/signo.php' );

/***********************************/
/****************END*************/
/***********************************/

function save_postdata( $post_id ) {
	global $post;

	if($post->post_type === "signo"){
		//Ficha
		basic_input_text_meta_save('ficha_nombre',$post_id);
		basic_input_text_meta_save('ficha_signo_inicio',$post_id);
		basic_input_text_meta_save('ficha_signo_fin',$post_id);
		basic_input_text_meta_save('ficha_elemento',$post_id);
		basic_input_text_meta_save('ficha_num_suerte',$post_id);
		basic_input_text_meta_save('ficha_color',$post_id);
		//Características
		image_meta_save('signo_carac_imagen','signo_carac_imagen_file',$post->ID);
		basic_input_text_meta_save('signo_carac_polaridad',$post_id);
		basic_input_text_meta_save('signo_carac_modalidad',$post_id);
		basic_input_text_meta_save('signo_carac_casa',$post_id);
		basic_input_text_meta_save('signo_carac_cuerpo',$post_id);
		basic_input_text_meta_save('signo_carac_planeta',$post_id);
		basic_input_text_meta_save('signo_carac_frase',$post_id);
		//Como es
		basic_input_text_meta_save('signo_comoes_naturaleza',$post_id);
		basic_input_text_meta_save('signo_comoes_caracteriza',$post_id);
		basic_input_text_meta_save('signo_comoes_feliz',$post_id);
		basic_input_text_meta_save('signo_comoes_miedo',$post_id);
		basic_input_text_meta_save('signo_comoes_ansiedad',$post_id);
		basic_input_text_meta_save('signo_comoes_motivacion',$post_id);
		//Lo mejor y lo peor
		basic_input_text_meta_save('signo_lomejor_para',$post_id);
		basic_input_text_meta_save('signo_lomejor_puede',$post_id);
		basic_input_text_meta_save('signo_lomejor_no',$post_id);
		basic_input_text_meta_save('signo_comoes_peor',$post_id);
		//Compatibilidad en el amor
		basic_input_text_meta_save('signo_comp_amor_con',$post_id, true);
		basic_input_text_meta_save('signo_comp_amor_no_con',$post_id, true);
		basic_input_text_meta_save('signo_comp_amor_comoes',$post_id);
		basic_input_text_meta_save('signo_comp_amor_tener',$post_id);
		//Compatibilidad en el trabajo y los negocios
		basic_input_text_meta_save('signo_comp_trabajo_con',$post_id, true);
		basic_input_text_meta_save('signo_comp_trabajo_no_con',$post_id, true);
		basic_input_text_meta_save('signo_comp_trabajo_comoes',$post_id);
		basic_input_text_meta_save('signo_comp_trabajo_tener',$post_id);
		//Compatibilidad en el amistad
		basic_input_text_meta_save('signo_comp_amistad_con',$post_id, true);
		basic_input_text_meta_save('signo_comp_amistad_no_con',$post_id, true);
		basic_input_text_meta_save('signo_comp_amistad_selleva',$post_id);
		basic_input_text_meta_save('signo_comp_amistad_nosoporta',$post_id);
		basic_input_text_meta_save('signo_comp_amistad_comoes',$post_id);
		basic_input_text_meta_save('signo_comp_amistad_tener',$post_id);

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

function xxxx_add_edit_form_multipart_encoding() {

    echo ' enctype="multipart/form-data"';

}
add_action('post_edit_form_tag', 'xxxx_add_edit_form_multipart_encoding');