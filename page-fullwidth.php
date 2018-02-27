<?php
/**
 * Template Name: Fullwidth Page Template
 *
 *
 * @link https://codex.woodpress.org/Template Hierarchy
 *
 * @package devwp
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-12">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			the_post_navigation();


		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->



<?php
get_footer();
