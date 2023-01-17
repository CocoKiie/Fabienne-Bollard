<?php
/*
    Template Name:About
    */

//Chargement du header
get_header();

$title_valeur = get_field("title_value");
$photos = get_field("photos_intro");
$image1 = $photos["image1"];
$image2 = $photos["image2"];
?>

<header class="about">
    <div class="abt_header">
        <div>
            <img src="<?php echo ($image1["sizes"]["medium_large"]); ?>" alt="Image d'une jeune fille dans un champs de coquelicots">
            <img src="<?php echo ($image2["sizes"]["medium_large"]); ?>" alt="Image de personnes en rendez-vous dans un cabinet">
        </div>
        <div>
            <h1>A propos de moi</h1>
            <h2><strong>Fabienne Bollard</strong></h2>
            <p>Consultante en <dfn>Éducation Neurosensorielle et Motrice (<abbr title="Éducation Neurosensorielle et Motrice">E.N.M.</abbr>)</dfn> depuis <strong><?php the_field("exp_years"); ?></strong>, en profession libérale.</p>
        </div>
    </div>
    <div>
        <p><?php the_field("scroll_message"); ?></p>
        <img src="../wp-content/themes/usmb/img/arrow.svg" alt="flèche vers le bas">
    </div>

    <!--cercle-->
    <div></div>
    <div></div>
    <div></div>
</header>
<main>
    <aside>
        <p>Afin d’imager ce métier au nom barbare on pourrait le traduire par <strong>“ostéopathe du système nerveux”</strong>, une idée de mon fils.</p>

        <!--cercle-->
        <div></div>

    </aside>
    <section>
        <div>
            <img src="" alt="">
            <?php if ($title_valeur) : ?>
                <h3><?php echo $title_valeur; ?></h3>
            <?php endif; ?>
            <p>Toujours à l'<strong>écoute</strong> et <strong>bienveillante</strong>, je vous accompagne pour vous permettre de <strong>lever vos blocages et vous épanouir</strong>.<br>
                En respectant vos préférences, je vous propose un suivi entièrement <strong>personnalisé</strong> et <strong>adapté</strong> à votre organisation, votre emploi du temps.</p>
        </div>
        <!--soulignment-->
        <span></span>

    </section>
    <section>
        <h3>Mon histoire</h3>
        <div>
            <img src="" alt="">
            <p><strong>Professeur des écoles durant 17 ans</strong> en maternelle et en élémentaire.<br>
                J’étais <b>passionnée</b> par mon métier. Accompagner les enfants à <b>besoins spécifiques</b> était ce que j’aimais particulièrement mais j’ai souvent été confrontée à des blocages et ne pas pouvoir les sortir de leurs difficultés m’a beaucoup frustrée.</p>
        </div>
        <div>
            <img src="" alt="">
            <p>C'est mon second fils né avec une <b>anomalie cérébrale</b>, qui m'a amené à<strong>Changer de vie</strong><br>
                En 2014, pour l’aider, j’ai entrepris de me former à des méthodes d’intégration des <b>réflexes archaïques</b>, non connues en France contrairement aux Etats-Unis et au Canada. Les progrès de mon fils ont été considérables sur tous les plans ! C’est maintenant un jeune homme “bien dans ses baskets”, autonome et qui sait ce qu’il veut.</p>
        </div>
        <div>
            <img src="" alt="">
            <p><strong>Aujourd'hui</strong> je mène une vie riche humainement et intellectuellement qui me convient.<br>
                Pouvoir <b>accompagner</b>, <b>apaiser</b> et <b>résoudre</b> les difficultés de chacun, c'est ce qui me plaît dans mon métier :)</p>
        </div>
    </section>
    <section>
        <h3>Coté perso</h3>
        <div>
            <img src="" alt="">

            <!--cercle-->
            <div></div>
            <div></div>
        </div>
    </section>
</main>

<?php
//Chargement du footer
get_footer();
?>