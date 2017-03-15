<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Chris_Gregory
 */

get_header(); ?>

	<div class="container page-container">
		<div class="row page-row">
			<div class="col-md-12">
				<div class="row">
					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', get_post_format() );
					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();
