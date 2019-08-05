<?php

		// Exit if accessed directly
		if ( ! defined( 'ABSPATH' ) ) {
			exit;
		}

		function fusion_builder_add_modern_shop_demo( $demos ) {

		$demos['modern_shop'] = array (
  'category' => 'Avada Modern Shop',
  'pages' => 
  array (
  ),
);

			return $demos;
		}
		add_filter( 'fusion_builder_get_demo_pages', 'fusion_builder_add_modern_shop_demo' );