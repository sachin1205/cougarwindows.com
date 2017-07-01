<?php

	/*
		Template Name: Full Width
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
  <!--Site Content-->
  <section class="site-content" role="main">
    <div class="inner-wrap">
      <article class="site-content-primary-fullwidth">
        <?php the_content(); ?>
        <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/flexible-content' ) ); ?>
        
      </article>
    </div>
    </section>
  <?php endwhile; ?>
  <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/slidebox' ) ); ?>
  <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
