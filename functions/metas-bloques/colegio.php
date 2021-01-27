<?php

$options_si_no = array(array("Si","Si"),array("No","No"));

function escuela_ficha_inner_custom_box( $post ){
	global $options_si_no;
?>
	<?php $options_pub_priv = array(array("Pública","Pública"),array("Privada","Privada"));  ?>
	<?php $options_costo = array(array("0","0"),array("$","$"),array("$$","$$"),array("$$$","$$$"));  ?>
	<?php $options_nivel = array(array("Cuna","Cuna"),array("Inicial","Inicial"),array("Primaria","Primaria"),array("Secundaria","Secundaria"));  ?>
	<?php $options_horarios = array(array("Matutino","Matutino"),array("Vespertino","Vespertino"),array("Nocturno","Nocturno"),array("Horario ampliado","Horario ampliado"),array("Internado","Internado"),array("Abierto","Abierto"));  ?>
	<?php $options_idiomas = array(array("Inglés","Inglés"),array("Quechua","Quechua"),array("Francés","Francés"),array("Alemán","Alemán"),array("Japonés","Japonés"),array("Chino","Chino"),array("Otro","Otro"));  ?>
	<?php $options_metodo = array(array("Tradicional / Conductivista","Tradicional / Conductivista"),array("Finlandés","Finlandés"),array("Activo Participativo","Activo Participativo"),array("Basado en Competencias y Valores","Basado en Competencias y Valores"),array("Basado en Trabajo Colaborativo y Valores","Basado en Trabajo Colaborativo y Valores"),array("Centrado en el Alumno","Centrado en el Alumno"),array("Constructivista","Constructivista"),array("Ecléctico","Ecléctico"),array("Educación Personalizada","Educación Personalizada"),array("Freinet","Freinet"),array("Humanista","Humanista"),array("Holístico / Integral","Holístico / Integral"),array("Modelo Propio","Modelo Propio"),array("Montessori","Montessori"), array('Neurociencia en la Educación', 'Neurociencia en la Educación'), array('Pedagogía Crítica Reflexiva','Pedagogía Crítica Reflexiva'), array('Sistema Americano', 'Sistema Americano'), array('Waldorf', 'Waldorf'));  ?>

	<?php echo build_select("escuela_ficha_pub_priv","Pública o privada:","un elemento",$options_pub_priv);?>
	<?php echo build_select("escuela_ficha_costo","Costo:","una escala de precio",$options_costo);?>
	<?php echo build_select("escuela_ficha_nivel","Nivel educativo:","uno o varios niveles",$options_nivel, true);?>
    <?php echo build_select("escuela_ficha_bachillerato","Bachillerato internacional:","una opción",$options_si_no);?>
	<?php echo build_select("escuela_ficha_horarios","Turnos:","uno o varios horarios",$options_horarios, true);?>
	<?php //echo build_input_text("escuela_ficha_horario","Horario:","Ej. 07:45 a 14:30",""); ?>
	<?php echo build_select("escuela_ficha_becas","Becas o ayudas:","una opción",$options_si_no);?>
    
    <div id=bilingue_toggle onclick="toggle_idiomas();">
        <?php echo build_select("escuela_ficha_bilingue","Bilingüe:","una opción",$options_si_no);?>
    </div>
    
    <div id="escuela_idiomas" style="display: none;">
        <?php echo build_select("escuela_ficha_idiomas","Idiomas:","un horario",$options_idiomas, true);?>
	</div>

	<?php echo build_select("escuela_ficha_metodo","Proyecto educativo:","un método",$options_metodo);?>
	<?php echo build_input_text("escuela_ficha_ranking_puesto","Puesto en ranking:","",""); ?>
	<?php echo build_input_text("escuela_ficha_ranking_nombre","Nombre ranking:","",""); ?>
	<?php echo build_input_text("escuela_ficha_ranking_enlace","Enlace a ranking:","","Poner enlaces con http://"); ?>

    <script type="text/javascript">
		toggle_idiomas();
		function toggle_idiomas() {
		  var x = document.getElementById("escuela_idiomas");
		  var val = document.getElementById("escuela_ficha_bilingue").value;
		  if (val === "Si") {
		    x.style.display = "block";
		  } else {
		    x.style.display = "none";
		    document.getElementById("escuela_ficha_idiomas").value = "";
		  }
		}	

	</script>
<?php 
}

function escuela_datos_adicionales_inner_custom_box( $post ){
	global $options_si_no;
?>
	<?php echo build_input_text("escuela_datos_alumnos","Alumnos por salón:","",""); ?>
	<?php echo build_select("escuela_datos_alumnos_especiales","Educación Inclusiva:","una opción",$options_si_no);?>
	<div id=religiosa_toggle onclick="toggle_orden();">
	<?php echo build_select("escuela_datos_religiosa","Religiosa:","una opción",$options_si_no);?>
	</div>
	<div id="religiosa_orden" style="display: none;">
	<?php echo build_input_text("escuela_datos_religiosa_orden","De orden:","",""); ?>
	</div>
	<?php echo build_input_text("escuela_datos_horario_extendido","Horario extendido:","Escribir horario y No si no hay",""); ?>
	<?php echo build_select("escuela_datos_transporte_escolar","Transporte Escolar:","una opción",$options_si_no);?>
	<?php echo build_select("escuela_datos_cafeteria","Cafetería o Alimentos:","una opción",$options_si_no);?>
	<?php echo build_select("escuela_datos_talleres","Talleres Culturales:","una opción",$options_si_no);?>
	<?php echo build_select("escuela_datos_instalaciones","Instalaciones Deportivas:","una opción",$options_si_no);?>
    <?php echo build_input_text("escuela_datos_seguridad","Tecnología:","Escribir hasta 4 elementos ej proyectores de vídeo, laboratorios de ciencia, laboratorios de cómputo, etc.",""); ?>
    <?php echo build_input_text("escuela_datos_no_planteles","Número de Planteles:","",""); ?>
    <?php echo build_input_text("escuela_datos_departamentos","Departamentos:","Escribir hasta 5 departamentos donde se encuentre el colegio",""); ?>
    <?php echo build_input_text("escuela_datos_ciudad","Ciudades:","Escribir hasta 10 ciudades donde se encuentre el colegio",""); ?>


	<script type="text/javascript">
		toggle_orden();
		function toggle_orden() {
		  var x = document.getElementById("religiosa_orden");
		  var val = document.getElementById("escuela_datos_religiosa").value;
		  if (val === "Si") {
		    x.style.display = "block";
		  } else {
		    x.style.display = "none";
		    document.getElementById("escuela_datos_religiosa_orden").value = "";
		  }
		}	

	</script>


<?php 
}

function escuela_contacto_inner_custom_box( $post ){
?>
    <?php echo build_input_text("escuela_contacto_direccion","Dirección:","",""); ?>
    <?php echo build_input_text("escuela_contacto_web","WEB:","poner enlaces con http://",""); ?>
    <?php echo build_input_text("escuela_contacto_telefono","Teléfono:","",""); ?>
    <?php echo build_input_text("escuela_contacto_facebook","FB:","poner enlaces con http://",""); ?>
<?php 
}


function escuela_galeria_inner_custom_box( $post ){

	for($i=1;$i<=5;$i++):
	$galeria =wp_get_attachment_image_src(get_post_meta($post->ID, 'escuela_galeria'.$i, true),'thumbnail');
?>
	<?php echo build_image('escuela_galeria'.$i,"Imagen ".$i.":");?>
<?php endfor;

}

?>