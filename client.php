<?php

    // Setup:
    require __DIR__ . '/vendor/autoload.php';

    use Automattic\WooCommerce\Client;

    $woocommerce = new Client(
    'https://flamecitygrillz.ca/api', // Your store URL
    'ck_8f508793e00f6d3aeea1fa7150a9d29d42773997', // Your consumer key
    'cs_816cc626553a2ade27ee2263f28309eb428db9e2', // Your consumer secret
        [
            'wp_api' => true, // Enable the WP REST API integration
            'version' => 'wc/v3' // WooCommerce WP REST API version
        ]
    );