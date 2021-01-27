<?php global $post; ?>

<div class="container">
  <div class="row">
  <?php 
    $args = array(
        'post_type' => 'colegio',
        'posts_per_page' => -1,
        'post_parent' => 0
      );

    $colegios = get_posts($args);

    foreach($colegios as $colegio):?>
      <?php $GLOBALS["listado_post"] = $colegio; ?>
      <?php get_template_part("post_templates/colegio/ficha");?>
 
    <?php endforeach;?>
  </div>
</div>