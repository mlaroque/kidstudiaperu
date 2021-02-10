

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
        $class = "relacGuias";
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
        <div class="col-sm-6 col-md-3">
          <div class="card shadow-sm mb-3 <?php echo $class; ?>">
            <div class="card-img">
              <img class="js-lazy-image card-img-top" alt="<?php echo $blog->post_title; ?>" src="<?php echo get_the_post_thumbnail_url($blog->ID, 'medium'); ?>">
            </div>
                <div class="card-body">
                  <p class="card-title mb-2 lhn"><b>
                    <a class="stretched-link" href="<?php echo get_permalink($blog->ID); ?>"><?php echo $blog->post_title; ?> </a>
                  </b></p>
                </div>        
              </div>
          </div>

    
    <?php endforeach; ?>
  </div>
</div>

<?php echo ( count($blogs) == 0 ? "Proximamente" : "" );?>