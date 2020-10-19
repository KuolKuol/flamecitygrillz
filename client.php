<?php

    // Setup:
    require __DIR__ . '/vendor/autoload.php';

    use Automattic\WooCommerce\Client;

    $woocommerce = new Client(
    'https://flamecitygrillz.ca/api', // Your store URL
    '', // Your consumer key
    '', // Your consumer secret
        [
            'wp_api' => true, // Enable the WP REST API integration
            'version' => 'wc/v3' // WooCommerce WP REST API version
        ]
    );
