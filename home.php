<?php
/**
 * Template Name: Home
 * Description: Template for Home page
 *
 */

get_header();

$search_enabled = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<div class="row">
   <div class="col">
      <section class="hero">
         <img src="<?php bloginfo('template_url'); ?>/assets/images/yellow-circle-medium.svg" class="d-none d-md-block hero__yellow-circle" alt="Yellow Circle">
         <img src="<?php bloginfo('template_url'); ?>/assets/images/green-circle-small.svg" class="d-none d-md-block hero__green-circle" alt="Green Circle">
         <img src="<?php bloginfo('template_url'); ?>/assets/images/red-circle-tiny.svg" class="d-none d-md-block hero__red-circle" alt="Red Circle">
         <?php 
            $hero_image = get_field( 'hero_image' ) ?: false;
            $hero_title = get_field( 'hero_title' ) ?: false;
            $hero_description = get_field( 'hero_description' ) ?: false;
            $hero_button = get_field( 'hero_button' ) ?: false;
            $hero_button_text = get_field( 'hero_button_text' ) ?: false;         
         ?>

         <?php echo wp_get_attachment_image( $hero_image, 'full', false, ["class" => "img-fluid hero__image"] ); ?>
         <div class="hero__content">
            <h1 class="hero__title"><?php echo wp_kses_post( $hero_title ) ?></h1>
            <p class="hero__description"><?php echo esc_html( $hero_description ) ?></p>
            <div class="hero__button-wrapper">
               <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#bookingModal">
                  <?php echo esc_html( $hero_button_text ); ?>
               </button>
            </div>
         </div>
      </section>

      <section class="apartments">
         <h2 class="apartments__title">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/yellow-circle.svg" alt="Circle">
            <span><?php echo esc_html( 'Apartments' ) ?></span>
         </h2>
         <ul class="nav nav-pills apartments__tabs">
            <?php
            if ( have_rows( 'apartments' ) ) :
               $tab_count = 0;
               while ( have_rows( 'apartments' ) ) :
                  the_row();

                  $id = get_sub_field( 'id' ) ?: false;
                  $apartment_name = get_sub_field( 'apartment_name' ) ?: false;
                  ?>

                  <li class="nav-item">
                     <a class="nav-link<?php if ( !$tab_count ) { ?> active"<?php }?>" data-bs-toggle="pill" href="#<?php echo esc_html( $id ) ?>">
                        <?php echo esc_html( $apartment_name ) ?>
                     </a>
                  </li>  

                  <?php
                  $tab_count++;
               endwhile;
            endif;
            ?>
         </ul>
         <div class="tab-content apartments__content">
            <?php
            if ( have_rows( 'apartments' ) ) :
               $apartment_count = 0;
               while ( have_rows( 'apartments' ) ) :
                  the_row();

                  $id = get_sub_field( 'id' ) ?: false;
                  ?>

                  <div class="tab-pane<?php if ( !$apartment_count ) { ?> active"<?php }?>" id="<?php echo esc_html($id) ?>">
                     <div class="apartments__apartment">
                        <?php
                        if ( have_rows( 'images' ) ) :
                           while ( have_rows( 'images' ) ) :
                              the_row();

                              $image = get_sub_field( 'image' ) ?: false;
                              $button = get_sub_field( 'button' ) ?: false;
                              $button_text = get_sub_field( 'button_text' ) ?: false;
                              ?>

                              <div class="image-wrapper">
                                 <?php echo wp_get_attachment_image( $image, 'full', false, ["class" => "img-fluid"] ); ?>
                                 <?php if ( $button ) : ?>
                                    <div class="button-wrapper">
                                       <a href="<?php echo esc_url( $button ); ?>" class="btn">
                                          <?php echo esc_html( $button_text ); ?>
                                       </a>
                                    </div>
                                 <?php endif; ?>
                              </div>
                           <?php
                           endwhile;
                        endif;
                        ?>
                     </div>
                  </div>
                  <?php
                  $apartment_count++;
               endwhile;
            endif;
            ?>
         </div>
      </section>

      <section class="reviews">
         <?php 
            $reviews_title = get_field( 'reviews_title' ) ?: false;
            $reviews_number = get_field( 'reviews_number' ) ?: false;  
         ?>

         <div class="d-flex align-items-center flex-column flex-sm-row">
            <h2 class="mb-3 mb-sm-0 reviews__title">
               <img src="<?php bloginfo('template_url'); ?>/assets/images/yellow-circle.svg" alt="Circle">
               <span><?php echo esc_html( $reviews_title ) ?></span>
            </h2>
            <img src="<?php bloginfo('template_url'); ?>/assets/images/line.svg" class="d-none d-sm-block reviews__line" alt="Line">
            <p class="mb-0 reviews__number">
               <strong><?php echo esc_html( '5.0', 'art-box-dubrovnik' )?></strong>
               <?php echo esc_html( '(' ) ?><?php echo esc_html( $reviews_number ) ?> <?php echo esc_html( 'Reviews)' ) ?>
            </p>
         </div>

         <div class="reviews__reviews">
            <?php
            if ( have_rows( 'reviews' ) ) :
               while ( have_rows( 'reviews' ) ) :
                  the_row();

                  $name = get_sub_field( 'name' ) ?: false;
                  $review = get_sub_field( 'review' ) ?: false;
                  ?>

                  <div class="reviews__review">
                     <h3 class="mb-3 title"><?php echo esc_html( $name ) ?></h3>
                     <div class="mb-3 d-flex stars">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/star.svg" alt="Star">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/star.svg" alt="Star">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/star.svg" alt="Star">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/star.svg" alt="Star">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/star.svg" alt="Star">
                     </div>
                     <p class="mb-0 description"><?php echo esc_html( $review ) ?></p>    
                  </div>
                  <?php
               endwhile;
            endif;
            ?>
         </div>
      </section>

      <section class="map">
         <?php 
            $map_title = get_field( 'map_title' ) ?: false; 
         ?>

         <h2 class="map__title">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/yellow-circle.svg" alt="Circle">
            <span><?php echo esc_html( $map_title ); ?></span>
         </h2>
         <div class="map__location">
            <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.2709713484082!2d18.078338315465743!3d42.65561287916824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134c75e68cecee2f%3A0x1c711374a89958b7!2sArt%20Box%20apartments!5e0!3m2!1sen!2sba!4v1652965545043!5m2!1sen!2sba"
               width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
               referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </section>

      <section class="explore">
         <?php 
            $explore_title = get_field( 'explore_title' ) ?: false; 
         ?>

         <h2 class="explore__title">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/yellow-circle.svg" alt="Circle">
            <span><?php echo esc_html( $explore_title ); ?></span>
         </h2>

         <div class="explore__articles">
            <?php
            if ( have_rows( 'explore_articles' ) ) :
               while ( have_rows( 'explore_articles' ) ) :
                  the_row();

                  $title = get_sub_field( 'title' ) ?: false;
                  $image = get_sub_field( 'image' ) ?: false;
                  $link = get_sub_field( 'link' ) ?: false;
                  $button = get_sub_field( 'button' ) ?: false;
                  ?>

                  <div class="explore__article">
                     <a href="<?php echo esc_url( $link ); ?>">
                        <?php echo wp_get_attachment_image( $image, 'full', false, ["class" => "img-fluid image"] ); ?>
                        <button class="btn button"><?php echo esc_html( $button ); ?></button>
                     </a>
                        <a href="<?php echo esc_url( $link ); ?>">
                        <h3 class="title"><?php echo esc_html( $title ); ?></h3>
                     </a>
                  </div>
               <?php
               endwhile;
            endif;
            ?>
         </div>
      </section>

      <section class="cta">
         <?php 
         $cta_image_1 = get_field( 'cta_image_1' ) ?: false; 
         $cta_image_2 = get_field( 'cta_image_2' ) ?: false; 
         $cta_title = get_field( 'cta_title' ) ?: false; 
         $cta_button = get_field( 'cta_button' ) ?: false;
         $cta_button_text = get_field( 'cta_button_text' ) ?: false;  
         ?>

         <?php echo wp_get_attachment_image( $cta_image_1, 'full', false, ["class" => "img-fluid cta__image"] ); ?>
         <div class="cta__content-wrapper">
            <?php echo wp_get_attachment_image( $cta_image_2, 'full', false, ["class" => "d-none d-xl-block img-fluid image"] ); ?>
            <img src="<?php bloginfo('template_url'); ?>/assets/images/roses-bg.png" class="d-block d-xl-none img-fluid image" alt="Roses">
            <div class="content">
               <h2 class="title"><?php echo esc_html( $cta_title ) ?></h2>
               <div class="button-wrapper">
                  <a class="btn" data-bs-toggle="modal" data-bs-target="#bookingModal">
                     <?php echo esc_html( $cta_button_text ); ?>
                  </a>
               </div>
            </div>
         </div>
      </section>

   </div>
</div>

<?php
get_footer();


