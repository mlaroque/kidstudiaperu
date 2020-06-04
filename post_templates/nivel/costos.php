<?php global $post; ?>
<div class="scp-costos">
<table>
	<tr>
		<td class="upper azulC"><b>Inscripción</b></td>
		<td class="text-right"><?php echo escape_dollar(get_post_meta( $post->ID, 'nivel_costos_inscripcion', true ));	?> </td>
	</tr>
	<tr>
		<td class="upper azulC"><b>Colegiatura Mensual</b></td>
		<td class="text-right"><?php echo escape_dollar(get_post_meta( $post->ID, 'nivel_costos_colegiatura', true ));	?> </td>
	</tr>
	<tr>
		<td class="upper azulC"><b>Útiles y Materiales</b></td>
		<td class="text-right"><?php echo escape_dollar(get_post_meta( $post->ID, 'nivel_costos_materiales', true ));	?> </td>
	</tr>
	<tr>
		<td class="upper azulC"><b>Uniformes</b></td>
		<td class="text-right"><?php echo escape_dollar(get_post_meta( $post->ID, 'nivel_costos_uniformes', true ));	?> </td>
	</tr>
	<tr>
		<td class="upper azulC"><b>Cuota de Alimentos</b></td>
		<td class="text-right"><?php echo escape_dollar(get_post_meta( $post->ID, 'nivel_costos_alimentos', true ));	?> </td>
	</tr>
	<tr>
		<td class="upper azulC"><b>Seguros y otras cuotas</b></td>
		<td class="text-right"><?php echo escape_dollar(get_post_meta( $post->ID, 'nivel_costos_seguros', true ));	?> </td>
	</tr>
	<tr>
		<td class="upper azulC"><b>Costo Anual de Escuela</b></td>
		<td class="text-right"><?php echo escape_dollar(get_post_meta( $post->ID, 'nivel_costos_anual', true ));	?> </td>
	</tr>
	<tr>
		<td class="upper azulC"><b>Becas Desde</b></td>
		<td class="text-right"><?php echo escape_dollar(get_post_meta( $post->ID, 'nivel_costos_becas_desde', true ));	?> </td>
	</tr>
	<tr>
		<td class="upper azulC"><b>Becas Hasta</b></td>
		<td class="text-right"><?php echo escape_dollar(get_post_meta( $post->ID, 'nivel_costos_becas_hasta', true ));	?> </td>
	</tr>
</table>
</div>