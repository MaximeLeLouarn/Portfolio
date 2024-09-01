<div class="scallopContainer">

<?php
        // Get all the needed informations for different circumpstances
    $currentPostId = get_the_ID();
    $currentPostTitle = get_the_title();
    $currentPostImage = get_the_post_thumbnail_url(get_the_ID(), 'full');
    $currentPostAltText = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
    $currentPostReference= get_field('reference');
    $currentPostYear = get_the_date('Y');
    $currentPostURL = get_permalink();
    // For the taxonomies it's a bit more specific. So first we go get the terms name
    $currentPostC = wp_get_post_terms($currentPostId, 'categorie');
    $currentPostF = wp_get_post_terms($currentPostId, 'format');
    // We need then to put them into array
    $currentPostCatSlugs = array();
    $currentPostForSlugs = array();
    // And retrieve the slugs from the arrays
    if (!is_wp_error($currentPostC)) {
        foreach ($currentPostC as $term) {
            $currentPostCatSlugs[] = $term->slug;
        }
    }
    
    if (!is_wp_error($currentPostF)) {
        foreach ($currentPostF as $term) {
            $currentPostForSlugs[] = $term->slug;
        }
    }
    
    // var_dump($currentPostCatSlugs);
    // var_dump($currentPostForSlugs);
    
    // For then breaking the array into string -explanations of implode function bellow-.
    $currentPostCat = implode(',', $currentPostCatSlugs);
    $currentPostFor = implode(',', $currentPostForSlugs);

    ?>

</div>