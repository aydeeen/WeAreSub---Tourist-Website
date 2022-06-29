<?php
/**
 * Template Name: CPT Template
 * Template Post Type: apartment
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
      ?>

      <div class="apartment">
         <div class="row">
            <div class="col-lg-6">
               <div class="apartment__left-header">
                  <div id="apartmentCarousel" class="carousel slide" data-bs-ride="carousel">
                     <div class="carousel-indicators">
                        <?php
                        if ( have_rows( 'apartment_images', get_the_id() ) ) :
                           $slides_count = 0;
                           while ( have_rows( 'apartment_images', get_the_id() ) ) :
                              the_row();

                              $label = $slides_count + 1;
                              ?>

                              <button type="button" data-bs-target="#apartmentCarousel" data-bs-slide-to="<?php echo esc_html( $slides_count ); ?>" class="<?php if ( !$slides_count ) { ?> active"<?php }?>" <?php if ( !$slides_count ) { ?>aria-current="true"<?php }?> aria-label="<?php echo esc_html( $label ) ?>"></button>
                              
                              <?php
                              $slides_count++;
                           endwhile;
                        endif;
                        ?>
                     </div>
                     <div class="carousel-inner">
                        <?php
                        if ( have_rows( 'apartment_images', get_the_id()  ) ) :
                           $slides_count_2 = 0;
                           while ( have_rows( 'apartment_images', get_the_id()  ) ) :
                              the_row();

                              $image = get_sub_field( 'image', get_the_id()  ) ?: false;
                              ?>

                              <div class="carousel-item <?php if ( !$slides_count_2 ) { ?>active"<?php }?>">
                                 <?php echo wp_get_attachment_image( $image, 'full', false, ["class" => "d-block w-100 img-fluid image"] ); ?>
                              </div>

                           <?php
                              $slides_count_2++;
                           endwhile;
                        endif;
                        ?>
                     </div>
                     <button class="carousel-control-prev" type="button" data-bs-target="#apartmentCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                     </button>
                     <button class="carousel-control-next" type="button" data-bs-target="#apartmentCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                     </button>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="apartment__right-header">
                  <h1 class="title"><?php the_title(); ?></h1>
                  <div class="content"><?php the_content(); ?></div>
                  <div class="button-wrapper">
                     <a class="btn" data-bs-toggle="modal" data-bs-target="#bookingModal">
                        <?php echo esc_html( 'Reserve Now' ); ?>
                     </a>
                  </div>
               </div>
            </div>

            <div class="col-12">
               <div class="apartment__features-wrapper">
                  <div class="container">
                     <div class="row">
                        <div class="col">
                           <div class="apartment__features">
                              <?php
                                 if ( have_rows( 'apartment_icons', get_the_id()  ) ) :
                                    while ( have_rows( 'apartment_icons', get_the_id()  ) ) :
                                       the_row();

                                       $icon = get_sub_field( 'icon', get_the_id()  ) ?: false;
                                       $description = get_sub_field( 'description', get_the_id()  ) ?: false;
                                       ?>

                                       <div class="feature">
                                          <?php echo wp_get_attachment_image( $icon, 'full', false, ["class" => "image"] ); ?>
                                          <span class="description"><?php echo esc_html( $description ); ?></span>
                                       </div>

                                    <?php
                                    endwhile;
                                 endif;
                                 ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> 
            </div>

            <div class="col-lg-5">
               <div class="apartment__info">
                  <?php
                  if ( have_rows( 'apartment_info', get_the_id()  ) ) :
                     while ( have_rows( 'apartment_info', get_the_id()  ) ) :
                        the_row();

                        $title = get_sub_field( 'title', get_the_id() ) ?: false;
                        $description = get_sub_field( 'description', get_the_id() ) ?: false;
                        ?>

                        <div class="apartment__info-item">
                           <h2 class="title">
                              <img src="<?php bloginfo('template_url'); ?>/assets/images/small-circle.svg" alt="Circle">
                              <span><?php echo esc_html( $title ); ?></span>
                           </h2>
                           <p class="description"><?php echo esc_html( $description ); ?></p>
                        </div>

                     <?php
                     endwhile;
                  endif;
                  ?>
               </div>
            </div>

            <div class="col-lg-7">
               <div id="apartment-images" class="apartment__other-images">
                  <?php $i = 1; ?> 
                  <?php
                  if ( have_rows( 'apartment_other_images', get_the_id()  ) ) :
                     while ( have_rows( 'apartment_other_images', get_the_id()  ) ) :
                        the_row();

                        $image = get_sub_field( 'image', get_the_id()  ) ?: false;
                        ?>

                           <a href="#image-<?php echo esc_attr( $i ); ?>">
                              <?php echo wp_get_attachment_image( $image, 'full', false, ["class" => "img-fluid image"] ); ?>
									</a>
                        
                     <?php $i++; ?>
                     <?php
                     endwhile;
                  endif;
                  ?>
               </div>
            </div>

            <div class="col-12">
               <div class="map">
                  <h2 class="map__title">
                     <img src="<?php bloginfo('template_url'); ?>/assets/images/yellow-circle.svg" alt="Circle">
                     <span><?php echo esc_html( 'Locations' ); ?></span>
                  </h2>
                  <div class="map__location">
                     <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.2709713484082!2d18.078338315465743!3d42.65561287916824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134c75e68cecee2f%3A0x1c711374a89958b7!2sArt%20Box%20apartments!5e0!3m2!1sen!2sba!4v1652965545043!5m2!1sen!2sba"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>               
            </div>

            <div class="col-12">
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
            </div>                  
            
         </div>
      </div>

      <?php    
	endwhile;
endif;

wp_reset_postdata(); 

get_footer(); 

?> 

<?php $ii = 1; ?> 
<?php
if ( have_rows( 'apartment_other_images', get_the_id()  ) ) :
   while ( have_rows( 'apartment_other_images', get_the_id()  ) ) :
      the_row();

      $image = get_sub_field( 'image', get_the_id()  ) ?: false;
      ?>

      <div class="lightbox-target" id="image-<?php echo esc_attr( $ii ); ?>">                     
         <?php echo wp_get_attachment_image( $image, 'full', false, ["class" => "img-fluid"] ); ?>
         <a class="lightbox-close" href="#apartment-images"></a>
      </div>
                        
   <?php $ii++; ?>
   <?php
   endwhile;
endif;
