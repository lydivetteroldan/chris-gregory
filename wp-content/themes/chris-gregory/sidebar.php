<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Chris_Gregory
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="col-md-4 col-md-offset-2" id="secondary" role="complementary">
  <ul class="list-unstyled page-list">
    <li><a class="page-link" href="mailto:chris@chrisgregoryphoto.co" target="_blank">chris@chrisgregoryphoto.co</a></li>
    <li><a class="page-link" href="tel:7872429215" target="_blank">787-242-9215</a></li>
    <li><a class="page-link" href="https://instagram.com/chrisgregoryphoto" target="_blank">Instagram</a></li>
    <li><a class="page-link" href="https://facebook.com" target="_blank">Facebook</a></li>
  </ul>
</aside><!-- #secondary -->
