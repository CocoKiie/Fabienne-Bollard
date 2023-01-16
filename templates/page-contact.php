<?php
/*
    Template Name:Contact
    */

//Chargement du header
get_header();

$localisation=get_field("localisation");
$arg_localisation1=get_field("arg_localisation_1");
$arg_localisation2=get_field("arg_localisation_2");
$arg_localisation3=get_field("arg_localisation_3");
?>

<header>
    <div>
        <h1>Contact</h1>
        <h2>N'hésitez pas à me <strong>contacter</strong> et ensemble évaluons vos <strong>besoin</strong></h2>
    </div>
    <div>
        <img src="" alt="Image de deux personnes se donnant la main">
        <img src="" alt="Image du cabinet">
    </div>
    <div>
        <p>prendre<br>rendez-vous</p>
        <img src="../../img/" alt="flèche vers le bas">
    </div>

    <!--soulignement-->
    <span></span>
    <span></span>

    <!--cercle-->
    <div></div>
    <div></div>
    <div></div>
</header>
<main>
    <section>
        <div>
            <img src="" alt="Portrait de Fabienne Bollard">
            <h3>Informations pratiques</h3>
            <ul>
                <li><i></i><a href="tel:0687800411">06.87.80.04.11</a></li>
                <li><i></i><a href="https://goo.gl/maps/KojEJXZsCiJk8ePd6" target="_blank">464 Route des Près Rollier<br>Zone de Grand Epagny<br>74330 Sillingy</a></li>
                <li><i></i><a href="mailto:fabienne.bollard74@gmail.com">fabienne.bollard74@gmail.com</a></li>
            </ul>
        </div>
        <div>
            <form action="" method="post">
                <fieldset>
                    <legend>Formulaire de contact</legend>
                    <label for="nom">Quel est votre nom de famille ?</label>
                    <input type="text" name="nom" id="nom" aria-labelledby="nom de famille" placeholder="exemple : Dupont" aria-required="true" required>
                    <label for="prenom">Quel est votre prénom ?</label>
                    <input type="text" name="prenom" id="prenom" aria-labelledby="prenom" placeholder="exemple : Camille" aria-required="true" required>
                    <label for="email">Quel est votre adresse e-mail ?</label>
                    <input type="email" name="email" id="email" aria-labelledby="email" aria-describedby="email-format" placeholder="exemple : dupont.camille@gmail.com" aria-required="true" required>
                    <label for="message">Écrivez votre message</label>
                    <textarea type="text" name="message" id="message" placeholder="exemple : Bonjour, j'aimerais vous rencontrer afin de..." aria-required="true" required></textarea>
                </fieldset>
                <button type="submit">Envoyer mon message</button>
            </form>
        </div>
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
    </section>
</main>
<footer>
    <p><a href="">Mentions légales</a> - <a href="">Politique de confidentialité</a> - <a href="">Plan du site</a></p>
    <p>&copy; <?php echo (date(format: "Y")); ?> Fabienne Bollard.</p>
</footer>