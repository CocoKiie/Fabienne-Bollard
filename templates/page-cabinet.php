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
    <div>
        <div>
            <img src="<?php echo ($image1["sizes"]["medium_large"]); ?>" height="<?php echo ($image1["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image1["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image1["alt"]) ?>">
            <img src="<?php echo ($image2["sizes"]["medium_large"]); ?>" height="<?php echo ($image2["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image2["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image2["alt"]) ?>">
        </div>
        <div>
            <h1><?php the_field("title_page"); ?></h1>
            <h2><?php the_field("tagline_page"); ?></h2>
        </div>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/arrow.svg" width="17" height="20" alt="flèche vers le bas" loading="lazy">

    <!--cercle-->
    <div class="cercle1"></div>
    <div class="cercle2"></div>
    <div class="cercle3"></div>
</header>
<main>
    <section class="cab_section1">
        <h3><?php the_field("title_section_1"); ?></h3>
        <div>
            <img src="<?php echo ($image_accompagnment["sizes"]["medium_large"]); ?>" height="<?php echo ($image_accompagnment["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_accompagnment["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_accompagnment["alt"]) ?>">
            <div><?php the_field("duree_accompagnement"); ?></div>
        </div>

        <!--soulignement-->
        <span></span>
    </section>
    <section class="cab_section2">
        <div>
            <div>
                <h3><?php the_field("title_section_2"); ?></h3>
                <h4><i></i><?php the_field("sub_title_section_3"); ?></h4>
                <div><?php the_field("besoins_age"); ?></div>
            </div>
            <img src="<?php echo ($image_age["sizes"]["medium_large"]); ?>" height="<?php echo ($image_age["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_age["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_age["alt"]) ?>">
        </div>
        <div>
            <div>
                <h4><i></i><?php the_field("sub_title_section_3-2"); ?></h4>
                <div><?php the_field("besoins_individuels"); ?></div>
            </div>
            <img src="<?php echo ($image_besoins["sizes"]["medium_large"]); ?>" height="<?php echo ($image_besoins["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_besoins["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_besoins["alt"]) ?>">
        </div>

        <!--cercle-->
        <div></div>
        <div></div>
    </section>
    <section class="cab_section3">
        <h3><?php the_field("title_section_3"); ?></h3>
        <div>
            <div><img src="<?php echo ($illustration_paiement["sizes"]["medium_large"]); ?>" height="<?php echo ($illustration_paiement["sizes"]["medium_large-height"]) ?>" width="<?php echo ($illustration_paiement["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($illustration_paiement["alt"]) ?>"></div>
            <div><?php the_field("paragraphe_paiement"); ?></div>
        </div>

        <!--cercle-->
        <div></div>
        <div></div>
    </section>
</main>

<?php
//Chargement du footer
get_footer();
?>