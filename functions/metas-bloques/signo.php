<?php
function signo_ficha_inner_custom_box( $post ) {
	global $post;
?>

		<label for="ficha_nombre" class="metas-label">Signo</label>
		<input id="ficha_nombre" type="text" class="metas-input-txt" value="<?php echo get_post_meta($post->ID, 'ficha_nombre', true); ?>" name="ficha_nombre" placeholder="Escribir nombre del signo">
		<br/>
		<label for="ficha_signo_inicio" class="metas-label">¿Qué fecha es?:</label>
		<input type="date" id="ficha_signo_inicio" value="<?php echo get_post_meta($post->ID, 'ficha_signo_inicio', true); ?>" name="ficha_signo_inicio"> a <input type="date" name="ficha_signo_fin" value="<?php echo get_post_meta($post->ID, 'ficha_signo_fin', true); ?>">
		<br/><br/>
		<label for="ficha_elemento" class="metas-label">Es signo de:</label>
		<?php $elem = get_post_meta($post->ID, 'ficha_elemento', true); ?>
		<select name="ficha_elemento" id="ficha_elemento" class="">
			<option value="" selected="selected">---Selecciona un elemento---</option>
			<option value="agua" <?php if($elem === "agua"){ echo 'selected="selected"'; } ?>>Agua</option>
			<option value="aire" <?php if($elem === "aire"){ echo 'selected="selected"'; } ?>>Aire</option>
			<option value="fuego" <?php if($elem === "fuego"){ echo 'selected="selected"'; } ?>>Fuego</option>
			<option value="tierra" <?php if($elem === "tierra"){ echo 'selected="selected"'; } ?>>Tierra</option>
		</select>
		<br/><br/>
		<label for="ficha_num_suerte" class="metas-label">Número de la suerte:</label>
		<input id="ficha_num_suerte" type="text" class="metas-input-txt" value="<?php echo get_post_meta($post->ID, 'ficha_num_suerte', true); ?>" name="ficha_num_suerte">
		<br/>
		<label for="ficha_color" class="metas-label">Color:</label>
		<?php $elem = get_post_meta($post->ID, 'ficha_color', true); ?>
				<select name="ficha_color" id="ficha_color" class="">
			<option value="" selected="selected">---Selecciona un color---</option>
			<option value="amarillo" <?php if($elem === "amarillo"){ echo 'selected="selected"'; } ?>>Amarillo</option>
			<option value="blanco" <?php if($elem === "blanco"){ echo 'selected="selected"'; } ?>>Blanco</option>
			<option value="magenta" <?php if($elem === "magenta"){ echo 'selected="selected"'; } ?>>Magenta</option>
			<option value="marrón" <?php if($elem === "marrón"){ echo 'selected="selected"'; } ?>>Marrón</option>
			<option value="naranja" <?php if($elem === "naranja"){ echo 'selected="selected"'; } ?>>Naranja</option>
			<option value="negro" <?php if($elem === "negro"){ echo 'selected="selected"'; } ?>>Negro</option>
			<option value="rojo brillante" <?php if($elem === "rojo brillante"){ echo 'selected="selected"'; } ?>>Rojo brillante</option>
			<option value="rojo oscuro" <?php if($elem === "rojo oscuro"){ echo 'selected="selected"'; } ?>>Rojo oscuro</option>
			<option value="rosa" <?php if($elem === "rosa"){ echo 'selected="selected"'; } ?>>Rosa</option>
			<option value="verde" <?php if($elem === "verde"){ echo 'selected="selected"'; } ?>>Verde</option>
		</select>
		<br/>

   


<?php
}

