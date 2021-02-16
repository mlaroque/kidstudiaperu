

  <?php  
  global $post;
  global $posttype; // comes from shortcode relacionados

  $wp_post_type = get_post_type_object($posttype);
  $labels = get_post_type_labels($wp_post_type);
  $post_type_label = $labels->name;
    
  $args = array(
      'post_type' => $posttype,
      'posts_per_page' => 4,
      'post_status'=>'draft',//cambiar a PUBLISH
      'orderby' => 'rand'
    );    
    
    $blogs = get_posts($args);

    if($posttype == "guia"){
        $title = "Te podría interesar";
        $class = "RguiasBox";
    } else {
        $title = "Más $post_type_label";
        $class = "relac-$posttype";
    }
?>
<div class="container wRelac mt-3">
  <div class="row">
    <div class="col-12 text-center">

      <h2><?php echo $title; ?></h2>

    </div>
  </div>
    <div class="row">

      <?php foreach( $blogs as $blog): ?>
        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
          <div class="<?php echo $class; ?>">
            <a href="<?php echo get_permalink($blog->ID); ?>">
            <div class="RguiasImg">
              <img class="js-lazy-image card-img-top" alt="<?php echo $blog->post_title; ?>" src="<?php echo get_the_post_thumbnail_url($blog->ID, 'medium'); ?>">
            </div>
                <div class="RguiasTit">
                    <h2><?php echo $blog->post_title; ?></h2>
                </div>  
                </a>      
              </div>
          </div>

    
    <?php endforeach; ?>
  </div>
</div>

<?php echo ( count($blogs) == 0 ? "Proximamente" : "" );?>