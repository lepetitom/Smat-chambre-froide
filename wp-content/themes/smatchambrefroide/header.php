<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="body"><!-- body -->

    <div id="page" class="hfeed"><!-- #page -->
        <header id='menuBurger'>
            <div class="container">
                <div class="menu">
                    <div class="logo">
                        <a href="">
                            <img src="<?php echo theme_url; ?>/assets/img/logo-smat.png" alt="">
                        </a>
                    </div>
                    <nav class="desk-header" id="navigation">
                        <?php
                            wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                                'menu_id' => 'primary-menu',
                            )
                            );
                        ?>
                    </nav>
                    <div class="burger-icon" id="burgerIcon" onclick="switchToBurger()">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <nav class="mobile-header" id="mobile-header">
                <div class="container">
                    <?php
                        wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'menu_id' => 'primary-menu',
                        )
                        );
                    ?>
                </div>
            </nav>
        </header>

        <div id="main" class="page-<?php the_ID() ?>">
    