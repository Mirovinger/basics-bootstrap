<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<label class="visuallyhidden" for="s"><?php _e('Search for:', 'basics'); ?></label>
	<input type="text" value="" name="s" id="s" placeholder="<?php _e('Search', 'basics'); ?> <?php bloginfo('name'); ?>">
	<input type="submit" id="searchsubmit" value="<?php _e('Search', 'basics'); ?>" class="button">
</form>