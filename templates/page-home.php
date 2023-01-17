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


$img_slides = get_field("images_slider");
$img_slide_1 = $img_slides["image_slide_1"];
@$img_slide_2 = $img_slides["image_slide_2"];
@$img_slide_3 = $img_slides["image_slide_3"];
@$img_slide_4 = $img_slides["image_slide_4"];
@$img_slide_5 = $img_slides["image_slide_5"];
@$img_slide_6 = $img_slides["image_slide_6"];

$title_slide_3 = get_field("title_slide_3");
$txt_slide_3 = get_field("txt_slide_3");
$title_slide_4 = get_field("title_slide_4");
$txt_slide_4 = get_field("txt_slide_4");
$title_slide_5 = get_field("title_slide_5");
$txt_slide_5 = get_field("txt_slide_5");
$title_slide_6 = get_field("title_slide_6");
$txt_slide_6 = get_field("txt_slide_6");
?>

<header class="accueil">
    <div class="acc_header">
        <div>
            <h1>L'Éducation Neurosensorielle et&nbsp;Motrice</h1>
            <h2>Un accompagnement <strong>personnalisé</strong> vers<br>votre <strong><?php the_field("accroche"); ?></strong></h2>
            <button><i></i><?php the_field("rdv"); ?></button>
        </div>
        <div>
            <img src="<?php echo ($image1["sizes"]["medium_large"]); ?>" alt="<?php echo ($image1["alt"]) ?>" loading="lazy">
            <img src="<?php echo ($image2["sizes"]["medium_large"]); ?>" alt="<?php echo ($image2["alt"]) ?>" loading="lazy">
        </div>
    </div>
    <p><a href="#decouverte"><?php the_field("scroll"); ?></a></p>
    <img src="../wp-content/themes/usmb/img/arrow.svg" alt="flèche vers le bas" loading="lazy">

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
            <video controls preload="metadata" poster="image_poster.png">
                <source src="/media/cc0-videos/flower.webm" type="video/webm">
                <source src="/media/cc0-videos/flower.mp4" type="video/mp4">
                <p>Votre navigateur ne prend pas en compte la vidéo.
                    Vous pouvez la télécharger au format <a href="/media/cc0-videos/flower.mp4">MP4</a></p>
            </video>
            <div>
                <div>
                    <i></i>
                    <p><strong>Être consultante en <abbr title="Éducation Neurosensorielle et Motrice">E.N.M.</abbr>* c'est</strong>
                        <?php the_field("def_job"); ?></p>
                </div>
                <p><dfn id="E.N.M.">*<abbr title="Éducation Neurosensorielle et Motrice">E.N.M.</abbr>&nbsp;=&nbsp;Éducation Neurosensorielle et&nbsp;Motrice</dfn></p>
                <button><i></i><?php the_field("button_i_reflexes"); ?></button>
            </div>
        </div>
        <div class="caroussel">
            <div class="carousel-cell">
                <h4><?php the_field("title_slide_1"); ?></h4>
                <div>
                    <img src="<?php echo ($img_slide_1["sizes"]["medium_large"]); ?>" alt="" loading="lazy">
                    <p><?php the_field("txt_slide_1"); ?></p>
                </div>
            </div>
            <div class="carousel-cell">
                <h4><?php the_field("title_slide_2"); ?></h4>
                <div>
                    <img src="<?php echo ($img_slide_2["sizes"]["medium_large"]); ?>" alt="" loading="lazy">
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
                            <img src="<?php echo ($img_slide_3["sizes"]["medium_large"]); ?>" alt="" loading="lazy">
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
                            <img src="<?php echo ($img_slide_4["sizes"]["medium_large"]); ?>" alt="" loading="lazy">
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
                            <img src="<?php echo ($img_slide_5["sizes"]["medium_large"]); ?>" alt="" loading="lazy">
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
                            <img src="<?php echo ($img_slide_6["sizes"]["medium_large"]); ?>" alt="" loading="lazy">
                            <p><?php echo $txt_slide_4; ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <!--Boutons slider-->
        <div class="button">
            <button onclick="plusDivs(-1)">&#10094;</button>
            <!--Compteur-->
            <div>1 sur 2</div>
            <button onclick="plusDivs(1)">&#10095;</button>
        </div>
        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("carousel-cell");
                if (n > x.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = x.length
                }
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[slideIndex - 1].style.display = "block";
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
                <img src="<?php echo ($imageMoteur["sizes"]["medium_large"]); ?>" alt="<?php echo ($imageMoteur["alt"]) ?>" loading="lazy">
                <p><?php the_field("exemples_moteur"); ?></p>
                <button><?php the_field("button_section_2"); ?><i></i></button>
            </article>
            <article>
                <h4>Émotionnels</h4>
                <img src="<?php echo ($imageEmotion["sizes"]["medium_large"]); ?>" alt="<?php echo ($imageEmotion["alt"]) ?>" loading="lazy">
                <p><?php the_field("exemples_emotion"); ?></p>
                <button><?php the_field("button_section_2"); ?><i></i></button>
            </article>
            <article>
                <h4>Cognitifs</h4>
                <img src="<?php echo ($imageCognitif["sizes"]["medium_large"]); ?>" alt="<?php echo ($imageCognitif["alt"]) ?>" loading="lazy">
                <p><?php the_field("exemples_cognitif"); ?></p>
                <button><?php the_field("button_section_2"); ?><i></i></button>
            </article>
        </div>
    </section>
    <section class="acc_section3">
        <h2><?php the_field("title_section_3"); ?></h2>
        <h3><?php the_field("tagline_section_3"); ?></h3>
        <div>
            <article>
                <img src="<?php echo ($image_mnri["sizes"]["medium_large"]); ?>" alt="" loading="lazy">
                <div>
                    <h4>M.N.R.I du Pr Masgutova</h4>
                    <p>La Méthode Neurosensorimotrice du Dr. Masgutova est une méthode manuelle douce qui permet de travailler sur&nbsp;:</p>
                    <ul>
                        <li>les troubles de l'<strong>attention</strong> ;</li>
                        <li>la <strong>coordination</strong> ;</li>
                        <li>la <strong>mémoire</strong> ;</li>
                        <li>la <strong>communication</strong>.</li>
                    </ul>
                </div>
            </article>
            <article>
                <img src="<?php echo ($image_rmti["sizes"]["medium_large"]); ?>" alt="" loading="lazy">
                <div>
                    <h4>R.M.T.I du Dr Blomberg</h4>
                    <p>L'Entraînement International au Mouvement Rythmique du Dr. Blomberg est une méthode de développement moteur pour tous. Elle permet d’améliorer :</p>
                    <ul>
                        <li>la <strong>concentration</strong> ;</li>
                        <li>l'<strong>équilibre</strong> ;</li>
                        <li>la fonction <strong>cérébrale global</strong> ;</li>
                    </ul>
                </div>
            </article>
            <article>
                <img src="<?php echo ($image_brainball["sizes"]["medium_large"]); ?>" alt="" loading="lazy">
                <div>
                    <h4>Brain ball de R.Pautonnier</h4>
                    <p>La méthode brain ball de R. Pautonnier développe :</p>
                    <ul>
                        <li>la <strong>concentration</strong> ;</li>
                        <li>la <strong>coordination</strong> gestuelle ;</li>
                        <li>l'<strong>attention</strong> ;</li>
                        <li>joue avec les <strong>sens</strong> (vue, ouïe, touché) ;</li>
                    </ul>
                    <div>
            </article>
        </div>
        <button><i></i><?php the_field("button_section_4"); ?></button>

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