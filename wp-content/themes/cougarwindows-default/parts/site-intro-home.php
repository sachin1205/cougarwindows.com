<?php $hsi_images = get_field('si_images'); 
if( $hsi_images ): ?>
<!--Home Intro Section-->
<section class="site-intro">
<div class="flexslider-container">
    <div class="flexslider clearfix">
        <ul class="slides">
        <?php foreach( $hsi_images as $hsi_image ): ?>
          <li>
 		<img src="<?php echo $hsi_image['url']; ?>" alt="<?php echo $hsi_image['alt']; ?>" />
  		</li>
<?php endforeach; ?>
        </ul>
    </div>
</div>
</section>
<!--Home Intro Section End-->
<?php endif; ?>