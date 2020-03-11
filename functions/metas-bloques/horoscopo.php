<?php
function horoscopo_ficha_inner_custom_box( $post ) {
	global $post;
?>
	<?php $options_signos = array(array("Aries","Aries"),array("Tauro","Tauro"),array("Géminis","Géminis"),array("Cáncer","Cáncer"),array("Leo","Leo"),array("Virgo","Virgo"),array("Libra","Libra"),array("Escorpio","Escorpio"),array("Sagitario","Sagitario"),array("Capricornio","Capricornio"),array("Acuario","Acuario"),array("Piscis","Piscis")); ?>
	<?php $options1a5 = array(array("1","1"),array("2","2"),array("3","3"),array("4","4"),array("5","5"));?>
	<?php $options_dias = array(array("lunes","Lunes"),array("martes","Martes"),array("miércoles","Miércoles"),array("jueves","Jueves"),array("viernes","Viernes"),array("sábado","Sábado"),array("domingo","Domingo"));?>
   
	<?php echo build_select("horoscopo_ficha_signo","Signo: ","un signo",$options_signos);?>
	<?php echo build_input_text("horoscopo_ficha_periodo","Periodo:","Escribir 2020 o el mes,  la semana o la fecha el periodo relevante"); ?>
	<?php echo build_select("horoscopo_ficha_amor","Amor: ","una puntuación",$options1a5);?>
	<?php echo build_select("horoscopo_ficha_dinero","Dinero: ","una puntuación",$options1a5);?>
	<?php echo build_select("horoscopo_ficha_salud","Salud: ","una puntuación",$options1a5);?>
	<?php if($post->post_parent == 53):?>
		<?php echo build_input_text("horoscopo_ficha_luna_nueva","Luna Nueva cae en: ","Texto con Fecha y texto “en signo”"); ?>
		<?php echo build_input_text("horoscopo_ficha_luna_llena","Luna Llena cae en: ","Texto con Fecha y texto “en signo”"); ?>
	<?php endif ;?>
	<?php if($post->post_parent == 53 || $post->post_parent == 144):?>
		<?php echo build_input_text("horoscopo_ficha_num_suerte","Números de la suerte: ","Escribir 2 números de 1 al 30"); ?>
	<?php endif;?>
	<?php if($post->post_parent == 144):?>
		<?php echo build_select("horoscopo_ficha_dia_semana","Tu Día de la Semana: ","un día",$options_dias);?>
	<?php endif; ?>
	
	<?php echo build_input_text("horoscopo_ficha_texto","Texto:","Escribir un breve texto que resuma el periodo y donde se dé la misión u objetivo del signo para este periodo.  Ej Este mes de marzo / Este 2020 es tu año de.","Escribir un breve texto que resuma el periodo y donde se dé la misión u objetivo del signo para este periodo.  Ej Este mes de marzo / Este 2020 es tu año de:",true); ?>
<?php
}


function horoscopo_intro_inner_custom_box( $post ) {
	global $post;
?>

<?php echo build_input_text("horoscopo_intro","Introducción:","Texto para dar  la bienvenida al lector y animarlo a continuar con el horóscopo. incluir siempre los kw “ horóscopo anual” / “horóscopo del año”  + “mes a mes”  y el signo al cual le estamos hablando.    Debe mencionar ¿Cuál será la temática de ese año? Basándose en los motivadores personales del signo, la idea es captar su atención y crear un gancho para que continúe leyendo, sin revelar demasiado lo que contiene el texto","Texto para dar  la bienvenida al lector y animarlo a continuar con el horóscopo",true); ?>

<?php

}
?>