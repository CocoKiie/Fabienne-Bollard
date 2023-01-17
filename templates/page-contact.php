<?php
/*
    Template Name:Contact
    */

//Chargement du header
get_header();

$photos = get_field("photos");
$img1 = $photos["image1"];
$img2 = $photos["image2"];

$localisation = get_field("localisation");
$arg_localisation1 = get_field("arg_localisation_1");
$arg_localisation2 = get_field("arg_localisation_2");
$arg_localisation3 = get_field("arg_localisation_3");
?>

<header class="contact">
    <div class="heading">
        <div>
            <h1>Contact</h1>
            <h2>N'hésitez pas à me <strong>contacter</strong> et ensemble évaluons vos <strong>besoins</strong></h2>
        </div>
        <div>
            <img src="<?php echo ($img1["sizes"]["medium_large"]); ?>" alt="<?php echo ($image1["alt"]) ?>" alt="Image de deux personnes se donnant la main">
            <img src="<?php echo ($img2["sizes"]["medium_large"]); ?>" alt="<?php echo ($image1["alt"]) ?>" alt="Image du cabinet">
        </div>
    </div>
    <img src="../wp-content/themes/usmb/img/arrow.svg" alt="flèche vers le bas">

    <!--cercle-->
    <div class="cercle1"></div>
    <div class="cercle2"></div>
    <div class="cercle3"></div>
</header>
<main>
    <section class="cct_section1">
        <div>
            <img src="../wp-content/themes/usmb/img/fabi_portrait_fun.jpg" alt="Portrait de Fabienne Bollard">
            <h3>Informations pratiques</h3>
            <ul>
                <li><i></i><a href="tel:0687800411">06.87.80.04.11</a></li>
                <li><i></i><a href="https://goo.gl/maps/KojEJXZsCiJk8ePd6" target="_blank">464 Route des Près Rollier<br>Zone de Grand Epagny<br>74330 Sillingy</a></li>
                <li><i></i><a href="mailto:fabienne.bollard74@gmail.com">fabienne.bollard74@gmail.com</a></li>
            </ul>
        </div>
        <form method="post">
            <fieldset>
                <legend>Formulaire de contact</legend>
                <?php echo do_shortcode('[wpforms id="164" title="false"]'); ?>
            </fieldset>
        </form>
    </section>
    <section>
        <h3>Localisation</h3>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2774.3869758717196!2d6.0740369!3d45.9435508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478b84455fd16ea1%3A0xca6ee41c7f2d9480!2s464%20Rte%20des%20Pr%C3%A9s%20Rollier%2C%2074330%20Sillingy!5e0!3m2!1sfr!2sfr!4v1673972335245!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</main>
<footer>
    <p><a href="">Mentions légales</a> - <a href="">Politique de confidentialité</a> - <a href="">Plan du site</a></p>
    <p>&copy; <?php echo (date(format: "Y")); ?> Fabienne Bollard.</p>
</footer>
<?php wp_footer(); //Pour appeler le css 
?>