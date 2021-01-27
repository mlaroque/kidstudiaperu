<?php global $purified_content; global $post;?>
	<div class="indice-A">
		<p><b>Indíce</b></p>
			 <ol class="list-group list-group-indice-A">
			<?php 
				preg_match_all('/<h2(.*?)>(.*?)<\/h2/s', $post->post_content, $matches_global, PREG_PATTERN_ORDER); 
				 foreach($matches_global[2] as $match):
					
					$aux_match = $match;
					$aux_match = str_replace(' - ', ' ', $aux_match); // quitamos el guión (donde si lo hay)
					$id_text = strtolower(urlencode($aux_match));

					if(strpos($match, 'Cómo se enseña') !== false):
			?>
						<li class="list-group-item"><a href="#costos">Costos y Pensiones</a></li>
			<?php
					endif
			?>
			
				<li class="list-group-item"><a href="#<?php echo $id_text; ?>"><?php echo $match; ?></a></li>
			<?php endforeach; ?>
			<?php if($post->post_type == "colegio"): ?>
				<li class="list-group-item"><a href="#contacto">Contacto</a></li>
			<?php endif;?>

			</ol>
   	</div>
 <?php 

		$purified_content = preg_replace_callback("/<h2(.*?)>(.*?)(?=<\/h2>)/s","replace_with_ids", $purified_content);

?>