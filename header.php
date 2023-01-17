<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (get_the_title()); ?></title>
    <?php wp_head(); //Pour appeler le css 
    ?>
</head>

<body>
    <nav class="navigation" role="navigation">
        <ul>
            <li><a href=""><img src="../wp-content/themes/usmb/img/logo.svg" alt="Logo représentant un papillon"></a></li>
            <li><a href="">Accueil</a></li>
            <li><i></i>Concept
                <ul>
                    <li><a href="">Les réflexes archaïques</a></li>
                    <li><a href="">Les méthodes de travail</a></li>
                </ul>
            </li>
            <li><a href="">Pourquoi&nbsp;consulter&nbsp;?</a></li>
            <li><i></i>Mes prestations
                <ul>
                    <li><a href="">Séances individuelles</a></li>
                    <li><a href="">Ateliers collectifs</a></li>
                    <li><a href="">Tarifs</a></li>
                </ul>
            </li>
            <li><a href="">A&nbsp;propos&nbsp;de&nbsp;moi</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </nav>