function signo_carac_inner_custom_box( $post ) {
	global $post;
	$signo_carac_imagen_arr =wp_get_attachment_image_src(get_post_meta($post->ID, 'signo_carac_imagen', true),'thumbnail');
?>
		<label for="signo_carac_imagen" class="metas-label">Imagen constelación:</label>
		<img id="signo_carac_imagen" src="<?php echo $signo_carac_imagen_arr[0]; ?>" >
		<input type="file" name="signo_carac_imagen_file"  multiple="false" />
        	<input id="signo_carac_imagen_name" type="hidden" value="<?php echo get_post_meta($post->ID, 'signo_carac_imagen', true); ?>" name="signo_carac_imagen">
        	<?php wp_nonce_field( 'signo_carac_imagen_file', 'signo_carac_imagen_file_nonce' ); ?>
        	<button type="button" onclick="document.getElementById('signo_carac_imagen_name').value='0';document.getElementById('signo_carac_imagen').removeAttribute('src');">Borrar</button>
       		 <br/><br/>
		<label for="signo_carac_polaridad" class="metas-label">Es signo de:</label>
		<?php $elem = get_post_meta($post->ID, 'signo_carac_polaridad', true); ?>
		<select name="signo_carac_polaridad" id="signo_carac_polaridad" class="">
			<option value="" selected="selected">---Selecciona una polaridad---</option>
			<option value="masculino/yang" <?php if($elem === "masculino/yang"){ echo 'selected="selected"'; } ?>>Masculino / Yang</option>
			<option value="feminino/ying" <?php if($elem === "feminino/ying"){ echo 'selected="selected"'; } ?>>Feminino / Ying</option>
		</select>
		<br/><br/>
		<label for="signo_carac_modalidad" class="metas-label">Es signo de:</label>
		<?php $elem = get_post_meta($post->ID, 'signo_carac_modalidad', true); ?>
		<select name="signo_carac_modalidad" id="signo_carac_modalidad" class="">
			<option value="" selected="selected">---Selecciona una modalidad---</option>
			<option value="cardinal" <?php if($elem === "cardinal"){ echo 'selected="selected"'; } ?>>Cardinal</option>
			<option value="fijo" <?php if($elem === "fijo"){ echo 'selected="selected"'; } ?>>Fijo</option>
			<option value="mutable" <?php if($elem === "mutable"){ echo 'selected="selected"'; } ?>>Mutable</option>
		</select>
		<br/><br/>
		<label for="signo_carac_casa" class="metas-label">Casa zodiacal:</label>
		<?php $elem = get_post_meta($post->ID, 'signo_carac_casa', true); ?>
		<select name="signo_carac_casa" id="signo_carac_casa" class="">
			<option value="" selected="selected">---Selecciona una casa---</option>
			<option value="c1" <?php if($elem === "c1"){ echo 'selected="selected"'; } ?>>C1</option>
			<option value="c2" <?php if($elem === "c2"){ echo 'selected="selected"'; } ?>>C2</option>
			<option value="c3" <?php if($elem === "c3"){ echo 'selected="selected"'; } ?>>C3</option>
			<option value="c4" <?php if($elem === "c4"){ echo 'selected="selected"'; } ?>>C4</option>
			<option value="c5" <?php if($elem === "c5"){ echo 'selected="selected"'; } ?>>C5</option>
			<option value="c6" <?php if($elem === "c6"){ echo 'selected="selected"'; } ?>>C6</option>
			<option value="c7" <?php if($elem === "c7"){ echo 'selected="selected"'; } ?>>C7</option>
			<option value="c8" <?php if($elem === "c8"){ echo 'selected="selected"'; } ?>>C8</option>
			<option value="c9" <?php if($elem === "c9"){ echo 'selected="selected"'; } ?>>C9</option>
			<option value="c10" <?php if($elem === "c10"){ echo 'selected="selected"'; } ?>>C10</option>
			<option value="c11" <?php if($elem === "c11"){ echo 'selected="selected"'; } ?>>C11</option>
			<option value="c12" <?php if($elem === "c12"){ echo 'selected="selected"'; } ?>>C12</option>
		</select>
		<br/><br/>
		<label for="signo_carac_cuerpo" class="metas-label">Parte del cuerpo:</label>
		<input id="signo_carac_cuerpo" type="text" class="metas-input-txt" value="<?php echo get_post_meta($post->ID, 'signo_carac_cuerpo', true); ?>" name="signo_carac_cuerpo" placeholder="Escribir la parte del cuerpo relacionada con el signo">
		<br/>
		<label for="signo_carac_planeta" class="metas-label">Planeta gerente:</label>
		<input id="signo_carac_planeta" type="text" class="metas-input-txt" value="<?php echo get_post_meta($post->ID, 'signo_carac_planeta', true); ?>" name="signo_carac_planeta" placeholder="Escribir el (los) planetas asignados al signo, dependiendo el caso">
		<br/>
		<label for="signo_carac_frase" class="metas-label">Frase del signo:</label>
		<input id="signo_carac_frase" type="text" class="metas-input-txt" value="<?php echo get_post_meta($post->ID, 'signo_carac_frase', true); ?>" name="signo_carac_frase" placeholder="Yo soy, Yo Tengo, Yo comunico, Yo Pienso… según sea el caso">
		<br/>
		
		<br/>

   


<?php
}

