<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package aThemes
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'hiero' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			<!-- .page-header --></header>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php athemes_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>

		<!-- #content --></div>
	<!-- #primary --></section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
