<?php $theme_url = get_template_directory_uri(); ?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php  
            if ( is_front_page() ) { // Pokud je to domovská stránka (statická stránka)
                echo get_the_title( get_option( 'page_on_front' ) ); // Získá název statické domovské stránky
            } else {
                wp_title( '|', true, 'right' ); // Standardní titulek pro ostatní stránky
            }
         ?></title>
         <?php wp_head(); ?>
         <script src="<?= $theme_url ?>/script/script.js" defer></script>
         <link rel="stylesheet" href="<?= $theme_url ?>/style.css">
         <link rel="stylesheet" href="<?= $theme_url ?>/footer.css">

    </head>
    <body>
        <?=
            get_header();
        ?>

        <main id="primary" class="site-main">
            <?php
                the_content();
            ?>
        </main>

        <?php
            get_footer();
        ?>
    </body>
</html>