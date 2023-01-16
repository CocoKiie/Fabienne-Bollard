<?php
/*
    Template Name:Accueil
    */

//Chargement du header
get_header();

$image1 = get_field("image1");
$image2 = get_field("image2");
$title_slide_3 = get_field("title_slide_3");
$txt_slide_3 = get_field("txt_slide_3");
?>

<header class="accueil">
    <div class="acc_header">
        <div>
            <h1>L'Éducation Neurosensorielle et&nbsp;Motrice</h1>
            <h2>Un accompagnement <strong>personnalisé</strong> vers<br>votre <strong><?php the_field("accroche"); ?></strong></h2>
            <button><i></i><?php the_field("rdv"); ?></button>
        </div>
        <div>
            <img src="<?php echo ($image1["sizes"]["medium_large"]); ?>" alt="<?php echo ($image["alt"]) ?>" loading="lazy">
            <img src="<?php echo ($image2["sizes"]["medium_large"]); ?>" alt="<?php echo ($image["alt"]) ?>" loading="lazy">
        </div>
    </div>
    <p><?php the_field("scroll"); ?></p>
    <img src="../wp-content/themes/usmb/img/arrow.svg" alt="flèche vers le bas" loading="lazy">

    <!--cercle-->
    <div class="cercle1"></div>
    <div class="cercle2"></div>
    <div class="cercle3"></div>
</header>
<main>
    <section class="acc_section1">
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
        <div class="carousel" data-flickity='{ "autoPlay": 1500, "pauseAutoPlayOnHover": false, "wrapAround": true }'>
            <div class="carousel-cell-displaynone">
                <h4><?php the_field("title_slide_1"); ?></h4>
                <p><?php the_field("txt_slide_1"); ?></p>
            </div>
            <div class="carousel-cell-displaynone">
                <h4><?php the_field("title_slide_2"); ?></h4>
                <p><?php the_field("txt_slide_2"); ?></p>
            </div>
            <?php if ($title_slide_3 || $txt_slide_3) : ?>
                <div class="carousel-cell-displaynone">
                    <?php if ($title_slide_3) : ?>
                        <h4><?php echo $title_slide_3; ?></h4>
                    <?php endif; ?>
                    <?php if ($txt_slide_3) : ?>
                        <p><?php echo $txt_slide_3; ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <!--Compteur-->
        <div></div>

        <!--Boutons slider-->
        <button onclick="plusDivs(-1)">&#10094;</button>
        <button onclick="plusDivs(1)">&#10095;</button>
        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
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

        <!--fleche-->
        <span></span>
        <span></span>

        <!--cercle-->
        <div></div>
    </section>
    <section>
        <h2><?php the_field("title_section_2"); ?></h2>
        <h3><?php the_field("tagline_section_2"); ?><br>je vous accompagne pour lever vos blocages</h3>
        <article>
            <h4>Moteurs & posturaux</h4>
            <img src="" alt="">
            <p><?php the_field("exemples_moteur"); ?></p>
            <button><i></i><?php the_field("button_section_2"); ?></button>
        </article>
        <article>
            <h4>Émotionnels</h4>
            <img src="" alt="">
            <p><?php the_field("exemples_emotion"); ?></p>
            <button><i></i><?php the_field("button_section_2"); ?></button>
        </article>
        <article>
            <h4>Cognitifs</h4>
            <img src="" alt="">
            <p><?php the_field("exemples_cognitif"); ?></p>
            <button><i></i><?php the_field("button_section_2"); ?></button>
        </article>
    </section>
    <section>
        <h2><?php the_field("title_section_3"); ?></h2>
        <h3><?php the_field("tagline_section_3"); ?></h3>
        <article>
            <img src="" alt="">
            <h4>M.N.R.I du Pr Masgutova</h4>
            <p>La Méthode Neurosensorimotrice du Dr. Masgutova est une méthode manuelle douce qui permet de travailler sur&nbsp;:</p>
            <ul>
                <li>les troubles de l'<strong>attention</strong> ;</li>
                <li>la <strong>coordination</strong> ;</li>
                <li>la <strong>mémoire</strong> ;</li>
                <li>la <strong>communication</strong>.</li>
            </ul>
        </article>
        <article>
            <img src="" alt="">
            <h4>R.M.T.I du Dr Blomberg</h4>
            <p>L'Entraînement International au Mouvement Rythmique du Dr. Blomberg est une méthode de développement moteur pour tous. Elle permet d’améliorer :</p>
            <ul>
                <li>la <strong>concentration</strong> ;</li>
                <li>l'<strong>équilibre</strong> ;</li>
                <li>la fonction <strong>cérébrale global</strong> ;</li>
            </ul>
        </article>
        <article>
            <img src="" alt="">
            <h4>Brain ball de R.Pautonnier</h4>
            <p>La méthode brain ball de R. Pautonnier développe :</p>
            <ul>
                <li>la <strong>concentration</strong> ;</li>
                <li>la <strong>coordination</strong> gestuelle ;</li>
                <li>l'<strong>attention</strong> ;</li>
                <li>joue avec les <strong>sens</strong> (vue, ouïe, touché) ;</li>
            </ul>
        </article>
        <button><i></i><?php the_field("button_section_4"); ?></button>

        <!--cercle-->
        <div></div>

    </section>
    <section>
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