function signo_comoes_inner_custom_box( $post ) {
	global $post;
?>

		<label for="signo_comoes_naturaleza" class="metas-label">En la naturaleza:</label>
		<input id="signo_comoes_naturaleza" type="text" class="metas-input-txt" value="<?php echo get_post_meta($post->ID, 'signo_comoes_naturaleza', true); ?>" name="signo_comoes_naturaleza" placeholder="Ej.: Aire- Libra es Brisa, Acuario es Huracán, Géminis es Viento norte y viento sur al mismo tiempo">
		<br/>
		<label for="signo_comoes_caracteriza" class="metas-label">Lo caracteriza su:</label>
		<input id="signo_comoes_caracteriza" type="text" class="metas-input-txt" value="<?php echo get_post_meta($post->ID, 'signo_comoes_caracteriza', true); ?>" name="signo_comoes_caracteriza" placeholder="Describir con su + adjetivo  aquella característica que identifica la personalidad del signo Ej.:: Su curiosidad, su ingenuidad, su perfeccionismo">
		<br/>
		<label for="signo_comoes_feliz" class="metas-label">Le hace feliz:</label>
		<input id="signo_comoes_feliz" type="text" class="metas-input-txt" value="<?php echo get_post_meta($post->ID, 'signo_comoes_feliz', true); ?>" name="signo_comoes_feliz" placeholder="Describir con verbo + sustantivo aquellas situaciones que le provocan felicidad al signo. Ej.: Tener dinero, Comer comida, Hacer familia. Etc">
		<br/>
		<label for="signo_comoes_miedo" class="metas-label">Su Mayor Miedo:</label>
		<input id="signo_comoes_miedo" type="text" class="metas-input-txt" value="<?php echo get_post_meta($post->ID, 'signo_comoes_miedo', true); ?>" name="signo_comoes_miedo" placeholder="Describir con sustantivos las situaciones que le provocan miedo. Ej.: El compromiso, La inestabilidad, La aventura, La falta de dinero, etc">
		<br/>
		<label for="signo_comoes_ansiedad" class="metas-label">Le provoca ansiedad:</label>
		<input id="signo_comoes_ansiedad" type="text" class="metas-input-txt" value="<?php echo get_post_meta($post->ID, 'signo_comoes_ansiedad', true); ?>" name="signo_comoes_ansiedad" placeholder="Describir con sustantivos las situaciones que le provocan ansiedad. Ej.: La limpieza, El orden, La impuntualidad, La intimidad, Los interrogatorios, Los tiempos de entrega, Las figuras de poder, etc.">
		<br/>
		<label for="signo_comoes_motivacion" class="metas-label">Lo motiva:</label>
		<input id="signo_comoes_motivacion" type="text" class="metas-input-txt" value="<?php echo get_post_meta($post->ID, 'signo_comoes_motivacion', true); ?>" name="signo_comoes_motivacion" placeholder="Describir con sustantivos aquellos motivadores personales de tal signo Ej.: El poder, El orden, La familia, La comunidad, El amor, El dinero, etc.">
		<br/>

		
		<br/>

   


<?php
}

