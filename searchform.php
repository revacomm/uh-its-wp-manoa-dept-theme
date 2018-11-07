<?php
/**
 * Template for displaying search form
 */
?>
	<form role="search" method="get" class="search-form" id="searchform" action="<?php echo esc_url( home_url( '/search/' ) ); ?>">
		<label for="basic-site-search" class="assistive-text screen-reader-text"><?php _e( 'Search this site', 'manoa2018' ); ?></label>
		<input type="search" class="search-field" name="basic-site-search" id="basic-site-search" placeholder="<?php esc_attr_e( 'Search', 'manoa2018' ); ?>" />
		<button type="submit" class="search-submit" name="submit" id="searchsubmit" aria-label="search"><span class="fa fa-search" aria-hidden="true"></span><span class="screen-reader-text">Search</span></button>
	</form>