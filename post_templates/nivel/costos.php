<?php global $post; global $colegio_nivel; 
	$new_template = get_post_meta($post->ID, 'escuela_new_template', true);
	if ($new_template=='Si' && $colegio_nivel!='') {
		$colegio_nivel = "_".$colegio_nivel;
	}
?>
<div class="scp-costos">
<table>
	<tr>
		<td class="upper azulC"><b>Matrícula</b></td>
		<td class="text-right"><?php echo escape_dollar(get_post_meta( $post->ID, 'nivel_costos_inscripcion'.$colegio_nivel, true ));	?> </td>
	</tr>
	<tr>
		<td class="upper azulC"><b>Pensión Mensual</b></td>
		<td class="text-right"><?php echo escape_dollar(get_post_meta( $post->ID, 'nivel_costos_colegiatura'.$colegio_nivel, true ));	?> </td>
	</tr>
	<tr>
		<td class="upper azulC"><b>Útiles y Materiales de clase</b></td>
		<td class="text-right"><?php echo escape_dollar(get_post_meta( $post->ID, 'nivel_costos_materiales'.$colegio_nivel, true ));	?> </td>
	</tr>
	<tr>
		<td class="upper azulC"><b>Uniformes</b></td>
		<td class="text-right"><?php echo escape_dollar(get_post_meta( $post->ID, 'nivel_costos_uniformes'.$colegio_nivel, true ));	?> </td>
	</tr>
	<tr>
		<td class="upper azulC"><b>Cuota de Alimentos</b></td>
		<td class="text-right"><?php echo escape_dollar(get_post_meta( $post->ID, 'nivel_costos_alimentos'.$colegio_nivel, true ));	?> </td>
	</tr>
	<tr>
		<td class="upper azulC"><b>Seguros y otras cuotas</b></td>
		<td class="text-right"><?php echo escape_dollar(get_post_meta( $post->ID, 'nivel_costos_seguros'.$colegio_nivel, true ));	?> </td>
	</tr>
	<tr>
		<td class="upper azulC"><b>Costo Anual de Colegio</b></td>
		<td class="text-right"><?php echo escape_dollar(get_post_meta( $post->ID, 'nivel_costos_anual'.$colegio_nivel, true ));	?> </td>
	</tr>
	<tr>
		<td class="upper azulC"><b>Becas Desde</b></td>
		<td class="text-right"><?php echo escape_dollar(get_post_meta( $post->ID, 'nivel_costos_becas_desde'.$colegio_nivel, true ));	?> </td>
	</tr>
	<tr>
		<td class="upper azulC"><b>Becas Hasta</b></td>
		<td class="text-right"><?php echo escape_dollar(get_post_meta( $post->ID, 'nivel_costos_becas_hasta'.$colegio_nivel, true ));	?> </td>
	</tr>
</table>
</div>