<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo(get_the_title());?></title>
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
    <a href="/"><img src="<?php echo ($logo["sizes"]["medium_large"]); ?>" 
    height="<?php echo($logo["sizes"]["medium_large-height"])?>" 
    width="<?php echo($logo["sizes"]["medium_large-width"])?>"
    alt="<?php echo($logo["alt"])?>"></a>
    <?php wp_nav_menu( array( 'theme_location' => 'Menu-principal' ) );?>
    </nav>