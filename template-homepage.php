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
                    <p class="strong">J'utilise, et peux vous accompagner sur les technologies et les aspects suivants (cliquez sur la perle pour plus de détails) :</p>
                </div>

            <div class="skills">
                    <?php
                    $photo = new WP_Query([
                    'post_type' => 'scallop',
                    'posts_per_page' => -1,
                    'orderby' => 'name',
                    'order' => 'DESC',]); 
                    ?> 

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="skill1 swiper-slide" data-skill="javascript">
                            <img class="skillop" src="<?= get_template_directory_uri() . '/assets/JSscallop.png' ?>" alt="Javascript icon inside a great scallop">
                        </div>
                        <div class="skill2 swiper-slide" data-skill="html">
                            <img class="skillop" src="<?= get_template_directory_uri() . '/assets/HTMLscallop.png' ?>" alt="HTML icon inside a great scallop">
                        </div>
                        <div class="skill3 swiper-slide" data-skill="php">
                            <img class="skillop" src="<?= get_template_directory_uri() . '/assets/PHPscallop.png' ?>" alt="PHP icon inside a great scallop">
                        </div>
                        <div class="skill4 swiper-slide" data-skill="greenit">
                            <img class="skillop" src="<?= get_template_directory_uri() . '/assets/GreenITscallop.png' ?>" alt="GreenIT icon inside a great scallop">
                        </div>
                        <div class="skill5 swiper-slide" data-skill="agile">
                            <img class="skillop" src="<?= get_template_directory_uri() . '/assets/Agilescallop.png' ?>" alt="Agile icon inside a great scallop">
                        </div>
                        <div class="skill6 swiper-slide" data-skill="css">
                            <img class="skillop" src="<?= get_template_directory_uri() . '/assets/CSSscallop.png' ?>" alt="CSS icon inside a great scallop">
                        </div>
                        <div class="skill7 swiper-slide" data-skill="sass">
                            <img class="skillop" src="<?= get_template_directory_uri() . '/assets/SASSscallop.png' ?>" alt="SASS icon inside a great scallop">
                        </div>
                        <div class="skill8 swiper-slide" data-skill="translation">
                            <img class="skillop" src="<?= get_template_directory_uri() . '/assets/Translationscallop.png' ?>" alt="Translation icon inside a great scallop">
                        </div>
                        <div class="skill9 swiper-slide" data-skill="seo">
                            <img class="skillop" src="<?= get_template_directory_uri() . '/assets/SEOscallop.png' ?>" alt="SEO icon inside a great scallop">
                        </div>
                    </div>
                </div>
            </div>
            <p>En résumé : JS - PHP - HTML - CSS - SASS - Méthode Agile - SEO - Traduction de contenu en anglais - Green IT</p>
        </div>
    </section>

</main>

<?php
get_sidebar();
get_footer();
?>