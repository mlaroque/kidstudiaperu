<?php global $post; ?>

<div class="container">
  <div class="row">
  <?php
    //Dichiarazione Loop Personalizzato
    $args = array(
        'post_type' => 'guia',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC'
    );

    $posts = get_posts($args);
    $count = 0;
    
    //Esecuzione Loop Personalizzato
    foreach($posts as $post_guia):
      $count = $count + 1;  
?>


    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
      <div class="lc_card shadow">
        <a href="<?php echo get_permalink($post_guia->ID); ?>" class="list-item-thumb">
          <div class="lc_card-img">
            <img class="js-lazy-image card-img-top" alt="<?php echo $post_guia->post_title; ?>" src="<?php echo get_the_post_thumbnail_url($post_guia->ID, 'medium'); ?>">
          </div>
          <div class="lc_card-body">
            <div class="lc_card-title">
              <h2><?php echo $post_guia->post_title; ?></h2>
            </div>
            <div class="lc_card-desc">
              <p><?php echo wp_trim_words( $post_guia->post_content, 45, '...' );?></p>
            </div>
          </div>
        </a>
      </div>
    </div>

<?php
  endforeach;
?>


  </div>
</div>