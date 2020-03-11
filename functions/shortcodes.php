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

?>