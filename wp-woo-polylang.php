<?php

// SPDX-License-Identifier: AGPL-3.0-or-later

/**
 * Plugin Name: WP Woo Polylang
 * Description: Makes WooCommerce multilingual on Polylang: translated catalog, synced stock and prices, and a translated cart and checkout.
 * Version: 0.0.1
 * Requires at least: 6.6
 * Requires PHP: 8.3
 * Requires Plugins: woocommerce, polylang
 * WC requires at least: 9.6
 * Author: Jameson Grieve
 * License: AGPL-3.0-or-later
 * License URI: https://www.gnu.org/licenses/agpl-3.0.html
 * Text Domain: wp-woo-polylang
 */

declare(strict_types=1);

if (!defined('ABSPATH')) {
    return;
}

require_once __DIR__ . '/vendor/autoload.php';

WooPolylang\Wp\Plugin::boot(__FILE__);
