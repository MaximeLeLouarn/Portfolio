<div class="scallopContainer">

<?php
        // Get all the needed informations for different circumpstances
    $currentPostId = get_the_ID();
    $currentPostTitle = get_the_title();
    $currentPostAltText = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
    $currentPostURL = get_permalink();

    // Check if the ACF plugin is active
    if( function_exists('get_field') ):

        // Retrieving the 'imageSC' field
        $imageSC = get_field('imagesc');
        if ($imageSC) {
            // Display the image
            echo '<img src="' . esc_url($imageSC['url']) . '" alt="' . esc_attr($imageSC['alt']) . '" />';
        }

        // Retrieving the 'techIcon' field
        $techIcon = get_field('techicon');
        if ($techIcon) {
            // Display the image
            echo '<img src="' . esc_url($techIcon['url']) . '" alt="' . esc_attr($techIcon['alt']) . '" />';
        }

        // Retrieving the 'techDescription' field
        $techDescription = get_field('techdescription');
        if ($techDescription) {
            // Display the text
            echo '<p>' . esc_html($techDescription) . '</p>';
        }

    endif;


    ?>

</div>