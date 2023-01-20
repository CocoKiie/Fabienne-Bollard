<?php
//Chargement du header
get_header();
?>

<main>
    <section class="erreur404">
        <div>
            <p>4<strong>0</strong>4</p>
        </div>
        <div>
            <p>Page <strong>indisponible</strong></p>
            <button onclick="location.href='<?php the_field('links_rdv', 'option'); ?>'"><i></i>Retour sur la page d'accueil</button>
        </div>

        <!--cercle-->
        <div class="cercle1"></div>
        <div class="cercle2"></div>
        <div class="cercle3"></div>
    </section>
</main>

<?php
//Chargement du footer
get_footer();
?>