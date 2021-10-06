<?php
/**
 * The Template for displaying all single posts.
 * @package WordPress
 */

get_header(); ?>

	<div class="page-single page-<?php the_ID(); ?>" id="page-template" data-page="single">

		<div id="content" role="main" class="container">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part('components/content', 'single'); ?>

				<div class="clear"></div>

				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'readytorumble' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'readytorumble' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'readytorumble' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->

	</div>

<?php get_footer(); ?>