function signo_lomejor_inner_custom_box( $post ) {
	global $post;
?>

		<label for="signo_lomejor_para" class="metas-label">El mejor para:</label>
		<input id="signo_lomejor_para" type="text" class="metas-input-txt" value="<?php echo get_post_meta($post->ID, 'signo_lomejor_para', true); ?>" name="signo_lomejor_para" placeholder="Utilizar 1 Verbo : Cocinar">
		<br/>
		<label for="signo_lomejor_puede" class="metas-label">Puede llegar a ser bueno en:</label>
		<input id="signo_lomejor_puede" type="text" class="metas-input-txt" value="<?php echo get_post_meta($post->ID, 'signo_lomejor_puede', true); ?>" name="signo_lomejor_puede" placeholder="Utilizar 1 Verbo : Cocinar">
		<br/>
		<label for="signo_lomejor_no" class="metas-label">No es muy bueno para:</label>
		<input id="signo_lomejor_no" type="text" class="metas-input-txt" value="<?php echo get_post_meta($post->ID, 'signo_lomejor_no', true); ?>" name="signo_lomejor_no" placeholder="Utilizar 1 Verbo: Entrenar">
		<br/>
		<label for="signo_comoes_peor" class="metas-label">El peor para:</label>
		<input id="signo_comoes_peor" type="text" class="metas-input-txt" value="<?php echo get_post_meta($post->ID, 'signo_comoes_peor', true); ?>" name="signo_comoes_peor" placeholder="Utilizar 1 Verbo: Escuchar ">
		<br/>

<?php
}

