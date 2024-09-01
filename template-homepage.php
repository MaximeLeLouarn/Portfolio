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
                <p class="strong">J'utilise, et peux vous accompagner sur les technologies et les aspects suivants :</p>
            </div>
            <div class="skills">
                <p>PHP, JS, CSS/SCSS, Backend de WP, SEO, Traduction de site en anglais pour faire du multilingue, Green IT, méthode agile.</p>
                <div class="skill1">
                    <img src="<?= get_template_directory_uri() . '/assets/JSscallop.png' ?>" alt="Javascript icon inside a great scallop">
                    <div class="openedScallop"></div>
                </div>
                
            </div>
        </div>
    </section>

</main>

<?php
get_sidebar();
get_footer();
?>