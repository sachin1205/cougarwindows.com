<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package   WordPress
 * @subpackage  Starkers
 * @since     Starkers 4.0
 */
?>
  <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
  <?php Starkers_Utilities::get_template_parts( array( 'parts/site-intro-dest' ) ); ?>
  </div>
  <!-- site-header-wrap END -->
  <div class="breadcrumb">
    <div class="inner-wrap">
      <?php
        if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('
        <div id="breadcrumbs" class="breadcrumb">','</div>
        ');
        }
    ?>
    </div>
  </div>
  <!--Site Content-->
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <section class="site-content two-column" role="main">
    <div class="inner-wrap content-inner-wrap">
      <article class="site-content-primary">
        <?php the_content(); ?>
        <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/flexible-content' ) ); ?>
        <?php if (is_page( '9' )) : ?>
        <!--Sitemap Page-->
        <?php wp_nav_menu(array(
                  'menu'            => 'Sitemap Nav',
                   'container'      => '',
                   'menu_class'     => 'sitemap-nav'
                   )); ?>
        <?php endif; ?>
      </article>
      <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar' ) ); ?>
    </div>
  </section>
  <?php endwhile; ?>
  <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/slidebox' ) ); ?>
  <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
