<?php get_header(); ?>

    <!-- header -->
    <header class="headers d-flex justify-content-center align-items-center">
        <h1><?php the_title(); ?></h1>
    </header>
    
   <!-- novosti -->
   <section class="novosti py-5">
       <div class="container">
           <h2 class="display-4 text-center">Novosti</h2>
           <div class="row">
               
               <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
               <div class="col-md-8">
                   <a href="<?php the_permalink(); ?>">
                      <div class="fetured-image">
                          <?php the_post_thumbnail(); ?>
                      </div>
                   </a>
                   <p class="meta">
                     <?php the_author(); ?> | <?php echo get_the_date();  ?> 
                   </p>
                   <?php the_content(); ?>
               </div>
               <?php endwhile; else : ?>
                   <?php _e('Nema unetih postova'); ?>
               <?php endif; ?>
               
               <div class="col-md-4">
                   <?php get_sidebar(); ?>
               </div>
               
           </div>
       </div>
   </section>
<?php get_footer(); ?>