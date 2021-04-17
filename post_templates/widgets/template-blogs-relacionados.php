<?php  
  global $post;
  global $posttype; // comes from shortcode relacionados

  $wp_post_type = get_post_type_object($posttype);
  $labels = get_post_type_labels($wp_post_type);
  $post_type_label = $labels->name;
    
  $args = array(
      'post_type' => $posttype,
      'posts_per_page' => 4,
      'post_status'=>'PUBLISH', 
      'orderby' => 'rand'
    );    
    
    $blogs = get_posts($args);

    if($posttype == "guias"){
        $title = "Te podría interesar";
        $class = "Rguias";
    } else {
        $title = "Más $post_type_label";
        $class = "R$posttype";
    }
?>


<div class="container lc_relac-cont">
  <div class="row">
    <div class="col-12 text-center">

      <h2><?php echo $title; ?></h2>

    </div>
  </div>
    <div class="row">

      <?php foreach( $blogs as $blog): ?>
        <div class="col-12 col-sm-3 col-md-3 col-lg-3">
          <div class="lc_relac-box">
            <div class="lc_relac-img">
                <a href="<?php echo get_permalink($blog->ID); ?>"><img class="lazy-img" alt="<?php echo $blog->post_title; ?>" data-src="<?php echo get_the_post_thumbnail_url($blog->ID, 'medium'); ?>"></a>
            </div>
            <div class="lc_relac-body">
              <div class="lc_relac-title">
                <a href="<?php echo get_permalink($blog->ID); ?>"><p><?php echo $blog->post_title; ?></p></a>
              </div>
            </div>
          </div>
        </div> 

    
    <?php endforeach; ?>
  </div>
  <div class="row">
    <div class="col-12 text-center">
      <?php echo ( count($blogs) == 0 ? "Proximamente" : "" );?>
    </div>
  </div>
</div>
 
    


