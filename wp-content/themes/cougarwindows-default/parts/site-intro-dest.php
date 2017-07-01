<!-- site intro -->
<section class="page-intro">
  <div class="inner-wrap">
    <div class="pi-text">
      <h1 class="pst-heading"><?php if(is_home()):  ?>Latest Post
               <?php elseif(is_search()): ?>Search Results for '<?php echo get_search_query(); ?>'
                <?php elseif(is_404()): ?>404: Page not found
           <?php elseif(get_field('page_h1')): the_field('page_h1'); else: the_title(); endif; ?></h1>
    </div>
  </div>
</section>
<!-- site intro END -->
