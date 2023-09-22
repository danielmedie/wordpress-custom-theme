<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article>
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url(); ?>" />
                            <?php endif; ?>
                            <h2 class="title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <ul class="meta">
                                <li>
                                    <i class="fa fa-calendar"></i> <?php the_date('j F, Y'); ?>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i> <?php the_author(); ?>
                                </li>
                                <li>
                                    <i class="fa fa-tag"></i> <?php the_category(', '); ?>
                                </li>
                            </ul>
                            <?php the_content(); ?>
                        </article>
                    <?php endwhile; endif; ?>
                    <?php the_posts_pagination(); ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
