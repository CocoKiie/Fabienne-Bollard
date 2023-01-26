<?php
/*
    Template Name:Methodes
    */

//Chargement du header
get_header();

$image1 = get_field("image1");
$image2 = get_field("image2");
$image_1 = get_field("image_section1");
$image_2 = get_field("image_section2");
$image_3 = get_field("image_section3");

$paragraphe1 = get_field("paragraphe_section1");
$pourquoi1 = $paragraphe1["paragraphe_pourquoi"];
$comment1 = $paragraphe1["paragraphe_comment"];

$paragraphe2 = get_field("paragraphe_section2");
$pourquoi2 = $paragraphe2["paragraphe_pourquoi"];
$comment2 = $paragraphe2["paragraphe_comment"];

$paragraphe3 = get_field("paragraphe_section3");
$pourquoi3 = $paragraphe3["paragraphe_pourquoi"];
$comment3 = $paragraphe3["paragraphe_comment"];
?>

<header>
    <div>
        <div>
            <h1><?php the_field("title_page"); ?></h1>
            <?php the_field("tagline_page"); ?>
        </div>
        <div>
            <img src="<?php echo ($image1["sizes"]["medium_large"]); ?>" height="<?php echo ($image1["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image1["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image1["alt"]) ?>">
            <img src="<?php echo ($image2["sizes"]["medium_large"]); ?>" height="<?php echo ($image2["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image2["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image2["alt"]) ?>">
        </div>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/arrow.svg" width="17" height="20" alt="flèche vers le bas" loading="lazy">

    <!--cercle-->
    <div class="cercle1"></div>
    <div class="cercle2"></div>
    <div class="cercle3"></div>
</header>
<main>
    <section class="mtd_section1 mtd_section">
        <h3><?php the_field("title_section1"); ?></h3>
        <div>
            <img src="<?php echo ($image_1["sizes"]["medium_large"]); ?>" height="<?php echo ($image_1["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_1["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_1["alt"]) ?>" loading="lazy">
            <div>
                <div>
                    <h4>Pour quoi&nbsp;?</h4>
                    <div><?php echo $pourquoi1; ?></div>
                </div>
                <div>
                    <h4>Comment&nbsp;?</h4>
                    <div><?php echo $comment1; ?></div>
                </div>
            </div>
        </div>

        <!--cercle-->
        <div></div>
    </section>
    <section class="mtd_section2 mtd_section">
        <h3><?php the_field("title_section2"); ?></h3>
        <div>
            <img src="<?php echo ($image_2["sizes"]["medium_large"]); ?>" height="<?php echo ($image_2["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_2["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_2["alt"]) ?>" loading="lazy">
            <div>
                <div>
                    <h4>Pour quoi&nbsp;?</h4>
                    <div><?php echo $pourquoi2; ?></div>
                </div>
                <div>
                    <h4>Comment&nbsp;?</h4>
                    <div><?php echo $comment2; ?></div>
                </div>
            </div>
        </div>

        <!--cercle-->
        <div class="cercle1"></div>
        <div class="cercle2"></div>
    </section>
    <section class="mtd_section3 mtd_section">
        <h3><?php the_field("title_section3"); ?></h3>
        <div>
            <img src="<?php echo ($image_3["sizes"]["medium_large"]); ?>" height="<?php echo ($image_3["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_3["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_3["alt"]) ?>" loading="lazy">
            <div>
                <div>
                    <h4>Pour quoi&nbsp;?</h4>
                    <div><?php echo $pourquoi3; ?></div>
                </div>
                <div>
                    <h4>Comment&nbsp;?</h4>
                    <div><?php echo $comment3; ?></div>
                </div>
            </div>
        </div>

        <!--cercle-->
        <span></span>
    </section>
</main>

<?php
//Chargement du footer
get_footer();
?>