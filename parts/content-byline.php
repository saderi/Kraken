<?php if( is_single() ) { ?>


<?php } else { ?>

<p class="byline">
	 <?php  _e( 'Posted on ', 'jointswp' ); the_time('F j, Y'); ?> <?php the_category(', ') ?>
</p>	


<?php } ?>