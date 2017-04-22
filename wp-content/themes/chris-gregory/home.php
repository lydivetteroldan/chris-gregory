<?php
/**
 * Template Name: Front Page Gallery
 *
 * This is the template that displays the Home page.
 *
 * @package Chris_Gregory
 */

get_header(); ?>

  <div class="front-gallery" id="front-gallery">
    <div class="container-fluid page-container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
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
              <?php if (has_term('right-portrait-small', 'image_format') ) : ?>
              <div class="col-md-4 project-image image--right image--portrait image--sm highlight" data-stellar-ratio="0.5">
                <?php the_content(); ?>
                <div class="project-title"><?php the_title(); ?></div>
              </div><!-- image right portrait small -->

              <?php elseif (has_term('faster', 'image_format') ) : ?>
              <div class="col-md-5 project-image image--left image--portrait image--md z2 highlight" data-stellar-ratio="2.5">
                <?php the_content(); ?>
                <div class="project-title"><?php the_title(); ?></div>
              </div><!-- image left portrait medium-->

              <?php elseif (has_term('right-landscape-large', 'image_format') ) : ?>
              <div class="col-md-8 project-image image--right image--landscape image--lg highlight" data-stellar-ratio="1">
                <?php the_content(); ?>
                <div class="project-title"><?php the_title(); ?></div>
              </div><!-- image right landscape large-->

              <?php elseif (has_term('center-portrait', 'image_format') ) : ?>
              <div class="col-md-4 col-lg-3 col-md-offset-5 project-image image--center image--portrait z4 highlight" data-stellar-ratio="1">
                <?php the_content(); ?>
                <div class="project-title"><?php the_title(); ?></div>
              </div><!-- image center potrait -->

              <?php elseif (has_term('left-landscape-medium', 'image_format') ) : ?>
              <div class="col-md-6 project-image image--left image--landscape image--md z3 highlight" data-stellar-ratio="1">
                <?php the_content(); ?>
                <div class="project-title"><?php the_title(); ?></div>
              </div><!-- image left landscape medium -->

              <?php elseif (has_term('right-portrait-large', 'image_format') ) : ?>
              <div class="col-md-8 project-image image--right image--portrait image--lg z2 highlight" data-stellar-ratio="1.2">
                <?php the_content(); ?>
                <div class="project-title"><?php the_title(); ?></div>
              </div><!-- image right portrait large-->

              <?php elseif (has_term('overlapped', 'image_format') ) : ?>
              <div class="col-md-5 project-image image--left image--portrait image--md offset--top highlight" data-stellar-ratio="1.1">
                <?php the_content(); ?>
                <div class="project-title"><?php the_title(); ?></div>
              </div><!-- image left portrait medium-->

              <?php elseif (has_term('center-landscape', 'image_format') ) : ?>
              <div class="col-md-5 col-md-offset-5 project-image image--center image--landscape z4 highlight" data-stellar-ratio="1.1">
                <?php the_content(); ?>
                <div class="project-title"><?php the_title(); ?></div>
              </div><!-- image center landscape-->

              <?php elseif (has_term('left-portrait-medium', 'image_format') ) : ?>
              <div class="col-md-5 project-image image--left image--portrait image--md z3 offset--top highlight" data-stellar-ratio="1">
                  <?php the_content(); ?>
                  <div class="project-title"><?php the_title(); ?></div>
              </div><!-- image left portrait medium-->

              <?php elseif (has_term('right-landscape-medium', 'image_format') ) : ?>
              <div class="col-md-7 project-image image--right image--landscape image--md z2 highlight" data-stellar-ratio="1">
                  <?php the_content(); ?>
                  <div class="project-title"><?php the_title(); ?></div>
              </div><!-- image right landscape medium-->

              <?php elseif (has_term('static', 'image_format') ) : ?>
              <div class="col-md-8 project-image image--left image--landscape image--lg highlight">
                <?php the_content(); ?>
                <div class="project-title"><?php the_title(); ?></div>
              </div><!-- image left landscape medium -->
              <?php endif ?>
            <?php endforeach; 
            wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<?php
get_footer();
