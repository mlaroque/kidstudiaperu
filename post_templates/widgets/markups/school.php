<?php 
    global $post; 
    $img_url = get_the_post_thumbnail_url($current_post->ID, 'medium');
    // echo 'output: '.$img_url;
    
    $json = array(
        "@context" => "https://schema.org",
        "@type" => "School",
        "name" => $post->post_title,
        "description" => wp_trim_words(get_the_content(), 40),
        "openingHours" => array( "Mo-Fr " . $post->escuela_ficha_horario),
        "address" => $post->escuela_contacto_direccion,
        "logo" => $img_url,
        "url" => $post->escuela_contacto_web,
        "telephone" => $post->escuela_contacto_telefono

    );

    echo '<script type="application/ld+json">' . json_encode($json, JSON_UNESCAPED_SLASHES) . '</script>';

?>