function signo_compatibilidad_amor_inner_custom_box( $post ) {
	global $post;
?>

		<label for="signo_comp_amor_con" class="metas-label">En el amor es compatible con: </label>(<small>Selecciona varios presionando la tecla Ctrl</small>)
		<?php $elem = get_post_meta($post->ID, 'signo_comp_amor_con', true); echo $elem; ?>
		<select multiple name="signo_comp_amor_con[]" id="signo_comp_amor_con" style="height:200px">
			<option value="Aries" <?php if(strpos($elem,"Aries") !== false){ echo 'selected="selected"'; } ?>>Aries</option>
			<option value="Tauro" <?php if(strpos($elem,"Tauro") !== false){ echo 'selected="selected"'; } ?>>Tauro</option>
			<option value="Géminis" <?php if(strpos($elem,"Géminis") !== false){ echo 'selected="selected"'; } ?>>Géminis</option>
			<option value="Cáncer" <?php if(strpos($elem,"Cáncer") !== false){ echo 'selected="selected"'; } ?>>Cáncer</option>
			<option value="Leo" <?php if(strpos($elem,"Leo") !== false){ echo 'selected="selected"'; } ?>>Leo</option>
			<option value="Virgo" <?php if(strpos($elem,"Virgo") !== false){ echo 'selected="selected"'; } ?>>Virgo</option>
			<option value="Libra" <?php if(strpos($elem,"Libra") !== false){ echo 'selected="selected"'; } ?>>Libra</option>
			<option value="Escorpio" <?php if(strpos($elem,"Escorpio") !== false){ echo 'selected="selected"'; } ?>>Escorpio</option>
			<option value="Sagitario" <?php if(strpos($elem,"Sagitario") !== false){ echo 'selected="selected"'; } ?>>Sagitario</option>
			<option value="Capricornio" <?php if(strpos($elem,"Capricornio") !== false){ echo 'selected="selected"'; } ?>>Capricornio</option>
			<option value="Acuario" <?php if(strpos($elem,"Acuario") !== false){ echo 'selected="selected"'; } ?>>Acuario</option>
			<option value="Piscis" <?php if(strpos($elem,"Piscis") !== false){ echo 'selected="selected"'; } ?>>Piscis</option>
		</select>
		<br/><br/>
		<label for="signo_comp_amor_no_con" class="metas-label">En el amor no es compatible con: </label>(<small>Selecciona varios presionando la tecla Ctrl</small>)
		<?php $elem = get_post_meta($post->ID, 'signo_comp_amor_no_con', true); ?>
		<select multiple name="signo_comp_amor_no_con[]" id="signo_comp_amor_no_con" style="height:200px">
			<option value="Aries" <?php if(strpos($elem,"Aries") !== false){ echo 'selected="selected"'; } ?>>Aries</option>
			<option value="Tauro" <?php if(strpos($elem,"Tauro") !== false){ echo 'selected="selected"'; } ?>>Tauro</option>
			<option value="Géminis" <?php if(strpos($elem,"Géminis") !== false){ echo 'selected="selected"'; } ?>>Géminis</option>
			<option value="Cáncer" <?php if(strpos($elem,"Cáncer") !== false){ echo 'selected="selected"'; } ?>>Cáncer</option>
			<option value="Leo" <?php if(strpos($elem,"Leo") !== false){ echo 'selected="selected"'; } ?>>Leo</option>
			<option value="Virgo" <?php if(strpos($elem,"Virgo") !== false){ echo 'selected="selected"'; } ?>>Virgo</option>
			<option value="Libra" <?php if(strpos($elem,"Libra") !== false){ echo 'selected="selected"'; } ?>>Libra</option>
			<option value="Escorpio" <?php if(strpos($elem,"Escorpio") !== false){ echo 'selected="selected"'; } ?>>Escorpio</option>
			<option value="Sagitario" <?php if(strpos($elem,"Sagitario") !== false){ echo 'selected="selected"'; } ?>>Sagitario</option>
			<option value="Capricornio" <?php if(strpos($elem,"Capricornio") !== false){ echo 'selected="selected"'; } ?>>Capricornio</option>
			<option value="Acuario" <?php if(strpos($elem,"Acuario") !== false){ echo 'selected="selected"'; } ?>>Acuario</option>
			<option value="Piscis" <?php if(strpos($elem,"Piscis") !== false){ echo 'selected="selected"'; } ?>>Piscis</option>
		</select>
		<br/><br/>
		<label for="signo_comp_amor_comoes" class="metas-label">¿Cómo es <?php echo $post->post_title;?> en el amor? </label>
		<textarea name="signo_comp_amor_comoes" placeholder="Texto breve describiendo cómo se comporta este signo en las relaciones románticas, lo que le gusta lo que no le gusta; motiva y aburre. Describir de manera distinta a como lo hacen el resto de páginas." style="width:100%;height:150px;" id="signo_comp_amor_comoes"><?php echo get_post_meta($post->ID, 'signo_comp_amor_comoes', true); ?></textarea>
		<br>
		<label for="signo_comp_amor_tener" class="metas-label">Para tener un buen amor con <?php echo $post->post_title;?>: </label>
		<textarea name="signo_comp_amor_tener" placeholder="Orientarlo a lo positivo, como consejo de lo que te funciona con este signo, cómo lo puedes interesar o motivar." style="width:100%;height:150px;" id="signo_comp_amor_tener"><?php echo get_post_meta($post->ID, 'signo_comp_amor_tener', true); ?></textarea>
		<br>


<?php
}

