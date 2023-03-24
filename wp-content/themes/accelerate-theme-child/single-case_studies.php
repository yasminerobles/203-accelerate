<?php
/**
 * This is the template that displays case studies
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>


<div id="primary" class="site-content">
	<div id="content" role="main">
		<?php while ( have_posts() ) : the_post();	
			$services = get_field('services');
			$client = get_field('client');
			$link = get_field('site_link'); 
			$image_1 = get_field('image_1');
			$image_2 = get_field('image_2');
			$image_3 = get_field('image_3');
			$size = "full";?>
		
			<article class="case-study">
				<aside class="case-study-sidebar">
					<h2><?php the_title(); ?></h2>
					<h3><?php echo $services; ?></h3>
					<h4>Client: <?php echo $client; ?></h4>

					<?php the_content(); ?>

					<p class="read-more-link"><strong><a href="<?php echo $link; ?>">Visit Live Site</a></strong></p>
				</aside>

				<div class="case-study-images">
					
					<?php if($image_1) {
						echo wp_get_attachment_image( $image_1, $size );
					} ?>

					<?php if($image_2) {
						echo wp_get_attachment_image( $image_1, $size );
					} ?>

					<?php if($image_3) {
						echo wp_get_attachment_image( $image_1, $size );
					} ?>

				</div>
			</article>
		<?php endwhile; ?>
	</div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>
