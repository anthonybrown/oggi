<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>" />
	<input type="submit" class="product-submit-btn" value="<?php echo esc_attr_x( '', 'submit button', 'woocommerce' ); ?>" />
	<input type="hidden" name="post_type" value="product" />
</form>