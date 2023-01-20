<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (get_the_title()); ?></title>
    <?php wp_head(); //Pour appeler le css 
    $logo = get_field('logo_couleur', 'option');
    ?>
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() ?>/img/favicon.svg" />
    <style>
        ::-webkit-scrollbar {
            width: 15px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: white;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #F77E4B;
            border-radius: 3px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #d66231;
        }

        /* Thin Scrollbar */
        :root {
            scrollbar-color: #F77E4B white !important;
            scrollbar-width: auto !important;
        }
    </style>
</head>

<body>
    <nav class="navigation" role="navigation">
        <ul>
            <li><a href="/"><img src="<?php echo ($logo["sizes"]["medium_large"]); ?>" alt="Logo représentant un papillon" loading="lazy"></a></li>
            <li><a href="/"><?php the_field('accueil', 'option'); ?></a></li>
            <li><i></i><?php the_field('menu2', 'option'); ?>&nbsp;▼
                <ul>
                    <li><a href="/reflexes-archaiques"><?php the_field('menu3', 'option'); ?></a></li>
                    <li><a href="/methodes"><?php the_field('menu4', 'option'); ?></a></li>
                </ul>
            </li>
            <li><a href="/pourquoi-consulter"><?php the_field('menu5', 'option'); ?></a></li>
            <li><i></i><?php the_field('menu6', 'option'); ?>&nbsp;▼
                <ul>
                    <li><a href="/seances"><?php the_field('menu7', 'option'); ?></a></li>
                    <li><a href="/ateliers"><?php the_field('menu8', 'option'); ?></a></li>
                </ul>
            </li>
            <li><a href="/a-propos-de-moi"><?php the_field('menu9', 'option'); ?></a></li>
            <li><a href="/contact"><?php the_field('menu10', 'option'); ?></a></li>
        </ul>
    </nav>