function signo_compatibilidad_trabajo_inner_custom_box( $post ) {
	global $post;
?>

		<label for="signo_comp_trabajo_con" class="metas-label">En trabajo y negocios es compatible con: </label>(<small>Selecciona varios presionando la tecla Ctrl</small>)
		<?php $elem = get_post_meta($post->ID, 'signo_comp_trabajo_con', true); ?>
		<select multiple name="signo_comp_trabajo_con[]" id="signo_comp_trabajo_con" style="height:200px">
			<option value="Aries" <?php if(strpos($elem,"Aries") !== false){ echo 'selected="selected"'; } ?>>Aries</option>
			<option value="Tauro" <?php if(strpos($elem,"Tauro") !== false){ echo 'selected="selected"'; } ?>>Tauro</option>
			<option value="Géminis" <?php if(strpos($elem,"Géminis") !== false){ echo 'selected="selected"'; } ?>>Géminis</option>
			<option value="Cáncer" <?php if(strpos($elem,"Cáncer") !== false){ echo 'selected="selected"'; } ?>>Cáncer</option>
			<option value="Leo" <?php if(strpos($elem,"Leo") !== false){ echo 'selected="selected"'; } ?>>Leo</option>
			<option value="Virgo" <?php if(strpos($elem,"Virgo") !== false){ echo 'selected="selected"'; } ?>>Virgo</option>
			<option value="Libra" <?php if(strpos($elem,"Libra") !== false){ echo 'selected="selected"'; } ?>>Libra</option>
			<option value="Escorpio" <?php if(strpos($elem,"Escorpio") !== false){ echo 'selected="selected"'; } ?>>Escorpio</option>
			<option value="Sagitario" <?php if(strpos($elem,"Sagitario") !== false){ echo 'selected="selected"'; } ?>>Sagitario</option>
			<option value="Capricornio" <?php if(strpos($elem,"Capricornio") !== false){ echo 'selected="selected"'; } ?>>Capricornio</option>
			<option value="Acuario" <?php if(strpos($elem,"Acuario") !== false){ echo 'selected="selected"'; } ?>>Acuario</option>
			<option value="Piscis" <?php if(strpos($elem,"Piscis") !== false){ echo 'selected="selected"'; } ?>>Piscis</option>
		</select>
		<br/><br/>
		<label for="signo_comp_trabajo_no_con" class="metas-label">En trabajo y negocios no es compatible con: </label>(<small>Selecciona varios presionando la tecla Ctrl</small>)
		<?php $elem = get_post_meta($post->ID, 'signo_comp_trabajo_no_con', true); ?>
		<select multiple name="signo_comp_trabajo_no_con[]" id="signo_comp_trabajo_no_con" style="height:200px">
			<option value="Aries" <?php if(strpos($elem,"Aries") !== false){ echo 'selected="selected"'; } ?>>Aries</option>
			<option value="Tauro" <?php if(strpos($elem,"Tauro") !== false){ echo 'selected="selected"'; } ?>>Tauro</option>
			<option value="Géminis" <?php if(strpos($elem,"Géminis") !== false){ echo 'selected="selected"'; } ?>>Géminis</option>
			<option value="Cáncer" <?php if(strpos($elem,"Cáncer") !== false){ echo 'selected="selected"'; } ?>>Cáncer</option>
			<option value="Leo" <?php if(strpos($elem,"Leo") !== false){ echo 'selected="selected"'; } ?>>Leo</option>
			<option value="Virgo" <?php if(strpos($elem,"Virgo") !== false){ echo 'selected="selected"'; } ?>>Virgo</option>
			<option value="Libra" <?php if(strpos($elem,"Libra") !== false){ echo 'selected="selected"'; } ?>>Libra</option>
			<option value="Escorpio" <?php if(strpos($elem,"Escorpio") !== false){ echo 'selected="selected"'; } ?>>Escorpio</option>
			<option value="Sagitario" <?php if(strpos($elem,"Sagitario") !== false){ echo 'selected="selected"'; } ?>>Sagitario</option>
			<option value="Capricornio" <?php if(strpos($elem,"Capricornio") !== false){ echo 'selected="selected"'; } ?>>Capricornio</option>
			<option value="Acuario" <?php if(strpos($elem,"Acuario") !== false){ echo 'selected="selected"'; } ?>>Acuario</option>
			<option value="Piscis" <?php if(strpos($elem,"Piscis") !== false){ echo 'selected="selected"'; } ?>>Piscis</option>
		</select>
		<br/><br/>
		<label for="signo_comp_trabajo_comoes" class="metas-label">¿Cómo es <?php echo $post->post_title;?> en los negocios? </label>
		<textarea name="signo_comp_trabajo_comoes" placeholder="Texto breve describiendo cómo se comporta este signo en las relaciones románticas, lo que le gusta lo que no le gusta; motiva y aburre. Describir de manera distinta a como lo hacen el resto de páginas." style="width:100%;height:150px;" id="signo_comp_trabajo_comoes"><?php echo get_post_meta($post->ID, 'signo_comp_trabajo_comoes', true); ?></textarea>
		<br>
		<label for="signo_comp_trabajo_tener" class="metas-label">Para tener buenos negocios con <?php echo $post->post_title;?>: </label>
		<textarea name="signo_comp_trabajo_tener" placeholder="Orientarlo a lo positivo, como consejo de lo que te funciona con este signo, cómo lo puedes interesar o motivar." style="width:100%;height:150px;" id="signo_comp_trabajo_tener"><?php echo get_post_meta($post->ID, 'signo_comp_trabajo_tener', true); ?></textarea>
		<br>


<?php
}

