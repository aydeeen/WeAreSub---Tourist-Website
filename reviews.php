<?php
/**
 * Template Name: Reviews
 * Description: Template for Reviews page
 *
 */

get_header();

?>

<div class="row">
   <div class="col">
 
      <section class="page-reviews">
         <?php 
            $reviews_hero_bg = get_field( 'reviews_hero_bg' ) ?: false;  
            $reviews_hero_title = get_field( 'reviews_hero_title' ) ?: false;
            $reviews_number_counter = get_field( 'reviews_number_counter' ) ?: false;
         ?>

         <div class="page-reviews__hero">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/yellow-circle-medium.svg" class="d-none d-lg-block yellow-circle" alt="Yellow Circle">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/blue-circle.svg" class="d-none d-lg-block blue-circle" alt="Blue Circle">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/red-circle-tiny.svg" class="d-none d-lg-block red-circle" alt="Red Circle">
            <?php echo wp_get_attachment_image( $reviews_hero_bg, 'full', false, ["class" => "img-fluid image"] ); ?>
            <h2 class="mb-3 mb-sm-0 title"><?php echo wp_kses_post( $reviews_hero_title ) ?></h2>
            <div class="mb-0 number-box">
               <img src="<?php bloginfo('template_url'); ?>/assets/images/star-big.svg" alt="Star">
               <div class="number">
                  <p><span><?php echo esc_html( '5.0 ', 'art-box-dubrovnik' )?></span><?php echo esc_html( '(' ) ?><?php echo esc_html( $reviews_number_counter ) ?> <?php echo esc_html( 'Reviews)' ) ?></p>
                  <p>
                     <?php echo esc_html( 'From', 'art-box-dubrovnik' )?>
                     <a href="<?php echo esc_url( 'https://www.airbnb.ba/rooms/36268775?_set_bev_on_new_domain=1653672588_OWJlNTQ5NjgzNDYw&source_impression_id=p3_1653672589_fZ%2B3l%2FhP%2BuzAkifL' ); ?>" target="_blank"><?php echo esc_html( 'Airbnb', 'art-box-dubrovnik' )?></a>
                     <?php echo esc_html( 'and', 'art-box-dubrovnik' )?>
                     <a href="<?php echo esc_url( '#' ); ?>" target="_blank"><?php echo esc_html( 'Booking', 'art-box-dubrovnik' )?></a>
                  </p>
               </div>
            </div>
         </div>

         <div class="page-reviews__reviews">
            <div class="left-side">
               <?php
               if ( have_rows( 'reviews_left' ) ) :
                  while ( have_rows( 'reviews_left' ) ) :
                     the_row();

                     $name = get_sub_field( 'name' ) ?: false;
                     $description = get_sub_field( 'description' ) ?: false;
                     ?>

                     <div class="page-reviews__review">
                        <h3 class="mb-3 title"><?php echo esc_html( $name ) ?></h3>
                        <div class="mb-3 d-flex stars">
                           <img src="<?php bloginfo('template_url'); ?>/assets/images/star.svg" alt="Star">
                           <img src="<?php bloginfo('template_url'); ?>/assets/images/star.svg" alt="Star">
                           <img src="<?php bloginfo('template_url'); ?>/assets/images/star.svg" alt="Star">
                           <img src="<?php bloginfo('template_url'); ?>/assets/images/star.svg" alt="Star">
                           <img src="<?php bloginfo('template_url'); ?>/assets/images/star.svg" alt="Star">
                        </div>
                        <p class="mb-0 description"><?php echo wp_kses_post( $description ) ?></p>    
                     </div>
                     <?php
                  endwhile;
               endif;
               ?>
            </div>
            <div class="right-side">
               <?php
               if ( have_rows( 'reviews_right' ) ) :
                  while ( have_rows( 'reviews_right' ) ) :
                     the_row();

                     $name = get_sub_field( 'name' ) ?: false;
                     $description = get_sub_field( 'description' ) ?: false;
                     ?>

                     <div class="page-reviews__review">
                        <h3 class="mb-3 title"><?php echo esc_html( $name ) ?></h3>
                        <div class="mb-3 d-flex stars">
                           <img src="<?php bloginfo('template_url'); ?>/assets/images/star.svg" alt="Star">
                           <img src="<?php bloginfo('template_url'); ?>/assets/images/star.svg" alt="Star">
                           <img src="<?php bloginfo('template_url'); ?>/assets/images/star.svg" alt="Star">
                           <img src="<?php bloginfo('template_url'); ?>/assets/images/star.svg" alt="Star">
                           <img src="<?php bloginfo('template_url'); ?>/assets/images/star.svg" alt="Star">
                        </div>
                        <p class="mb-0 description"><?php echo wp_kses_post( $description ) ?></p>    
                     </div>
                     <?php
                  endwhile;
               endif;
               ?>
            </div>
         </div>

            
         <div class="cta">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/dubrovnik.jpg" class="img-fluid cta__image" alt="Dubrovnik">
            <div class="cta__content-wrapper">
               <img src="<?php bloginfo('template_url'); ?>/assets/images/roses.jpg" class="d-none d-xl-block img-fluid image" alt="Roses">
               <img src="<?php bloginfo('template_url'); ?>/assets/images/roses-bg.png" class="d-block d-xl-none img-fluid image" alt="Roses">
               <div class="content">
                  <h2 class="title"><?php echo esc_html( 'Looking for apartments in Dubrovnik?' ); ?></h2>
                  <div class="button-wrapper">
                     <a class="btn" data-bs-toggle="modal" data-bs-target="#bookingModal">
                        <?php echo esc_html( 'Reserve Now' ); ?>
                     </a>
                  </div>
               </div>
            </div>
         </div>  
      </section>
   </div>
</div>

<?php
get_footer();