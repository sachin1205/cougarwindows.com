<!--[if lt IE 9]>
      <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> or <a href="//www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
      <![endif]-->
<div class="site-wrap">
  <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/search-module' ) ); ?>
  <!--Site Header-->
  <div class="site-header-wrap">
    <header class="site-header clearfix" role="banner">
      <div class="sh-sticky-wrap">
        <div class="inner-wrap">
          <a href="/" class="site-logo">
              <img src="<?php bloginfo('template_url'); ?>/img/cougarwindows-logo.png" alt="US Wire"> </a>
                <span class="sh-icons">
                   <a href="#menu" class="sh-ico-menu menu-link"><span>Menu</span></a>
          </span>
          <!--Site Nav-->
          <div class="site-nav-container">
            <div class="snc-header">
              <a href="#" class="close-menu menu-link">Close</a>
            </div>
            <div class="sh-utility-nav">
              <div class="sh-ico-wrap"><a href="tel:4806999066" class="sh-ph">480-699-9066</a>
              <a href="mailto:cougarwindows@gmail.com " class="sh-contact">cougarwindows@gmail.com</a>
                <span class="search-link sh-ico-search">
                        <a href="#"><span>&nbsp;</span></a>
                </span>
              </div>           
              
            </div>
            <?php wp_nav_menu(array(
                      'menu'            => 'Primary Nav',
                      'container'       => 'nav',
                      'container_class' => 'site-nav',
                      'menu_class'      => 'sn-level-1',
                      'walker'        => new themeslug_walker_nav_menu
                      )); ?>
          </div>
          <!-- site-nav-container END-->
          <a href="" class="site-nav-container-screen menu-link">&nbsp;</a>
        </div>
        <!--inner-wrap END-->
      </div>
    </header>

