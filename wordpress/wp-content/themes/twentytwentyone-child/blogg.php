<?php
/*
Template Name: Bloggsida
*/
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Labb 1</title>
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <?php wp_head(); ?>
</head>
<body>



<div id="wrap">
    <?php get_header(); ?>

    <div class="mobile-search">
        <form id="searchform" class="searchform">
            <div>
                <label class="screen-reader-text">Sök efter:</label>
                <input type="text" />
                <input type="submit" value="Sök" />
            </div>
        </form>
    </div>

    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div id="primary" class="col-xs-12 col-md-9">
                        <h1>Blogg</h1>

                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'paged' => get_query_var('paged') ? get_query_var('paged') : 1
                            );
                            
                            $query = new WP_Query($args);

                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                            ?>
                        

                            <article class="blogg_posts">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>" />
                                <?php endif; ?>
                                <h2 class="title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-calendar"></i> <?php the_time('j F, Y'); ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-tag"></i> <?php the_category(', '); ?>
                                    </li>
                                </ul>
                                <?php the_content(); ?>
                            </article>

                            <?php
                                endwhile;
                                the_posts_pagination(array(
                                    'prev_text' => __('Föregående sida', 'textdomain'),
                                    'next_text' => __('Nästa sida', 'textdomain'),
                                ));
                            endif;
                            wp_reset_postdata();
                            ?>

                    </div>
                    <aside id="secondary" class="col-xs-12 col-md-3">
            <div id="sidebar">
                <ul>
                    <li>
                        <form id="searchform" class="searchform">
                            <div>
                                <label class="screen-reader-text">Sök efter:</label>
                                <input type="text" />
                                <input type="submit" value="Sök" />
                            </div>
                        </form>
                    </li>
                </ul>
                <ul role="navigation">
                    <li class="pagenav">
                        <h2>Sidor</h2>
                        <ul>
                            <li class="page_item current_page_item">
                                <a href="">Blogg</a>
                            </li>
                            <li class="page_item">
                                <a href="">Exempelsida</a>
                            </li>
                            <li class="page_item">
                                <a href="">Kontakt</a>
                            </li>
                            <li class="page_item page_item_has_children">
                                <a href="">Om mig</a>
                                <ul class="children">
                                    <li class="page_item">
                                        <a href="">Intressen</a>
                                    </li>
                                    <li class="page_item page_item_has_children">
                                        <a href="">Portfolio</a>
                                        <ul class="children">
                                            <li class="page_item">
                                                <a href="">Projekt 1</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="page_item">
                                <a href="">Startsida</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h2>Arkiv</h2>
                        <ul>
                            <li>
                                <a href="arkiv.html">oktober 2017</a>
                            </li>
                        </ul>
                    </li>
                    <li class="categories">
                        <h2>Kategorier</h2>
                        <ul>
                            <li class="cat-item">
                                <a href="">Natur</a> (1)
                            </li>
                            <li class="cat-item">
                                <a href="">Okategoriserade</a> (3)
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
                </div>
            </div>
        </section>
    </main>

</div>

<?php get_footer(); ?>

<script src="js/script.js"></script>

</body>
</html>
