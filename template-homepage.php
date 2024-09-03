<?php
/*
Template Name: Homepage
*/
get_header();
?>

<!-- Content -->
<main id="primary" class="site-main">

    <section class="bubblesbgc">
        <h1>Développeur web <br>et<br> Webmaster</h1>
    </section>

    <section class="infosSkillsContainer">
        <div class="infosSkills">
                <div class="description"> <p>Bonjour, je m'appelle Maxime. En tant que développeur Web et Webmaster, je vous 
                    propose mes services pour vous créer des solutions numériques, ou vous accompagner dans les votres.</p><br>
                    <p class="strong">J'utilise, et peux vous accompagner sur les technologies et les aspects suivants (cliquez sur les perles pour plus de détails) :</p>
                </div>

            <div class="skills">

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="skill1 swiper-slide"  data-post-id="1">
                        <img class="skillop" src="<?= get_template_directory_uri() . '/assets/JSscallop.png' ?>" alt="Javascript icon inside a great scallop">
                        </div>
                        <div class="skill2 swiper-slide"  data-post-id="2">
                        <img class="skillop" src="<?= get_template_directory_uri() . '/assets/HTMLscallop.png' ?>" alt="HTML icon inside a great scallop">
                        </div>
                        <div class="skill3 swiper-slide" data-post-id="3">
                        <img class="skillop" src="<?= get_template_directory_uri() . '/assets/PHPscallop.png' ?>" alt="PHP icon inside a great scallop">
                        </div>
                        <div class="skill4 swiper-slide"  data-post-id="4">
                        <img class="skillop" src="<?= get_template_directory_uri() . '/assets/GreenITscallop.png' ?>" alt="GreenIT icon inside a great scallop">
                        </div>
                        <div class="skill5 swiper-slide"  data-post-id="5">
                            <img class="skillop" src="<?= get_template_directory_uri() . '/assets/Agilescallop.png' ?>" alt="Agile icon inside a great scallop">
                        </div>
                        <div class="skill6 swiper-slide"  data-post-id="6">
                            <img class="skillop" src="<?= get_template_directory_uri() . '/assets/CSSscallop.png' ?>" alt="CSS icon inside a great scallop">
                        </div>
                        <div class="skill7 swiper-slide"  data-post-id="7">
                            <img class="skillop" src="<?= get_template_directory_uri() . '/assets/SASSscallop.png' ?>" alt="SASS icon inside a great scallop">
                        </div>
                        <div class="skill8 swiper-slide"  data-post-id="8">
                            <img class="skillop" src="<?= get_template_directory_uri() . '/assets/Translationscallop.png' ?>" alt="Translation icon inside a great scallop">
                        </div>
                        <div class="skill9 swiper-slide"  data-post-id="9">
                            <img class="skillop" src="<?= get_template_directory_uri() . '/assets/SEOscallop.png' ?>" alt="SEO icon inside a great scallop">
                        </div>
                    </div>
                </div>
                <!-- Lightbox -->
                <div id="customLightbox" class="lightbox">
                    <div class="lightflex">
                        <div class="lightboxContainer">
                            <span class="lightboxClose">&times;</span>
                            
                            <?php
                            $skill = isset($_GET['skill']) ? sanitize_text_field($_GET['skill']) : '';
                            $args = [
                                'post_type' => 'scallop',
                                'posts_per_page' => -1,
                                'orderby' => 'name',
                                'order' => 'DESC',
                            ];
                            
                            // Only add meta query if skill is defined and not empty
                            if ($skill) {
                                $args['meta_query'] = [
                                    [
                                        'key' => 'skill',  // Ensure this key matches your ACF field or taxonomy term
                                        'value' => $skill,
                                        'compare' => '=',
                                    ]
                                ];
                            }
                            
                            $scallop = new WP_Query($args);

                    if ($scallop->have_posts()) :
                        while ($scallop->have_posts()) : $scallop->the_post();
                            // Debug output
                            echo '<!-- Post ID: ' . get_the_ID() . ' -->';
                            get_template_part('template-parts/styledScallop');
                        endwhile;

                            else :
                            echo '<p>Pas de contenu dans la noix de Saint-Jacques, contenu à venir</p>';?>
                <?php endif; 
                wp_reset_postdata(); 
                ?>
                        </div>
                    </div>
                </div>
            </div>
            <p>En résumé : JS - PHP - HTML - CSS - SASS - Méthode Agile - SEO - Backend de Wordpress - Traduction de contenu en anglais - Green IT</p>
        </div>
    </section>

</main>

<?php
get_sidebar();
get_footer();
?>