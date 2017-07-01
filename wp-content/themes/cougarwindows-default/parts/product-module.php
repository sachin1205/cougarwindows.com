<?php 

$images = get_field('hp_images');

if( $images ): ?>
<section class="products-section">
  <div class="inner-wrap">
        <h2 class="section-header">Get Inspired</h2>
            
            <div class="ps-col-wrap clearfix">
        <?php foreach( $images as $image ): ?>
                <a href="<?php echo $image['url']; ?>" class="ps-col lightbox">
                    <figure class="ps-col-img"> <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" /></figure>
                </a>               
            
        <?php endforeach; ?>
      
          </div>
      </div>
</section>
<?php endif; ?>



          