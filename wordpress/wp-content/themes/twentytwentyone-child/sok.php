<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
                    <h1>Sökresultat för: <?php echo get_search_query(); ?></h1>
                    <div class="searchform-wrap">
                        <?php get_search_form(); ?>
                    </div>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/washington.jpg" /> <!-- Används för att hämta bild från temat -->
                            <h2 class="title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <ul class="meta">
                                <li>
                                    <i class="fa fa-calendar"></i> <?php the_date('j F, Y'); ?>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
                                </li>
                                <li>
                                    <i class="fa fa-tag"></i> <?php the_category(', '); ?>
                                </li>
                            </ul>
                            <?php the_excerpt(); ?>
                        </article>
                    <?php endwhile; else: ?>
                        <p>Inga resultat hittades för din sökning.</p>
                    <?php endif; ?>
                    <?php echo paginate_links(); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
