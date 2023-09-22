<?php
/*
Template Name: Kontakt
*/
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <h1><?php the_title(); ?></h1>
                    <form action="#" method="post">
                        <label>Namn</label>
                        <input type="text" name="name" required />
                        <label>E-post</label>
                        <input type="email" name="email" required />
                        <label>Meddelande</label>
                        <textarea name="message" required></textarea>
                        <input type="submit" value="Skicka" />
                    </form>

                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
