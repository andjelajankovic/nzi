    <!-- partneri -->
    <section class="partneri container-fluid py-5">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="<?php echo esc_url(get_template_directory_uri())?>/partneri/Embassy-Netherlands.jpg" alt="">
            </div>
            <div class="item">
                <img src="<?php echo esc_url(get_template_directory_uri())?>/partneri/logosbeneficaireserasmusleft_en.jpg" alt="">
            </div>
            <div class="item">
                <img src="<?php echo esc_url(get_template_directory_uri())?>/partneri/Ministarstvo-omladine-i-sporta-logo.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo esc_url(get_template_directory_uri())?>/partneri/ministartstvo-trgovine-turizma-i-telekomunikacija.jpg" alt="">
            </div>
            <div class="item">
                <img src="<?php echo esc_url(get_template_directory_uri())?>/partneri/unnamed.jpg" alt="">
            </div>
            <div class="item">
                <img src="<?php echo esc_url(get_template_directory_uri())?>/partneri/unnamed-2.jpg" alt="">
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer class="py-5">
        <div class="container">
            <div class="row">
                <?php if(is_active_sidebar('footer-1')):?>
                <?php dynamic_sidebar('footer-1'); ?>
                <?php endif; ?>
                <?php if(is_active_sidebar('footer-2')):?>
                <?php dynamic_sidebar('footer-2'); ?>
                <?php endif; ?>
                <?php if(is_active_sidebar('footer-3')):?>
                <?php dynamic_sidebar('footer-3'); ?>
                <?php endif; ?>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    </script>
    <?php wp_footer(); ?>
    </body>

    </html>
