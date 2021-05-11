<?php get_header(); ?>

    <!-- header -->
    <header class="headers d-flex justify-content-center align-items-center">
        <h1>Novosti</h1>
    </header>
    
   <!-- novosti -->
   <section class="novosti py-5">
       <div class="container">
           <h2 class="display-4 text-center">Novosti</h2>
           <div class="row">
               
               <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
               <div class="col-md-4">
                   <a href="<?php the_permalink(); ?>">
                      <div class="fetured-image">
                          <?php the_post_thumbnail(); ?>
                      </div>
                   </a>
                   <p class="meta">
                     <?php the_author(); ?> | <?php echo get_the_date();  ?> 
                   </p>
                   <h3 class="py-3"> <?php the_title(); ?> </h3>
                   <?php the_excerpt(); ?>
                   <a href="<?php the_permalink(); ?>" class="button">
                   <?php _e('Procitaj ceo tekst'); ?>
                  </a>
               </div>
               <?php endwhile; else : ?>
                   <?php _e('Nema unetih postova'); ?>
               <?php endif; ?>
           </div>
       </div>
   </section>
   <?php get_footer(); ?>