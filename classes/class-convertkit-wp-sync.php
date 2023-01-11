<?php
/**
 * Main plugin class.
 *
 * @package Convertkit_Wp_Sync
 */

/**
 * Custom class for ConvertKit WP Sync.
 */
class Convertkit_Wp_Sync {

	/**
	 * CK Settings class.
	 *
	 * @var ConvertKit_Settings
	 */
	public $settings;


	/**
	 * Constructor.
	 */
	public function __construct() {

	}

	/**
	 * Create a draft broadcast.
	 *
	 * @param array $params Parameters.
	 * 		- content: string
	 * 		- description: string
	 */
	public function create_draft_broadcast( $params = array() ) {

		$params = wp_parse_args(
			$params,
			array(
				'content'     => 'Test Broadcast',
				'description' => 'Test Broadcast Description',
			)
		);

		// Define the class that reads/writes settings.
		$this->settings = new ConvertKit_Settings();

		$response = wp_remote_post(
			'https://api.convertkit.com/v3/broadcasts?api_secret=' . $this->settings->get_api_secret(),
			array(
				'Accept-Encoding' => 'gzip',
				'headers'         => array(
					'Content-Type' => 'application/json; charset=utf-8',
				),
				'body'            => wp_json_encode( $params ),
				'timeout'         => 10,
			)
		);
	}
}
