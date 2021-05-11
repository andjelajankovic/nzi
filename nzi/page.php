<?php 
/*
* Template Name: Main page template
*/
?>
    <?php get_header(); ?>
    <!-- header -->
    <header class="headers d-flex justify-content-center align-items-center">
        <h1><?php the_title(); ?></h1>
    </header>
    <!-- novosti -->
    <section class="novosti py-5">
        <div class="container">
            <div class="row">
               <!--42:20-->
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <div class="col-md-12">
                    <?php the_content(); ?>
                </div>
                <?php endwhile; else : ?>
                    <?php _e('Nema unetih postova'); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>