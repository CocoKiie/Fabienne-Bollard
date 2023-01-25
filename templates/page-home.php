<?php
/*
    Template Name:Accueil
    */

//Chargement du header
get_header();

$image1 = get_field("image1");
$image2 = get_field("image2");

$imageMoteur = get_field("bloc_moteur");
$imageEmotion = get_field("bloc_emotionnal");
$imageCognitif = get_field("bloc_cognitif");

$images_method = get_field("images_method");
$image_mnri = $images_method["image_mnri"];
$image_rmti = $images_method["image_rmti"];
$image_brainball = $images_method["image_brainball"];

//Les methodes
$mnri = get_field("methode_mnri");
$paragraphe_mnri = $mnri["paragraphe_mnri"];
$titre_mnri = $mnri["title_mnri"];

$rmti = get_field("methode_rmti");
$paragraphe_rmti = $rmti["paragraphe_rmti"];
$titre_rmti = $rmti["title_rmti"];

$brainball = get_field("methode_mnri");
$paragraphe_brainball = $brainball["paragraphe_mnri"];
$titre_brainball = $brainball["title_mnri"];

//SLIDER
//Image
$img_slides = get_field("images_slider");
$img_slide_1 = $img_slides["image_slide_1"];
@$img_slide_2 = $img_slides["image_slider_2"];
@$img_slide_3 = $img_slides["image_slider_3"];
@$img_slide_4 = $img_slides["image_slider_4"];
@$img_slide_5 = $img_slides["image_slider_5"];
@$img_slide_6 = $img_slides["image_slider_6"];
//Texte
$title_slide_3 = get_field("title_slide_3");
$txt_slide_3 = get_field("txt_slide_3");
$title_slide_4 = get_field("title_slide_4");
$txt_slide_4 = get_field("txt_slide_4");
$title_slide_5 = get_field("title_slide_5");
$txt_slide_5 = get_field("txt_slide_5");
$title_slide_6 = get_field("title_slide_6");
$txt_slide_6 = get_field("txt_slide_6");

//motion design
$file_webp = get_field('video_webp');
$file_mp4 = get_field('video_mp4');
?>

