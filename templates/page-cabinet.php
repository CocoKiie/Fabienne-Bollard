<?php
/*
    Template Name:Seances
    */

//Chargement du header
get_header();

$image1 = get_field("image1");
$image2 = get_field("image2");
$image_accompagnment = get_field("image_accompagnement");
$illustration_paiement = get_field("illustration_paiement");
$image_besoins = get_field("image_besoin");
$image_age = get_field("image_âge");
?>

<header class="cabinet">
    <div class="cab_header">
        <div>
            <img src="<?php echo ($image1["sizes"]["medium_large"]); ?>" alt="Image d'une jeune fille dans un champs de coquelicots">
            <img src="<?php echo ($image2["sizes"]["medium_large"]); ?>" alt="Image de personnes en rendez-vous dans un cabinet">
        </div>
        <div>
            <h1>Les séances individuelles</h1>
            <h2>Vous êtes <strong>unique</strong>, votre <strong>accompagnement</strong> l'est aussi</h2>
        </div>
    </div>
    <img src="../wp-content/themes/usmb/img/arrow.svg" alt="flèche vers le bas">

    <!--cercle-->
    <div class="cercle1"></div>
    <div class="cercle2"></div>
    <div class="cercle3"></div>
</header>
<main>
    <section class="cab_section1">
        <h3>Combien de temps dure l’accompagnement&nbsp;?</h3>
        <div>
            <img src="" alt="">
            <p><?php the_field("duree_accompagnement"); ?></p>
        </div>

        <!--soulignement-->
        <span></span>
    </section>
    <section>
        <h3>Mes séances d'adaptent</h3>
        <h4><i></i>A votre âge</h4>
        <h4><i></i>A vos besoins</h4>
    </section>
    <section>
        <h3>Moyens de paiement</h3>
        <div>
            <div><img src="" alt=""></div>

        </div>
    </section>
</main>

<?php
//Chargement du footer
get_footer();
?>