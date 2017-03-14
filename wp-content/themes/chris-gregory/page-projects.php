<?php
/**
 * Template Name: Projects Page
 *
 * This is the template that displays the Projects page.
 *
 * @package Chris_Gregory
 */

get_header(); ?>

	<div class="container page-container layout--3col">
		<div class="row">
			<div class="page-row">
				<?php
				global $post;
				$args = array( 'order'=> 'ASC', 'post_type' => 'project', 'post_status' => 'publish' );
				$postslist = get_posts( $args );
				foreach ( $postslist as $post ) :
				  setup_postdata( $post ); ?> 
					<div class="col-sm-4 col-md-4">
						<div class="page-thumbnail">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail() ?>
								<span class="page-caption">
									<?php the_title(); ?>
								</span>
							</a>
						</div>
					</div>
				<?php
				endforeach; 
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>

<?php
get_footer();