function signo_compatibilidad_amistad_inner_custom_box( $post ) {
	global $post;
?>

		<label for="signo_comp_amistad_con" class="metas-label">En la amistad es compatible con: </label>(<small>Selecciona varios presionando la tecla Ctrl</small>)
		<?php $elem = get_post_meta($post->ID, 'signo_comp_amistad_con', true); ?>
		<select multiple name="signo_comp_amistad_con[]" id="signo_comp_amistad_con" style="height:200px">
			<option value="Aries" <?php if(strpos($elem,"Aries") !== false){ echo 'selected="selected"'; } ?>>Aries</option>
			<option value="Tauro" <?php if(strpos($elem,"Tauro") !== false){ echo 'selected="selected"'; } ?>>Tauro</option>
			<option value="Géminis" <?php if(strpos($elem,"Géminis") !== false){ echo 'selected="selected"'; } ?>>Géminis</option>
			<option value="Cáncer" <?php if(strpos($elem,"Cáncer") !== false){ echo 'selected="selected"'; } ?>>Cáncer</option>
			<option value="Leo" <?php if(strpos($elem,"Leo") !== false){ echo 'selected="selected"'; } ?>>Leo</option>
			<option value="Virgo" <?php if(strpos($elem,"Virgo") !== false){ echo 'selected="selected"'; } ?>>Virgo</option>
			<option value="Libra" <?php if(strpos($elem,"Libra") !== false){ echo 'selected="selected"'; } ?>>Libra</option>
			<option value="Escorpio" <?php if(strpos($elem,"Escorpio") !== false){ echo 'selected="selected"'; } ?>>Escorpio</option>
			<option value="Sagitario" <?php if(strpos($elem,"Sagitario") !== false){ echo 'selected="selected"'; } ?>>Sagitario</option>
			<option value="Capricornio" <?php if(strpos($elem,"Capricornio") !== false){ echo 'selected="selected"'; } ?>>Capricornio</option>
			<option value="Acuario" <?php if(strpos($elem,"Acuario") !== false){ echo 'selected="selected"'; } ?>>Acuario</option>
			<option value="Piscis" <?php if(strpos($elem,"Piscis") !== false){ echo 'selected="selected"'; } ?>>Piscis</option>
		</select>
		<br/><br/>
		<label for="signo_comp_amistad_no_con" class="metas-label">En la amistad no es compatible con: </label>(<small>Selecciona varios presionando la tecla Ctrl</small>)
		<?php $elem = get_post_meta($post->ID, 'signo_comp_amistad_no_con', true); ?>
		<select multiple name="signo_comp_amistad_no_con[]" id="signo_comp_amistad_no_con" style="height:200px">
			<option value="Aries" <?php if(strpos($elem,"Aries") !== false){ echo 'selected="selected"'; } ?>>Aries</option>
			<option value="Tauro" <?php if(strpos($elem,"Tauro") !== false){ echo 'selected="selected"'; } ?>>Tauro</option>
			<option value="Géminis" <?php if(strpos($elem,"Géminis") !== false){ echo 'selected="selected"'; } ?>>Géminis</option>
			<option value="Cáncer" <?php if(strpos($elem,"Cáncer") !== false){ echo 'selected="selected"'; } ?>>Cáncer</option>
			<option value="Leo" <?php if(strpos($elem,"Leo") !== false){ echo 'selected="selected"'; } ?>>Leo</option>
			<option value="Virgo" <?php if(strpos($elem,"Virgo") !== false){ echo 'selected="selected"'; } ?>>Virgo</option>
			<option value="Libra" <?php if(strpos($elem,"Libra") !== false){ echo 'selected="selected"'; } ?>>Libra</option>
			<option value="Escorpio" <?php if(strpos($elem,"Escorpio") !== false){ echo 'selected="selected"'; } ?>>Escorpio</option>
			<option value="Sagitario" <?php if(strpos($elem,"Sagitario") !== false){ echo 'selected="selected"'; } ?>>Sagitario</option>
			<option value="Capricornio" <?php if(strpos($elem,"Capricornio") !== false){ echo 'selected="selected"'; } ?>>Capricornio</option>
			<option value="Acuario" <?php if(strpos($elem,"Acuario") !== false){ echo 'selected="selected"'; } ?>>Acuario</option>
			<option value="Piscis" <?php if(strpos($elem,"Piscis") !== false){ echo 'selected="selected"'; } ?>>Piscis</option>
		</select>
		<br/><br/>
		<label for="signo_comp_amistad_selleva" class="metas-label">Tipo de personas con las que se lleva :</label>
		<input id="signo_comp_amistad_selleva" type="text" class="metas-input-txt" value="<?php echo get_post_meta($post->ID, 'signo_comp_amistad_selleva', true); ?>" name="signo_comp_amistad_selleva" placeholder="Describir con adjetivos las actitudes o virtudes de otras personas. Ejemplo: detallistas, puntuales, ordenadas. Intentar dar al menos 5 características.">
		<br/>
		<label for="signo_comp_amistad_nosoporta" class="metas-label">Tipo de gente que no soporta: </label>
		<input id="signo_comp_amistad_nosoporta" type="text" class="metas-input-txt" value="<?php echo get_post_meta($post->ID, 'signo_comp_amistad_nosoporta', true); ?>" name="signo_comp_amistad_nosoporta" placeholder="Describir con adjetivos las actitudes que no soporta de otras personas. Ejemplo: desordenada, colérica, arcáica. Intentar dar al menos 5 características.">
		<br/>
		<label for="signo_comp_amistad_comoes" class="metas-label">¿Cómo es <?php echo $post->post_title;?> en la amistad? </label>
		<textarea name="signo_comp_amistad_comoes" placeholder="Texto breve describiendo cómo se comporta este signo en las relaciones románticas, lo que le gusta lo que no le gusta; motiva y aburre. Describir de manera distinta a como lo hacen el resto de páginas." style="width:100%;height:150px;" id="signo_comp_amistad_comoes"><?php echo get_post_meta($post->ID, 'signo_comp_amistad_comoes', true); ?></textarea>
		<br>
		<label for="signo_comp_amistad_tener" class="metas-label">Para tener una buena amistad con <?php echo $post->post_title;?>: </label>
		<textarea name="signo_comp_amistad_tener" placeholder="Orientarlo a lo positivo, como consejo de lo que te funciona con este signo, cómo lo puedes interesar o motivar." style="width:100%;height:150px;" id="signo_comp_amistad_tener"><?php echo get_post_meta($post->ID, 'signo_comp_amistad_tener', true); ?></textarea>
		<br>


<?php
}