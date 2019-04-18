<?php
/*
Template Name: Landing Page
*/
?>
<?php get_header(); ?>
	<div id="content" class="landing-page">
		<div id="main" class="twelvecol first clearfix" role="main">

			<?php
			$query = new WP_Query( 'pagename=landing-page' );
			?>
			<?php
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
					?>
					<?php
					if (has_post_thumbnail( $query->ID ) ):
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'fenwick-back' );
						$image = $image[0];
						else :
						$image = get_stylesheet_directory_uri() . '/images/default_cat_img.jpg';
						endelse;
						endif;
						}
					}

				?>
				<div id="landing-top" style="background-image: url('<?php echo $image; ?>');" class="section-background">
					<section id="top">
					<div class="wrap"><a href="https://orderup.com/order-online/delivery/fenwicks-300?affiliate_id=653" target="_blank" class="delivery"></a></div>
						<div class="third-color-back logo-bar">
							<div class="logo"></div>
						</div>

						<div class="wrap">

						<?php
								echo '<div class="hours-location">';
								echo '<div class="hours"><span class="hours-one">' . get_field('hours_open_one') . '</span>';
								echo '<div class="hours"><span class="phone-show">' . get_field('phone_show') . '</span>';
								echo '<span class="address">' . get_field('address') . '</span></div>';
								echo '</div>';
						?>


						</div>
						<div class="contact-buttons">
							<?php

							echo '<a class="call-us" href="tel:' . get_field('phone_call') . '">Call Us</a>';

									/* Restore original Post Data */
									wp_reset_postdata();
							?>
							<a href="https://www.google.com/maps/search/fenwicks300/@36.122323, -86.775078,15z?hl=en-US" class="find-us">find us</a>
						</div>
					</section>
				</div>
				<?php
				$query = new WP_Query( 'pagename=about' );
				?>
				<?php
					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
						?>
						<?php
						if (has_post_thumbnail( $query->ID ) ):
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'fenwick-back' );
							$image = $image[0];
							else :
							$image = get_stylesheet_directory_uri() . '/images/default_cat_img.jpg';
							endelse;
							endif;
						?>
			<div style="background-image: url('<?php echo $image; ?>');" class="inner-section-background">
			<section id="about" class="clearfix border">
				<div class="section-wrap wrap">
				<div class="threecol first sidebar">
					<div class="current-page">about</div>
					<div class="top-border third-color-back"></div>
					<?php /*
					<div class="return-top"><a href="#top">back to top</a></div>
					<div class="bottom-border third-color-back"></div>
					*/ ?>
				</div>
				<div class="ninecol last content-back">
					<?php
						the_content();
						}
					}
					/* Restore original Post Data */
					wp_reset_postdata();
					?>
				</div>
				</div>
			</section>
			</div>
			<?php
			$query = new WP_Query( 'pagename=menus' );
			?>
			<?php
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
					?>
					<?php
					if (has_post_thumbnail( $query->ID ) ):
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'fenwick-back' );
						$image = $image[0];
						else :
						$image = get_stylesheet_directory_uri() . '/images/default_cat_img.jpg';
						endelse;
						endif;
					?>
		<div style="background-image: url('<?php echo $image; ?>');" class="inner-section-background">
				<section id="menus" class="clearfix border">
					<div class="section-wrap wrap">
						<div class="threecol first sidebar">
							<div class="current-page">menus</div>
							<div class="top-border third-color-back"></div>
							<div class="return-top">
								<?php
									bones_menus_nav();
								?>
							</div>
							<div class="bottom-border third-color-back"></div>
						</div>
						<div class="ninecol last content-back dinner-menus" style="padding:0px; height:1340px;">
							<?php
									echo '<div id="menu-one" class="newboxes" style="display:block">';
									the_field('menu-one');
									echo '</div>';
									echo '<div id="menu-two" class="newboxes" style="display:none">';
									the_field('menu-two');
									echo '</div>';
									echo '<div id="menu-three" class="newboxes" style="display:none">';
									the_field('menu-three');
									echo '</div>';
									echo '<div id="menu-four" class="newboxes" style="display:none">';
									the_field('menu-four');
									echo '</div>';
									echo '<div id="menu-five" class="newboxes" style="display:none">';
									the_field('menu-five');
									echo '</div>';
									echo '<div id="menu-six" class="newboxes" style="display:none">';
									the_field('menu-six');
									echo '</div>';
								}
							}
							/* Restore original Post Data */
							wp_reset_postdata();
							?>
						</div>
					</div>
				</section>
		</div>
			<?php
			$query = new WP_Query( 'pagename=map' );
			?>
			<?php
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
					?>
					<?php
					if (has_post_thumbnail( $query->ID ) ):
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'fenwick-back' );
						$image = $image[0];
						else :
						$image = get_stylesheet_directory_uri() . '/images/default_cat_img.jpg';
						endelse;
						endif;
					?>
		<div style="background-image: url('<?php echo $image; ?>');" class="inner-section-background">
				<section id="map" class="clearfix border">
				<div class="section-wrap wrap">
				<div class="threecol first sidebar">
					<div class="current-page">map</div>
					<div class="top-border third-color-back"></div>
				</div>
				<div class="ninecol last content-back">
					<?php
						the_content();
						}
					}
					/* Restore original Post Data */
					wp_reset_postdata();
					?>
				</div>
				</div>
		</section>
		</div>
		</div> <?php // end #main ?>
	</div> <?php // end #content ?>

<?php get_footer(); ?>
