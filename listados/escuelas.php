<?php global $post; ?>

<div class="container">
  <div class="row">
  <?php 
    $args = array(
        'post_type' => 'escuela',
        'posts_per_page' => -1,
        'post_parent' => 0
      );

    $escuelas = get_posts($args);

    foreach($escuelas as $escuela):?>
      <?php $GLOBALS["listado_post"] = $escuela; ?>
      <?php get_template_part("post_templates/escuela/ficha");?>
 
    <?php endforeach;?>
  </div>
</div>