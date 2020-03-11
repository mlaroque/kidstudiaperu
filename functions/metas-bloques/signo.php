<?php
function signo_ficha_inner_custom_box( $post ) {
	global $post;
?>
	<?php $options_elemento = array(array("agua","Agua"),array("aire","Aire"),array("fuego","Fuego"),array("tierra","Tierra"));  ?>
	<?php $options_color = array(array("amarillo","Amarillo"),array("azul turquesa","Azul Turquesa"),array("blanco","Blanco"),array("magenta","Magenta"),array("marrón","Marrón"),array("morado","Morado"),array("naranja","Naranja"),array("negro","Negro"),array("rojo brillante","Rojo brillante"),array("rojo oscuro","Rojo oscuro"),array("rosa","Rosa"),array("verde","Verde")); ?>


	<?php echo build_input_text("ficha_nombre","Signo","Escribir nombre del signo"); ?>
			<label for="ficha_signo_inicio" class="metas-label lc_label">¿Qué fecha es?:</label>
			<input type="date" id="ficha_signo_inicio" value="<?php echo get_post_meta($post->ID, 'ficha_signo_inicio', true); ?>" name="ficha_signo_inicio"> a <input type="date" name="ficha_signo_fin" value="<?php echo get_post_meta($post->ID, 'ficha_signo_fin', true); ?>"><br/><br/>
	<?php echo build_select("ficha_elemento","Es signo de:","un elemento",$options_elemento);?>
	<?php echo build_input_text("ficha_num_suerte","Número de la suerte:",""); ?>	
	<?php echo build_select("ficha_color","Color:","un color",$options_color);?>
	<?php echo build_input_text("ficha_piedra","Piedra del signo ",""); ?>
   
<?php
}

function signo_carac_inner_custom_box( $post ) {
	global $post;
	$signo_carac_imagen_arr =wp_get_attachment_image_src(get_post_meta($post->ID, 'signo_carac_imagen', true),'thumbnail');
?>
		<?php $options_polaridad = array(array("masculino/yang","Masculino / Yang"),array("feminino/ying","Feminino / Ying"));  ?>
		<?php $options_modalidad = array(array("cardinal","Cardinal"),array("fijo","Fijo"),array("mutable","Mutable"));  ?>
		<?php $options_casa = array(array("c1","C1"),array("c2","C2"),array("c3","C3"),array("c4","C4"),array("c5","C5"),array("c6","C6"),array("c7","C7"),array("c8","C8"),array("c9","C9"),array("c10","C10"),array("c11","C11"),array("c12","C12"));  ?>

		<?php //echo build_image("signo_carac_imagen","Imagen constelación:");?>
       	<?php echo build_select("signo_carac_polaridad","Es signo de:","una polaridad",$options_polaridad);?>
       	<?php echo build_select("signo_carac_modalidad","Es signo de:","una modalidad",$options_modalidad);?>
       	<?php echo build_select("signo_carac_casa","Casa zodiacal:","una casa",$options_casa);?>
		<?php echo build_input_text("signo_carac_cuerpo","Parte del cuerpo:","Ej. Corazón y sistema circulatorio","Escribir la parte del cuerpo relacionada con el signo"); ?>
		<?php echo build_input_text("signo_carac_planeta","Planeta gerente:","Ej. Tierra","Escribir el (los) planetas asignados al signo, dependiendo el caso"); ?>
		<?php echo build_input_text("signo_carac_frase","Frase del signo:","Ej. Yo soy, Yo Tengo, Yo comunico, Yo Pienso","Escribir la frase que caracteriza el signo según sea el caso"); ?>


<?php
}

