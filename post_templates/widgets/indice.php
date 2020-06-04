<?php global $purified_content; global $post;?>
<div class="col-12 col-sm-6 col-md-8 col-lg-8">
	<div class="indice-A">
		<p><b>Indíce</b></p>
			 <ol class="list-group list-group-indice-A">
			<?php 
				preg_match_all('/<h2(.*?)>(.*?)<\/h2/s', $post->post_content, $matches_global, PREG_PATTERN_ORDER); 
				 foreach($matches_global[2] as $match):

				 	$id_text = strtolower(urlencode($match));

			?>
				<li class="list-group-item"><a href="#<?php echo $id_text; ?>"><?php echo $match; ?></a></li>
			<?php endforeach; ?>
				<li class="list-group-item"><a href="#contacto">Contacto</a></li>
			</ol>
   	</div>
</div>
<?php 

		$purified_content = preg_replace_callback("/<h2(.*?)>(.*?)(?=<\/h2>)/s","replace_with_ids", $purified_content);

?>