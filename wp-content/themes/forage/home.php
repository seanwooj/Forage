<?php
/**
 * Template Name: Home
 *
 * Loop container for home content
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */

get_header(); ?>

	<!-- Header Content -->
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'home-header' ); ?>
		<?php endwhile; ?>
	<?php endif; ?>

	<div class="row main">
		<div class="large-9 columns" role="main">
			<h2 class="section-header">Latest News</h2>
			<div class="white">
				<?php $posts = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1 ) ) ?>

				<?php if ( $posts ) : ?>

					<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; ?>

				<?php else : ?>

					<h2><?php _e('No posts.', 'foundation' ); ?></h2>
					<p class="lead"><?php _e('Sorry about this, I couldn\'t seem to find what you were looking for.', 'foundation' ); ?></p>
					
				<?php endif; ?>

				<?php foundation_pagination(); ?>
			</div>
		</div>
	<!-- this row is ended at the footer -->

	<!-- End Main Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>