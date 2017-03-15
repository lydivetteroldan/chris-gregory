<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Chris_Gregory
 */

?>
<article id="post-<?php the_ID(); ?>">
	<!-- <div class="col-md-12">
		<header class="entry-header">
			<?//php
				//the_title( '<h5 class="project-title text-uppercase"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
			?>
		</header><!-- .entry-header -->
	<!-- </div> -->
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-9 col-md-offset-2">
				<div class="project-content">
					<?php
						the_content( sprintf(
							/* translators: %s: Name of current post. */
							wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'chris-gregory' ), array( 'span' => array( 'class' => array() ) ) ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						) );
					?>
				</div><!-- .entry-content -->
			</div>
		</div>
	</div>
</article><!-- #post-## -->
