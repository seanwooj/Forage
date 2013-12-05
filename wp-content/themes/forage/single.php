<?php
/**
 * Single
 *
 * Loop container for single post content
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */

get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page-header' ); ?>
			<div class="row">
			    <!-- Main Content -->
			    <div class="large-9 columns" role="main">
					<?php get_template_part( 'content', 'single' ); ?>
			    </div>
			    <!-- End Main Content -->
		<?php endwhile; ?>
	<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>