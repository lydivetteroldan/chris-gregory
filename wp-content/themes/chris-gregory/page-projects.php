<?php
/**
 * Template Name: Projects Page
 *
 * This is the template that displays the Projects page.
 *
 * @package Chris_Gregory
 */

get_header(); ?>
	
	<header class="header--projects">
		<div class="container page-container">
			<div class="row">
				<div class="col-md-12">
					<ul class="list-inline menu--projects text-center">
						<li class="col-xs-4 col-sm-4 col-md-2">
							<a href="javascript:void(0)" data-filter="*">All Projects</a>
						</li>
						<li class="col-xs-4 col-sm-4 col-md-2">
							<a href="javascript:void(0)" data-filter=".personal">Personal</a>
						</li>
						<li class="col-xs-4 col-sm-4 col-md-2">
							<a href="javascript:void(0)" data-filter=".reportage">Reportage</a>
						</li>
						<li class="col-xs-4 col-sm-4 col-md-2">
							<a href="javascript:void(0)" data-filter=".portraits">Portraits</a>
						</li>
						<li class="col-xs-4 col-sm-4 col-md-2">
							<a href="javascript:void(0)" data-filter=".comission">Comission</a>
						</li>
						<li class="col-xs-4 col-sm-4 col-md-2">
							<a href="javascript:void(0)" data-filter=".still-life">Still Life</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<div class="container page-container layout--3col">
		<div class="row">
			<div class="grid">
				<?php
				global $post;
				$args = array( 
					'numberposts' => '-1',
					'order'				=> 'ASC',
					'post_type' 	=> 'project',
					'post_status' => 'publish'
				);
				$postslist = get_posts( $args );
				foreach ( $postslist as $post ) :
				  setup_postdata( $post ); ?> 
					<div <?php post_class('col-xs-12 col-sm-4 col-md-4 grid-item highlight'); ?>>
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
