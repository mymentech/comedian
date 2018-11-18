<?php
function comedian_print_custom_bg_css( $post_id ) {
	$_comedian_page_options = get_post_meta( $post_id, '_comedian_page_options', true );
	if ( isset( $_comedian_page_options['page_bg_image'] ) && ! empty( $_comedian_page_options['page_bg_image'] ) ) {
		$_bg_image_id = $_comedian_page_options['page_bg_image'];
		printf( "<style>body{background-image: url('%s');background-size: cover;}</style>", wp_get_attachment_image_src( $_bg_image_id, 'full' )[0] );
	}
}

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );