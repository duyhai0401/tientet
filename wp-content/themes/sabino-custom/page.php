<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Sabino
 */

get_header(); ?>

	<?php if ( is_home() ) : ?>
	<div id="primary" class="content-area">
    <?php else : ?>
    <div id="primary" class="content-area">
    <?php endif; ?>
		<main id="main" class="site-main" role="main">
			
			<?php if ( !get_theme_mod( 'sabino-remove-page-titles' ) ) : ?>
				<?php get_template_part( '/templates/titlebar' ); ?>
			<?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'templates/contents/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
	
<?php get_footer(); ?>
