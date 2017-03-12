<?php
/**
 * Template Name: Front Page Gallery
 *
 * This is the template that displays the Home page.
 *
 * @package Chris_Gregory
 */

get_header(); ?>

	<div class="content-area" id="primary">
		<main class="main" id="main" role="main">
			<div class="container-fluid page-container">
				<?php
				global $post;
				$args = array(
					'posts_per_page'   => 11,
					'orderby'          => 'date',
					'order'            => 'ASC',
					'post_type'        => 'front_page_image',
					'post_status'      => 'publish'
				);
				$lastposts = get_posts( $args );
				foreach ( $lastposts as $post ) :
				  setup_postdata( $post ); ?>
					<?php the_content(); ?>
				<?php endforeach; 
				wp_reset_postdata(); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
