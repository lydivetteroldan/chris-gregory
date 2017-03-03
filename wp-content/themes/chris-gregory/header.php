<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Chris_Gregory
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <nav class="navbar navbar-fixed-top page-navbar" role="navigation" style="top: 20px;">
    <div class="container-fluid page-container">
      <div class="hidden-xs">
        <div class="navbar-header">
          <a class="navbar-brand page-title" href="<?php bloginfo('url'); ?>/">
            <?php bloginfo('name'); ?>
          </a>
        </div>
        <?php wp_nav_menu( array (
              'menu_class' => 'list-inline',
              'container_class' => 'navbar-right page-navbar-list'
          ) );
        ?>
      </div>
      <div class="visible-xs-block">
        <div class="row">
          <div class="col-xs-6">
            <a class="navbar-brand page-title" href="<?php bloginfo('url'); ?>/">
              <?php bloginfo('name'); ?>
            </a>
          </div>
          <div class="col-xs-6 text-right">
            <?php wp_nav_menu( array (
                'menu_class' => 'list-inline',
                'container_class' => 'page-navbar-list'
              ) );
            ?>
          </div>
        </div>
      </div>
    </div>
  </nav>
