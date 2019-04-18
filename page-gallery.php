<?php
/*
Template Name: Gallery Page
*/
?>

<?php get_header(); ?>

	<div id="content" class="landing-page">
		<div id="main" class="twelvecol first clearfix" role="main">


				<?php
				$query = new WP_Query( 'pagename=gallery' );
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
			<section id="gallery" class="clearfix border">
				<div class="section-wrap wrap">
				<div class="threecol first sidebar">
					<div class="current-page">gallery</div>
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
		</div>
		</div> <?php // end #main ?>
	</div> <?php // end #content ?>

<?php get_footer(); ?>
