
<?php get_header(); ?>

<div id="wrap">


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div id="primary" class="col-xs-12">
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php endwhile; endif; ?>


</div>

<?php get_footer(); ?>
