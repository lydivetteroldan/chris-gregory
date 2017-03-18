<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Chris_Gregory
 */

get_header(); ?>

	<div class="container page-container">
		<div class="row">
			<div class="col-md-12">
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'chris-gregory' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p>It looks like nothing was found at this location.</p>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</div>
		</div>
	</div>

<?php
get_footer();