function signo_comoes_inner_custom_box( $post ) {
	global $post;
?>
		<?php echo build_input_text("signo_comoes_naturaleza","En la naturaleza:","Ej. Aire - Libra es Brisa, Acuario es Huracán, Géminis es Viento norte y viento sur al mismo tiempo","Escribir el elemento que caracteriza el signo según sea el caso"); ?>
		<?php echo build_input_text("signo_comoes_caracteriza","Lo caracteriza su:","Ej. Su curiosidad, su ingenuidad, su perfeccionismo, etc.","Describir con su + adjetivo  aquella característica que identifica la personalidad del signo."); ?>
		<?php echo build_input_text("signo_comoes_feliz","Le hace feliz:","Ej. Tener dinero, Comer comida, Hacer familia. etc.","Describir con verbo + sustantivo aquellas situaciones que le provocan felicidad al signo."); ?>
		<?php echo build_input_text("signo_comoes_miedo","Su mayor miedo:","Ej. El compromiso, La inestabilidad, La aventura, La falta de dinero, etc","Describir con sustantivos las situaciones que le provocan miedo."); ?>
		<?php echo build_input_text("signo_comoes_ansiedad","Le provoca ansiedad:","Ej. La limpieza, El orden, La impuntualidad, La intimidad, Los interrogatorios, Los tiempos de entrega, etc.","Describir con sustantivos las situaciones que le provocan ansiedad."); ?>
		<?php echo build_input_text("signo_comoes_motivacion","Lo motiva:","Ej. El poder, El orden, La familia, La comunidad, El amor, El dinero, etc.","Describir con sustantivos aquellos motivadores personales de tal signo"); ?>

<?php
}

function signo_lomejor_inner_custom_box( $post ) {
	global $post;
?>
		<?php echo build_input_text("signo_lomejor_para","El mejor para:","Ej. Cocinar","Utilizar 1 Verbo"); ?>
		<?php echo build_input_text("signo_lomejor_puede","Puede llegar a ser bueno en:","Ej. Ahorrar","Utilizar 1 Verbo"); ?>
		<?php echo build_input_text("signo_lomejor_no","No es muy bueno para:","Ej. Entrenar","Utilizar 1 Verbo"); ?>
		<?php echo build_input_text("signo_comoes_peor","El peor para:","Ej. Escuchar","Utilizar 1 Verbo"); ?>
<?php
}

function signo_compatibilidad_amor_inner_custom_box( $post ) {
	global $post;
?>
		<?php $options_signos = array(array("Aries","Aries"),array("Tauro","Tauro"),array("Géminis","Géminis"),array("Cáncer","Cáncer"),array("Leo","Leo"),array("Virgo","Virgo"),array("Libra","Libra"),array("Escorpio","Escorpio"),array("Sagitario","Sagitario"),array("Capricornio","Capricornio"),array("Acuario","Acuario"),array("Piscis","Piscis")); ?>

		<?php echo build_select("signo_comp_amor_con","En el amor es compatible con: ","",$options_signos,true);?>
		<?php echo build_select("signo_comp_amor_no_con","En el amor no es compatible con: ","",$options_signos,true);?>
		<?php echo build_input_text("signo_comp_amor_comoes","¿Cómo es ".$post->post_title." en el amors?","Texto breve describiendo cómo se comporta este signo en las relaciones románticas, lo que le gusta lo que no le gusta; motiva y aburre. Describir de manera distinta a como lo hacen el resto de páginas.","Texto breve describiendo cómo se comporta este signo en las relaciones románticas, lo que le gusta lo que no le gusta; motiva y aburre. Describir de manera distinta a como lo hacen el resto de páginas.",true); ?>
		<?php echo build_input_text("signo_comp_amor_tener","Para tener un buen amor con ".$post->post_title.": ","Orientarlo a lo positivo, como consejo de lo que te funciona con este signo, cómo lo puedes interesar o motivar.","Orientarlo a lo positivo, como consejo de lo que te funciona con este signo, cómo lo puedes interesar o motivar.",true); ?>

<?php
}

