<?php
/** Removing Product tags, SKU etc from single product summery */
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
