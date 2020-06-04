<?php

$options_si_no = array(array("Si","Si"),array("No","No"));

function nivel_datos_adicionales_inner_custom_box( $post ){
	global $options_si_no;
?>
	<?php echo build_input_text("nivel_datos_edades","Edades:","",""); ?>
	<?php echo build_input_text("nivel_datos_alumnos","Alumnos por salón:","",""); ?>
	<?php echo build_select("nivel_datos_alumnos_especiales","Alumnos con Discapacidad / Ed. Especial:","una opción",$options_si_no);?>
	<?php echo build_input_text("nivel_datos_horario_clase","Horario de clases:","Escribir horario",""); ?>
	<?php echo build_input_text("nivel_datos_horario_extendido","Horario extendido:","Escribir horario y No si no hay",""); ?>
	<?php echo build_select("nivel_datos_transporte_escolar","Transporte Escolar:","una opción",$options_si_no);?>
	<?php echo build_select("nivel_datos_cafeteria","Cafetería o Alimentos:","una opción",$options_si_no);?>
	<?php echo build_select("nivel_datos_talleres","Talleres Culturales:","una opción",$options_si_no);?>
	<?php echo build_select("nivel_datos_instalaciones","Instalaciones Deportivas:","una opción",$options_si_no);?>
	<?php echo build_input_text("nivel_datos_seguridad","Seguridad:","Escribir hasta 4 elementos ej cámaras de vigilancia, entrega de alumnos con tarjetón.",""); ?>


<?php }

function nivel_costos_inner_custom_box( $post ){
?>
	<?php echo build_input_text("nivel_costos_inscripcion","Inscripción:","poner texto con formato $1,000",""); ?>
	<?php echo build_input_text("nivel_costos_colegiatura","Colegiatura Mensual:","$1,000",""); ?>
	<?php echo build_input_text("nivel_costos_materiales","Útiles y Materiales:","$1,000",""); ?>
	<?php echo build_input_text("nivel_costos_uniformes","Uniformes:","$1,000",""); ?>
	<?php echo build_input_text("nivel_costos_alimentos","Cuota de Alimentos:","$1,000",""); ?>
	<?php echo build_input_text("nivel_costos_seguros","Seguros y otras cuotas:","$1,000",""); ?>
	<?php echo build_input_text("nivel_costos_anual","Costo Anual de Escuela:","$1,000",""); ?>
	<?php echo build_input_text("nivel_costos_becas_desde","Becas Desde:","$",""); ?>
	<?php echo build_input_text("nivel_costos_becas_hasta","Becas Hasta:","100%",""); ?>
	<?php echo build_input_text("nivel_costos_considera","Texto:","describe si esta escuela es de un nivel socioeconómico alto, medio, bajo, donde se mencione si existe la posibilidad de solicitar becas basados en qué méritos. Se debe mencionar además los beneficios que se obtienen como si la comida está incluida o el transporte son costos que ya no se asumirán. Seguros de orfandad, de salud y otros.","",true); ?>

<?php }


?>