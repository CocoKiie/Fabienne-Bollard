<?php
/*
    Template Name:Contact
    */

//Chargement du header
get_header();

$photos = get_field("photos");
$img1 = $photos["image1"];
$img2 = $photos["image2"];

$portrait = get_field("portrait");

$localisation = get_field("localisation");
$arg_localisation1 = get_field("arg_localisation_1");
$arg_localisation2 = get_field("arg_localisation_2");
$arg_localisation3 = get_field("arg_localisation_3");
?>

<header>
    <div>
        <div>
            <h1><?php the_field("title_page"); ?></h1>
            <?php the_field("tagline_contact"); ?>
        </div>
        <div>
            <img src="<?php echo ($img1["sizes"]["medium_large"]); ?>" height="<?php echo ($img1["sizes"]["medium_large-height"]) ?>" width="<?php echo ($img1["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($img1["alt"]) ?>">
            <img src="<?php echo ($img2["sizes"]["medium_large"]); ?>" height="<?php echo ($img2["sizes"]["medium_large-height"]) ?>" width="<?php echo ($img2["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($img2["alt"]) ?>">
        </div>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/arrow.svg" width="17" height="20" alt="flèche vers le bas" loading="lazy">

    <!--cercle-->
    <div class="cercle1"></div>
    <div class="cercle2"></div>
    <div class="cercle3"></div>
</header>
<main>
    <section class="cct_section1">
        <div>
            <img src="<?php echo ($portrait["sizes"]["medium_large"]); ?>" alt="<?php echo ($portrait["alt"]) ?>" height="<?php echo ($portrait["sizes"]["medium_large-height"]) ?>" width="<?php echo ($portrait["sizes"]["medium_large-width"]) ?>">
            <h3><?php the_field("title_section_1"); ?></h3>
            <ul>
                <li><i></i><a title="Téléphoner à Fabienne Bollard" href="tel:0687800411">06 87 80 04 11</a></li>
                <li><i></i><a title="Voir la localisation du cabinet de Fabienne Bollard" href="https://goo.gl/maps/KojEJXZsCiJk8ePd6" target="_blank">464 Route des Près Rollier<br>Zone de Grand Epagny<br>74330 Sillingy</a></li>
                <li><i></i><a title="Envoyer un mail à Fabienne Bollard" href="mailto:fabienne.bollard74@gmail.com">fabienne.bollard74@gmail.com</a></li>
            </ul>
        </div>
        <form method="post">
            <fieldset>
                <legend><?php the_field("legend_form"); ?></legend>
                <?php echo do_shortcode('[wpforms id="471" title="false"]'); ?>
            </fieldset>
        </form>
    </section>
    <section class="cct_section2">
        <h3><?php the_field("title_section_2"); ?></h3>
        <div>
            <?php if ($arg_localisation1 || $localisation || $arg_localisation2 || $arg_localisation3) : ?>
                <ul>
                    <?php if ($localisation) : ?>
                        <li><?php echo $localisation; ?></li>
                    <?php endif; ?>
                    <?php if ($arg_localisation1) : ?>
                        <li><?php echo $arg_localisation1; ?></li>
                    <?php endif; ?>
                    <?php if ($arg_localisation2) : ?>
                        <li><?php echo $arg_localisation2; ?></li>
                    <?php endif; ?>
                    <?php if ($arg_localisation3) : ?>
                        <li><?php echo $arg_localisation3; ?></li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>
            <iframe title="Carte généré par Google Map afin de mieux visualiser la localisation du cabinet de Fabienne Bollard" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2774.3869758717196!2d6.0740369!3d45.9435508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478b84455fd16ea1%3A0xca6ee41c7f2d9480!2s464%20Rte%20des%20Pr%C3%A9s%20Rollier%2C%2074330%20Sillingy!5e0!3m2!1sfr!2sfr!4v1673972335245!5m2!1sfr!2sfr" width="630" height="241" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</main>
<footer class="cct-footer">
    <p><a title="ALler sur la page des légalités du site web" href="/legalite">Légalités</a> - <a title="ALler sur la page Plan du site" href="/sitemap.xml" target="_blank">Plan du site</a></p>
    <p>&copy; <?php echo (date(format: "Y")); ?> Fabienne Bollard.</p>
</footer>
<?php wp_footer(); //Pour appeler le css 
?>