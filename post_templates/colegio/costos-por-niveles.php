<?php

$args = array(
	'post_type' => $post->post_type,
	'posts_per_page' => -1,
    'post_parent' => $post->ID,
    'post_status' => 'publish',
    'orderby' => 'menu_order',
    'order' => 'ASC'
);

$niveles = get_posts($args);
//Para el nuevo template
$new_template = get_post_meta($post->ID, 'escuela_new_template', true);
?>

<?php if($new_template!='Si'): ?>
<h2 id="costos"> <?php echo $post->post_title; ?> Costos</h2>
<?php endif; ?>
<div class="scp-costos">
    <table>
        <tbody>
            <tr>
                <?php if($new_template!='Si'): ?>
                    <th class="upper azulC"><b></b></td>
                <?php elseif($new_template=='Si'): ?>
                    <th class="upper azulC">Nivel </td>
                <?php endif; ?>
                    <th class="upper azulC"><b>Matrícula</b></td>
                    <th class="upper azulC">Pensión </td>
                <?php if($new_template=='Si'): ?>
                    <th class="upper azulC">Costo Anual </td>
                    <?php endif; ?>
            </tr>
            <?php if($new_template=="Si"):
                $options_nivel = array("cunas","inicial","primaria","secundaria");
                foreach ($options_nivel as $option_nivel) {
                    $nivel_actual = ucfirst($option_nivel);
                    $matricula = get_post_meta($post->ID, 'nivel_costos_inscripcion_'.$option_nivel, true);
                    $matricula = str_replace('S/ ', '', $matricula);
                    $pension = get_post_meta($post->ID, 'nivel_costos_colegiatura_'.$option_nivel, true);
                    $pension = str_replace('S/ ', '', $pension);
                    $anualidad = get_post_meta($post->ID, 'nivel_costos_anual_'.$option_nivel, true);
                    $anualidad = str_replace('S/ ', '', $anualidad);
                    if($matricula!=''):
                ?>
                        <tr>
                            <td>  <?php echo $nivel_actual;?> </td>
                            <td> S/ <?php echo $matricula; ?> </td>
                            <td> S/ <?php echo $pension; ?> </td>
                            <td> S/ <?php echo $anualidad; ?> </td>
                        </tr>
                    
                <?php endif; } ?>
            <?php else: ?>
            <!---Antiguo template-->
                <?php foreach($niveles as $nivel):?>
                    <?php
                        $cats_nivel = get_the_category($nivel->ID);
                        if($cats_nivel):
                            $category = $cats_nivel[0];

                            $inscripcion = get_post_meta($nivel->ID, 'nivel_costos_inscripcion', true);
                            $colegiatura = get_post_meta($nivel->ID, 'nivel_costos_colegiatura', true);
                        
                    ?>

                    <tr>
                        <td> <?php echo $category->name;?> </td>
                        <td> <?php echo $inscripcion; ?> </td>
                        <td> <?php echo $colegiatura; ?> </td>
                    </tr>
                    <?php 
                        endif;
                    endforeach;
                ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>