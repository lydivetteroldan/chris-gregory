<?php
/**
 * Template Name: About Page
 *
 * This is the template that displays the About page.
 *
 * @package Chris_Gregory
 */

get_header(); ?>

	<div class="content-area" id="primary">
		<main class="main" id="main" role="main">
			<div class="container page-container layout--2col">
				<div class="row">
					<div class="col-md-8">
						<?php
							while ( have_posts() ) : the_post();
								the_content();
							endwhile; // End of the loop.
							?>
					</div>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
