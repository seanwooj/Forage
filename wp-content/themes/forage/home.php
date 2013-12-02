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

	<!-- Main Content -->
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page-header' ); ?>

			<div class="row main">
				<div class="large-9 columns" role="main">
					<div>

					</div>
				</div>
			<!-- this row is ended at the footer -->

		<?php endwhile; ?>
	<?php endif; ?>
	<!-- End Main Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>