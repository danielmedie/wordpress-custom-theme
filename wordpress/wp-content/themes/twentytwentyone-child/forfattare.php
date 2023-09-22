<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <article>
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                            <?php the_content(); ?>
                        </article>
                    <?php endwhile; endif; ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
