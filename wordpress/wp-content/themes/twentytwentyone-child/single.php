<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <?php while (have_posts()) : the_post(); ?>
                        <article>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/washington.jpg" /> <!-- Används för att hämta bild från temat -->
                            <h1 class="title"><?php the_title(); ?></h1>
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
                            <?php the_content(); ?>
                        </article>
                    <?php endwhile; ?>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <!-- Din sidebar här -->
                </aside>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
