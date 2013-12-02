<?php 
$post_id = get_the_id();
$featured_image_id = get_post_thumbnail_id( $post_id );
$featured_image_url = wp_get_attachment_url( $featured_image_id );
if ( ! empty( $featured_image_url ) ) : ?>
<header class="hero-header <?php if ( !is_page_template( 'home.php' ) ) { echo 'no-border'; } ?>" style="background-image:url('<?php echo esc_url( $featured_image_url ); ?>');">
	<div class="row">
		<div class="large-12 columns">
			<div class="topbar">
				<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'left', 'container' => '', 'fallback_cb' => 'foundation_page_menu', 'walker' => new foundation_navigation() ) ); ?>
				</nav>
			</div>
			<div class="row">
				<div class="large-7 columns large-centered">
					<h2 class="hero-text"><?php bloginfo( 'description' ); ?></h2>
				</div>
			</div>
		</div>
	</div>
</header>
<?php endif; ?>