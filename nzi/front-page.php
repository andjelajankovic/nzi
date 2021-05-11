<?php get_header(); ?>
   
    <!-- header -->
    <header class="mainHeader">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1><?php the_field('naslov_u_headeru'); ?></h1>
                    <h4><? the_field('podnaslov_u_headeru'); ?></h4>
                </div>
                <div class="col-md-4">
                    <img src="<?php the_field('slika_u_headeru'); ?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </header>
  
      <!-- o nama -->
    <section class="onama pb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <img class="img-fluid" src="<?php the_field('o_nama_slika')?>" alt="">
                </div>
                <div class="col-md-7">
                    <h4 class="subHeading"> <?php the_field('o_nama_naslov'); ?> </h4>
                   <h2> Moderno, demokratsko i prosperitetno drustvo je oslobodjeno svake vrste diskriminacije </h2>
                    <p class="lead"> <?php the_field('o_nama_tekst'); ?>
                    </p>
                    <a href="" class="button">
                    <?php the_field('o_nama_dugme'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ciljevi -->
    <section class="ciljevi py-5 text-center">
        <div class="container">
            <h2 class="display-4"> Ciljevi  </h2>
            <div class="row">
                <div class="col-md-4">
                    <i class="fas fa-child"></i>
                    <h4><?php the_field('cilj_1'); ?></h4>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-feather-alt"></i>
                    <h4><?php the_field('cilj_2'); ?></h4>
                </div>
                <div class="col-md-4">
                    <i class="fab fa-fly"></i>
                    <h4><?php the_field('cilj_3'); ?></h4>
                </div>
            </div>
        </div>
    </section>
      <section class="novosti py-5">
       <div class="container">
           <h2 class="display-4 text-center">Novosti</h2>
           <div class="row">
               <?php 
               $query = new WP_Query(array('post_type' => 'post'));
               if($query ->have_posts()) : ?>
               <?php while ($query ->have_posts()): $query->the_post(); ?>
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