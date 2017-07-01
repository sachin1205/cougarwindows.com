<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts() 
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
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
  <!-- Site Content -->
  <section class="site-content two-column" role="main">
    <div class="inner-wrap content-inner-wrap">
      <?php if ( have_posts() ): ?>
      <?php if ( is_day() ) : ?>
      <h2>Archive: <?php echo  get_the_date( 'D M Y' ); ?></h2>
      <?php elseif ( is_month() ) : ?>
      <h2>Archive: <?php echo  get_the_date( 'M Y' ); ?></h2>
      <?php elseif ( is_year() ) : ?>
      <h2>Archive: <?php echo  get_the_date( 'Y' ); ?></h2>
      <?php else : ?>
      <h2>Archive</h2>
      <?php endif; ?>
      <article class="site-content-primary">
        <?php while ( have_posts() ) : the_post(); ?>
        <article>
          <h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>
            <?php the_date(); ?>
            <?php the_time(); ?>
          </time>
          <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
          <?php the_content(); ?>
        </article>
        <?php endwhile; ?>
        <?php else: ?>
        <h2>No posts to display</h2>
        <?php endif; ?>
        <?php wp_pagenavi(); ?>
      </article>
      <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar-blog' ) ); ?>
    </div>
  </section>
  <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/slidebox' ) ); ?>
  <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
