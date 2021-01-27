<?php

$options_si_no = array(array("Si","Si"),array("No","No"));

function nivel_datos_adicionales_inner_custom_box( $post ){
	global $options_si_no;
?>
	<?php echo build_input_text("nivel_datos_edades","Edades:","",""); ?>
	<?php echo build_input_text("nivel_datos_alumnos","Alumnos por salón:","",""); ?>
	<?php echo build_select("nivel_datos_alumnos_especiales","Educación Inclusiva:","una opción",$options_si_no);?>
	<?php echo build_input_text("nivel_datos_horario_clase","Horario de clases:","Escribir horario",""); ?>
	<?php echo build_input_text("nivel_datos_horario_extendido","Horario extendido:","Escribir horario y No si no hay",""); ?>
	<?php echo build_select("nivel_datos_transporte_escolar","Transporte Escolar:","una opción",$options_si_no);?>
	<?php echo build_select("nivel_datos_cafeteria","Cafetería o Alimentos:","una opción",$options_si_no);?>
	<?php echo build_select("nivel_datos_talleres","Talleres Culturales:","una opción",$options_si_no);?>
	<?php echo build_select("nivel_datos_instalaciones","Instalaciones Deportivas:","una opción",$options_si_no);?>
	<?php echo build_input_text("nivel_datos_seguridad","Tecnología:","Escribir hasta 4 elementos ej proyectores de vídeo, laboratorios de ciencia, laboratorios de cómputo, etc.",""); ?>


<?php }

function nivel_costos_inner_custom_box( $post ){
?>
	<?php echo build_input_text("nivel_costos_inscripcion","Matrícula:","poner texto con formato S/ 1,000",""); ?>
	<?php echo build_input_text("nivel_costos_colegiatura","Pensión Mensual:","S/ 1,000",""); ?>
	<?php echo build_input_text("nivel_costos_materiales","Útiles y Materiales:","S/ 1,000",""); ?>
	<?php echo build_input_text("nivel_costos_uniformes","Uniformes:","S/ 1,000",""); ?>
	<?php echo build_input_text("nivel_costos_alimentos","Cuota de Alimentos:","S/ 1,000",""); ?>
	<?php echo build_input_text("nivel_costos_seguros","Seguros y otras cuotas:","S/ 1,000",""); ?>
	<?php echo build_input_text("nivel_costos_anual","Costo Anual de Colegio:","S/ 1,000",""); ?>
	<?php echo build_input_text("nivel_costos_becas_desde","Becas Desde:","$",""); ?>
	<?php echo build_input_text("nivel_costos_becas_hasta","Becas Hasta:","100%",""); ?>
	<?php echo build_input_text("nivel_costos_considera","Texto:","describe si este colegio es de Clasificación socioeconómica alta, media, baja, donde se mencione si existe la posibilidad de solicitar becas basados en qué méritos. Se debe mencionar además los beneficios que se obtienen como si la comida está incluida o el transporte son costos que ya no se asumirán. Seguros de orfandad, de salud y otros.","",true); ?>

<?php }


?>