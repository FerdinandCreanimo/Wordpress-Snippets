<?php $image = get_field('plakat');
if( !empty($image) ): ?>
<a href="<?php echo get_permalink() ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
<?php endif; ?>
  