function signo_compatibilidad_trabajo_inner_custom_box( $post ) {
	global $post;
?>

		<?php $options_signos = array(array("Aries","Aries"),array("Tauro","Tauro"),array("Géminis","Géminis"),array("Cáncer","Cáncer"),array("Leo","Leo"),array("Virgo","Virgo"),array("Libra","Libra"),array("Escorpio","Escorpio"),array("Sagitario","Sagitario"),array("Capricornio","Capricornio"),array("Acuario","Acuario"),array("Piscis","Piscis")); ?>

		<?php echo build_select("signo_comp_trabajo_con","En trabajo y negocios es compatible con: ","",$options_signos,true);?>
		<?php echo build_select("signo_comp_trabajo_no_con","En trabajo y negocios no es compatible con: ","",$options_signos,true);?>
		<?php echo build_input_text("signo_comp_trabajo_comoes","¿Cómo es  ".$post->post_title." en los negocios? ","Texto breve describiendo cómo se comporta este signo en las relaciones románticas, lo que le gusta lo que no le gusta; motiva y aburre. Describir de manera distinta a como lo hacen el resto de páginas.","Texto breve describiendo cómo se comporta este signo en las relaciones románticas, lo que le gusta lo que no le gusta; motiva y aburre. Describir de manera distinta a como lo hacen el resto de páginas.",true); ?>
		<?php echo build_input_text("signo_comp_trabajo_tener","Para tener buenos negocios con  ".$post->post_title.": ","Orientarlo a lo positivo, como consejo de lo que te funciona con este signo, cómo lo puedes interesar o motivar.","Orientarlo a lo positivo, como consejo de lo que te funciona con este signo, cómo lo puedes interesar o motivar.",true); ?>


<?php
}

function signo_compatibilidad_amistad_inner_custom_box( $post ) {
	global $post;
?>

		<?php $options_signos = array(array("Aries","Aries"),array("Tauro","Tauro"),array("Géminis","Géminis"),array("Cáncer","Cáncer"),array("Leo","Leo"),array("Virgo","Virgo"),array("Libra","Libra"),array("Escorpio","Escorpio"),array("Sagitario","Sagitario"),array("Capricornio","Capricornio"),array("Acuario","Acuario"),array("Piscis","Piscis")); ?>

		<?php echo build_select("signo_comp_amistad_con","En la amistad es compatible con: ","",$options_signos,true);?>
		<?php echo build_select("signo_comp_amistad_no_con","En la amistad no es compatible con: ","",$options_signos,true);?>
		<?php echo build_input_text("signo_comp_amistad_selleva","Tipo de personas con las que se lleva:"," Ej. detallistas, puntuales, ordenadas.","Describir con adjetivos las actitudes o virtudes de otras personas. Intentar dar al menos 5 características."); ?>
		<?php echo build_input_text("signo_comp_amistad_nosoporta","Tipo de gente que no soporta: ","Ej. desordenada, colérica, arcáica.","Describir con adjetivos las actitudes que no soporta de otras personas. Intentar dar al menos 5 características."); ?>
		<?php echo build_input_text("signo_comp_amistad_comoes","¿Cómo es   ".$post->post_title." en la amistad?","Texto breve describiendo cómo se comporta este signo en las relaciones románticas, lo que le gusta lo que no le gusta; motiva y aburre. Describir de manera distinta a como lo hacen el resto de páginas.","Texto breve describiendo cómo se comporta este signo en las relaciones románticas, lo que le gusta lo que no le gusta; motiva y aburre. Describir de manera distinta a como lo hacen el resto de páginas.",true); ?>
		<?php echo build_input_text("signo_comp_amistad_tener","Para tener una buena amistad con ".$post->post_title.":","Orientarlo a lo positivo, como consejo de lo que te funciona con este signo, cómo lo puedes interesar o motivar.","Orientarlo a lo positivo, como consejo de lo que te funciona con este signo, cómo lo puedes interesar o motivar.",true); ?>


<?php
}