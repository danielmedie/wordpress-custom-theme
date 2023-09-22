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
                        <div class="col-xs-12 col-sm-8 col-md-6">
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/photo.jpg" alt="Bildbeskrivning" />
                        </div>
                    </div>
                </div>
            </section>
        </main>



    </div>
    <?php get_footer(); ?>


</body>
</html>
