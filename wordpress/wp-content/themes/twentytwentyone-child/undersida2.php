<?php get_header(); ?>

<div id="wrap">

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-sm-6">
                    <a class="logo" href="<?php echo home_url(); ?>">Labb 1</a>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <?php get_search_form(); ?>
                </div>
                <div class="col-xs-4 text-right visible-xs">
                    <div class="mobile-menu-wrap">
                        <i class="fa fa-search"></i>
                        <i class="fa fa-bars menu-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="mobile-search">
        <?php get_search_form(); ?>
    </div>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                    <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
                        <ul class="side-menu">
                            <li>
                                <a href="<?php echo site_url('/undersida/'); ?>">Undersida</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/undersida2/'); ?>">Undersida 2</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/undersida3/'); ?>">Undersida 3</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/undersida4/'); ?>">Undersida 4</a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </section>
    </main>
    <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>
