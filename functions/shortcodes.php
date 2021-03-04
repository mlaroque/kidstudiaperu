<?php

add_shortcode('alert', 'alert');

function alert( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'style' => 'amor'
	), $atts ) );

	ob_start();?>

		<div class="alert alert-<?php echo esc_attr($style);?>">
			<span class="bg-<?php echo esc_attr($style);?>"><?php echo $content; ?></span>
		</div>

	<?php
	$output = ob_get_clean();
	return $output;
}

add_shortcode('contact_form', 'contact_form');

function contact_form ($content){

	ob_start();
	get_template_part("post_templates/widgets/contact-form");
	$content .= ob_get_clean();
		
	return $content;
}

add_shortcode('relacionados','relacionados');

function relacionados( $atts){
	global $post;

	$a = shortcode_atts( array(
   			'post_type' => $post->post_type
		), $atts );

	$GLOBALS['posttype'] = $a['post_type'];

 	ob_start();
	 get_template_part("post_templates/widgets/template-blogs-relacionados");
	$content .= ob_get_clean();

	return $content;
}

/*/// Toggle Accordion Niveles Educativos ////*/
add_shortcode('accordion', 'accordion');
function accordion ($atts, $content = null){
	wp_register_script('toggle-accordion', get_template_directory_uri() .'/js/toggle-accordion.js', null, false, true);
	wp_enqueue_script('toggle-accordion');

	$a = shortcode_atts( array(
   			'h2' => false,
   			'info_txt' => ''
	), $atts );

	$GLOBALS["with_h2"] = $a["h2"];
	$GLOBALS["info_txt"] = $a["info_txt"];

	static $no_calls = 0;
  	++$no_calls;
	
	preg_match_all("/<h2(.*?)>(.*)<\/h2>(.*)/s",$content,$matches,PREG_PATTERN_ORDER);
	$GLOBALS["h2_btn_id"] = $matches[1][0];
	$GLOBALS["accordion_btn_text"] = $matches[2][0];
	$GLOBALS["accordion_content"] = $matches[3][0];	
	$GLOBALS["accordion_id"] = "acc_id_" . $no_calls;

	ob_start();
	get_template_part("post_templates/widgets/accordion");
	return do_shortcode(ob_get_clean());
}
?>