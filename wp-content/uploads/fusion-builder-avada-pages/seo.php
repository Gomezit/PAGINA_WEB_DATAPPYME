<?php

		// Exit if accessed directly
		if ( ! defined( 'ABSPATH' ) ) {
			exit;
		}

		function fusion_builder_add_seo_demo( $demos ) {

		$demos['seo'] = array (
  'category' => 'Avada Seo',
  'pages' => 
  array (
  ),
);

			return $demos;
		}
		add_filter( 'fusion_builder_get_demo_pages', 'fusion_builder_add_seo_demo' );