			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page).
				if ( is_single() || is_archive() ) :
			?>
					</div><!-- /.col -->

					<?php
						get_sidebar();
					?>

				</div><!-- /.row -->
			<?php
				endif;
			?>
		</main><!-- /#main -->
		<footer id="footer" class="footer">
			<div class="container">
				<div class="row">

					<div class="col-md-6">
                  <div>
                     <?php 
                     $header_logo = get_theme_mod( 'header_logo' ); 
                     ?>

                     <img src="<?php echo esc_url( $header_logo ); ?>" class="footer__logo" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
                     <p class="mb-0 footer__description"><?php echo esc_html( 'Apartments located in the heart of Dubrovnik.' ); ?></p>
                  </div>
					</div>
               
               <div class="col-md-6">
                  <div class="mt-5 mt-md-0 d-flex flex-column align-items-start align-items-md-end">
                     <h3 class="footer__title"><?php echo esc_html( 'Contact' ); ?></h3>
                     <ul class="footer__list">
                        <li>
                           <a href="mailto:antedabelic@yahoo.com">
                              <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-mail.svg" alt="Email">
                              <span>antedabelic@yahoo.com</span>
                           </a>
                        </li>
                        <li>
                           <a href="tel:+385996339795">
                              <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-phone.svg" alt="Phone">
                              <span>+385 99 633 9795</span>
                           </a>
                        </li>
                        <li>
                           <a href="http://www.artboxdubrovnik.com/">
                              <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-web.svg" alt="Website">
                              <span>www.artboxdubrovnik.com</span>
                           </a>
                        </li>
                     </ul>
                  </div>
					</div>

				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->

   <div class="modal fade" id="bookingModal" aria-hidden="true" aria-labelledby="bookingModal" aria-hidden="true" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="bookingModal">All Apartments</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <?php echo do_shortcode( '[wpsbc-overview calendars="all" legend="yes" legend_position="top" start_year="0" start_month="0" history="1" tooltip="1" weeknumbers="no" language="auto"]' ); ?>
         </div>
         <div class="d-flex flex-column modal-footer">
            <h4 class="mb-3">Check Specific Apartment</h4>
            <div class="modal-footer__apartments">
               <button class="btn" data-bs-target="#bookingModalApartment10" data-bs-toggle="modal" data-bs-dismiss="modal">New York</button>
               <button class="btn" data-bs-target="#bookingModalApartment9" data-bs-toggle="modal" data-bs-dismiss="modal">Frida</button>
               <button class="btn" data-bs-target="#bookingModalApartment8" data-bs-toggle="modal" data-bs-dismiss="modal">Dubrovnik</button>
               <button class="btn" data-bs-target="#bookingModalApartment7" data-bs-toggle="modal" data-bs-dismiss="modal">Dali</button>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="bookingModalApartment7" aria-labelledby="bookingModalApartment7" aria-hidden="true" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <?php echo do_shortcode( '[wpsbc id="7" title="yes" legend="yes" legend_position="top" dropdown="yes" start="1" display="2" language="auto" month="0" year="0" jump="no" history="1" tooltip="3" theme="classic" weeknumbers="no" highlighttoday="no"]' ); ?>
         </div>
         <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="bookingModalApartment8" aria-labelledby="bookingModalApartment8" aria-hidden="true" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <?php echo do_shortcode( '[wpsbc id="8" title="yes" legend="yes" legend_position="top" dropdown="yes" start="1" display="2" language="auto" month="0" year="0" jump="no" history="1" tooltip="3" theme="classic" weeknumbers="no" highlighttoday="no"]' ); ?>
         </div>
         <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="bookingModalApartment9" aria-labelledby="bookingModalApartment9" aria-hidden="true" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <?php echo do_shortcode( '[wpsbc id="9" title="yes" legend="yes" legend_position="top" dropdown="yes" start="1" display="2" language="auto" month="0" year="0" jump="no" history="1" tooltip="3" theme="classic" weeknumbers="no" highlighttoday="no"]' ); ?>
         </div>
         <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="bookingModalApartment10" aria-labelledby="bookingModalApartment10" aria-hidden="true" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <?php echo do_shortcode( '[wpsbc id="10" title="yes" legend="yes" legend_position="top" dropdown="yes" start="1" display="2" language="auto" month="0" year="0" jump="no" history="1" tooltip="3" theme="classic" weeknumbers="no" highlighttoday="no"]' ); ?>
         </div>
         <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
         </div>
      </div>
   </div>
</div>

	<?php
		wp_footer();
	?>
</body>
</html>
