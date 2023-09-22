<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php bloginfo('name'); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <?php wp_head(); ?>
</head>
<body>

    <div id="wrap">

    <?php get_header(); ?>


        <main>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero">
                                <?php $hero_image = get_theme_mod('hero_image', get_template_directory_uri().'/img/city.jpg'); ?>
                                <img src="<?php echo $hero_image; ?>" />
                                <div class="text">
                                    <h1><?php echo get_theme_mod('hero_title', 'Hej och välkommen!'); ?></h1>
                                    <p><?php echo get_theme_mod('hero_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php get_footer(); ?>

</body>
</html>
