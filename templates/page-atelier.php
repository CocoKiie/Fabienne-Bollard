<?php
/*
    Template Name:Ateliers
    */

//Chargement du header
get_header();

$image1 = get_field("image1");
$image2 = get_field("image2");
$image_section1 = get_field("image_section1");
$image_section2 = get_field("image_section2");
?>

<header class="ateliers">
    <div class="atl_header">
        <div>
            <h1><?php the_field("title_page"); ?></h1>
            <h2><?php the_field("tagline_page"); ?></strong></h2>
        </div>
        <div>
            <img src="<?php echo ($image1["sizes"]["medium_large"]); ?>" alt="<?php echo ($image1["alt"]) ?>" loading="lazy">
            <img src="<?php echo ($image2["sizes"]["medium_large"]); ?>" alt="<?php echo ($image2["alt"]) ?>" loading="lazy">
        </div>
    </div>
    <img src="../wp-content/themes/usmb/img/arrow.svg" alt="flèche vers le bas" loading="lazy">

    <!--cercle-->
    <div class="cercle1"></div>
    <div class="cercle2"></div>
    <div class="cercle3"></div>
</header>
<main>
    <section class="atl_section1">
        <h2><?php the_field("title_section1"); ?></h2>
        <h3><?php the_field("tagline_section1"); ?></h3>
        <div>
            <img src="<?php echo ($image_section1["sizes"]["medium_large"]); ?>" alt="<?php echo ($image_section1["alt"]) ?>" loading="lazy">
            <div>
                <?php the_field("paragraphe_section1"); ?>
            </div>
        </div>
        <button><i></i><?php the_field("cta"); ?></button>

        <!--cercle-->
        <div class="cercle"></div>
    </section>
    <section class="atl_section2">
        <h2><?php the_field("title_section2"); ?></h2>
        <h3><?php the_field("tagline_section2"); ?></h3>
        <div>
            <div>
                <?php the_field("paragraphe_section2"); ?>
            </div>
            <img src="<?php echo ($image_section2["sizes"]["medium_large"]); ?>" alt="<?php echo ($image_section2["alt"]) ?>" loading="lazy">
        </div>

        <!--soulignment-->
        <span></span>
    </section>
</main>

<?php
//Chargement du footer
get_footer();
?>