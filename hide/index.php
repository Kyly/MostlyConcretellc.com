<?php
/**
 * Template Name: Full Width, No Sidebar
 *
 * @package Hemingway Rewritten
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main nosidebar" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php $id_from_title = titleToUrl(get_the_title());?>

				<div id="<?=$id_from_title?>">

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					// if ( comments_open() || '0' != get_comments_number() ) :
					// 	comments_template();
					// endif;
				?>

				</div>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