<header class="accueil">
    <div class="acc_header">
        <div>
            <h1><?php the_field("title_page"); ?></h1>
            <?php the_field("accroche"); ?>
            <button aria-label="Prendre contact avec Fabienne Bollard" onclick="location.href='<?php the_field('links_rdv', 'option'); ?>'"><i></i><?php the_field("rdv"); ?></button>
        </div>
        <div>
            <img src="<?php echo ($image1["sizes"]["medium_large"]); ?>" height="<?php echo ($image1["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image1["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image1["alt"]) ?>">
            <img src="<?php echo ($image2["sizes"]["medium_large"]); ?>" height="<?php echo ($image2["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image2["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image2["alt"]) ?>">
        </div>
    </div>
    <p><a href="#decouverte"><?php the_field("scroll"); ?></a></p>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/arrow.svg" width="17" height="20" alt="flèche vers le bas">

    <!--cercle-->
    <div class="cercle1"></div>
    <div class="cercle2"></div>
    <div class="cercle3"></div>
</header>
<main>
    <section class="acc_section1" id="decouverte">
        <h2><?php the_field("title_section_1"); ?></h2>
        <h3><?php the_field("tagline_section_1"); ?></h3>
        <div>
            <video controls preload="metadata">
                <source src="<?php echo $file_mp4['url']; ?>" type="video/mp4">
                <p>Votre navigateur ne prend pas en compte la vidéo.
                    Vous pouvez la télécharger au format <a href="<?php echo $file_mp4['url']; ?>">MP4</a></p>
            </video>
            <div>
                <div>
                    <i></i>
                    <p><strong>Être consultante en <abbr title="Éducation Neurosensorielle et Motrice">E.N.M.</abbr>* c'est</strong>
                        <?php the_field("def_job"); ?></p>
                </div>
                <p><dfn id="E.N.M.">*<abbr title="Éducation Neurosensorielle et Motrice">E.N.M.</abbr>&nbsp;=&nbsp;Éducation Neurosensorielle et&nbsp;Motrice</dfn></p>
                <button aria-label="Voir plus d'informations sur les réflexes archaïques" onclick="location.href='<?php the_field('links_reflexes', 'option'); ?>'"><i></i><?php the_field("button_i_reflexes"); ?></button>
            </div>
        </div>
        <div class="caroussel">
            <div class="carousel-cell">
                <h4><?php the_field("title_slide_1"); ?></h4>
                <div>
                    <img src="<?php echo ($img_slide_1["sizes"]["medium_large"]); ?>" height="<?php echo ($img_slide_1["sizes"]["medium_large-height"]) ?>" width="<?php echo ($img_slide_1["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($img_slide_1["alt"]) ?>" loading="lazy">
                    <p><?php the_field("txt_slide_1"); ?></p>
                </div>
            </div>
            <div class="carousel-cell">
                <h4><?php the_field("title_slide_2"); ?></h4>
                <div>
                    <img src="<?php echo ($img_slide_2["sizes"]["medium_large"]); ?>" height="<?php echo ($img_slide_2["sizes"]["medium_large-height"]) ?>" width="<?php echo ($img_slide_2["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($img_slide_2["alt"]) ?>" loading="lazy">
                    <p><?php the_field("txt_slide_2"); ?></p>
                </div>
            </div>
            <?php if ($title_slide_3 || $txt_slide_3) : ?>
                <div class="carousel-cell">
                    <?php if ($title_slide_3) : ?>
                        <h4><?php echo $title_slide_3; ?></h4>
                    <?php endif; ?>
                    <?php if ($txt_slide_3) : ?>
                        <div>
                            <img src="<?php echo ($img_slide_3["sizes"]["medium_large"]); ?>" height="<?php echo ($img_slide_3["sizes"]["medium_large-height"]) ?>" width="<?php echo ($img_slide_3["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($img_slide_3["alt"]) ?>" loading="lazy">
                            <p><?php echo $txt_slide_3; ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if ($title_slide_4 || $txt_slide_4) : ?>
                <div class="carousel-cell">
                    <?php if ($title_slide_4) : ?>
                        <h4><?php echo $title_slide_4; ?></h4>
                    <?php endif; ?>
                    <?php if ($txt_slide_4) : ?>
                        <div>
                            <img src="<?php echo ($img_slide_4["sizes"]["medium_large"]); ?>" height="<?php echo ($img_slide_4["sizes"]["medium_large-height"]) ?>" width="<?php echo ($img_slide_4["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($img_slide_4["alt"]) ?>" loading="lazy">
                            <p><?php echo $txt_slide_4; ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if ($title_slide_5 || $txt_slide_5) : ?>
                <div class="carousel-cell">
                    <?php if ($title_slide_5) : ?>
                        <h4><?php echo $title_slide_5; ?></h4>
                    <?php endif; ?>
                    <?php if ($txt_slide_5) : ?>
                        <div>
                            <img src="<?php echo ($img_slide_5["sizes"]["medium_large"]); ?>" height="<?php echo ($img_slide_5["sizes"]["medium_large-height"]) ?>" width="<?php echo ($img_slide_5["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($img_slide_5["alt"]) ?>" loading="lazy">
                            <p><?php echo $txt_slide_5; ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if ($title_slide_6 || $txt_slide_6) : ?>
                <div class="carousel-cell">
                    <?php if ($title_slide_6) : ?>
                        <h4><?php echo $title_slide_6; ?></h4>
                    <?php endif; ?>
                    <?php if ($txt_slide_6) : ?>
                        <div>
                            <img src="<?php echo ($img_slide_6["sizes"]["medium_large"]); ?>" height="<?php echo ($img_slide_6["sizes"]["medium_large-height"]) ?>" width="<?php echo ($img_slide_6["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($img_slide_6["alt"]) ?>" loading="lazy">
                            <p><?php echo $txt_slide_4; ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <!--Boutons slider-->
        <div class="button">
            <button aria-label="Voir la suite du contenu" onclick="plusDivs(-1)">&#10094;</button>
            <!--Compteur-->
            <div>
                <span class="dots" onclick="currentDiv(1)"></span>
                <span class="dots" onclick="currentDiv(2)"></span>
                <?php if ($title_slide_3 || $txt_slide_3) : ?>
                    <span class="dots" onclick="currentDiv(2)"></span>
                <?php endif; ?>
                <?php if ($title_slide_4 || $txt_slide_4) : ?>
                    <span class="dots" onclick="currentDiv(2)"></span>
                <?php endif; ?>
                <?php if ($title_slide_5 || $txt_slide_5) : ?>
                    <span class="dots" onclick="currentDiv(2)"></span>
                <?php endif; ?>
                <?php if ($title_slide_6 || $txt_slide_6) : ?>
                    <span class="dots" onclick="currentDiv(2)"></span>
                <?php endif; ?>
            </div>
            <button aria-label="Voir la suite du contenu" onclick="plusDivs(1)">&#10095;</button>
        </div>
        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function currentDiv(n) {
                showDivs(slideIndex = n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("carousel-cell");
                var dots = document.getElementsByClassName("dots");

                if (n > x.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = x.length
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" rempli", "");
                }
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " rempli";
            }
        </script>

        <!--cercle-->
        <div></div>
    </section>
    <section class="acc_section2">
        <h2><?php the_field("title_section_2"); ?></h2>
        <h3><?php the_field("tagline_section_2"); ?><br>je vous accompagne pour lever vos blocages</h3>
        <div>
            <article>
                <h4>Moteurs<br>& posturaux</h4>
                <img src="<?php echo ($imageMoteur["sizes"]["medium_large"]); ?>" height="<?php echo ($imageMoteur["sizes"]["medium_large-height"]) ?>" width="<?php echo ($imageMoteur["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($imageMoteur["alt"]) ?>" loading="lazy">
                <p><?php the_field("exemples_moteur"); ?></p>
                <button aria-label="Voir les blocages moteurs et posturaux que Fabienne Bollard traite" onclick="location.href='<?php the_field('links_consultation', 'option'); ?>'"><?php the_field("button_section_2"); ?><i></i></button>
            </article>
            <article>
                <h4>Émotionnels</h4>
                <img src="<?php echo ($imageEmotion["sizes"]["medium_large"]); ?>" height="<?php echo ($imageEmotion["sizes"]["medium_large-height"]) ?>" width="<?php echo ($imageEmotion["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($imageEmotion["alt"]) ?>" loading="lazy">
                <p><?php the_field("exemples_emotion"); ?></p>
                <button aria-label="Voir les blocages émotionnels que Fabienne Bollard traite" onclick="location.href='<?php the_field('links_consultation', 'option'); ?>'"><?php the_field("button_section_2"); ?><i></i></button>
            </article>
            <article>
                <h4>Cognitifs</h4>
                <img src="<?php echo ($imageCognitif["sizes"]["medium_large"]); ?>" height="<?php echo ($imageCognitif["sizes"]["medium_large-height"]) ?>" width="<?php echo ($imageCognitif["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($imageCognitif["alt"]) ?>" loading="lazy">
                <p><?php the_field("exemples_cognitif"); ?></p>
                <button aria-label="Voir les blocages cognitifs que Fabienne Bollard traite" onclick="location.href='<?php the_field('links_consultation', 'option'); ?>'"><?php the_field("button_section_2"); ?><i></i></button>
            </article>
        </div>
    </section>
    <section class="acc_section3">
        <h2><?php the_field("title_section_3"); ?></h2>
        <h3><?php the_field("tagline_section_3"); ?></h3>
        <div>
            <article>
                <img src="<?php echo ($image_mnri["sizes"]["medium_large"]); ?>" height="<?php echo ($image_mnri["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_mnri["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_mnri["alt"]) ?>" loading="lazy">
                <div>
                    <h4><?php echo $titre_mnri; ?></h4>
                    <?php echo $paragraphe_mnri; ?>
                </div>
            </article>
            <article>
                <img src="<?php echo ($image_rmti["sizes"]["medium_large"]); ?>" height="<?php echo ($image_rmti["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_rmti["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_rmti["alt"]) ?>" loading="lazy">
                <div>
                    <h4><?php echo $titre_rmti; ?></h4>
                    <?php echo $paragraphe_rmti; ?>
                </div>
            </article>
            <article>
                <img src="<?php echo ($image_brainball["sizes"]["medium_large"]); ?>" height="<?php echo ($image_brainball["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_brainball["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_brainball["alt"]) ?>" loading="lazy">
                <div>
                    <h4><?php echo $titre_brainball; ?></h4>
                    <?php echo $paragraphe_brainball; ?>
                    <div>
            </article>
        </div>
        <button aria-label="Voir plus d'informations sur les 3 méthodes pratiquées par Fabienne Bollard" onclick="location.href='<?php the_field('links_methodes', 'option'); ?>'"><i></i><?php the_field("button_section_4"); ?></button>

        <!--Soulignment-->
        <span></span>

    </section>
    <section class="acc_section5">
        <h2><?php the_field("title_section_4"); ?></h2>
        <h3><?php the_field("tagline_section_4"); ?></h3>

        <!--cercle-->
        <div></div>
    </section>
</main>

<?php
//Chargement du footer
get_footer();
?>