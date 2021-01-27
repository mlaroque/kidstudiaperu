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

?>

<h2 id="costos"> <?php echo $post->post_title; ?> Costos</h2>

<div class="scp-costos">
    <table>
        <tbody>
            <tr>
                <th class="upper azulC"><b></b></td>
                <th class="upper azulC"><b>Matrícula</b></td>
                <th class="upper azulC">Pensión </td>
            </tr>

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

        </tbody>
    </table>
</div>