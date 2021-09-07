<?php
/**
 * Plugin Name:       Kahler Blocks
 * Description:       Additional blocks designed specifically for Kahler
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Ross Cooper
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       kahler-blocks
 *
 * @package           kahler-blocks
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */
function kahler_blocks_init() {
	register_block_type( __DIR__ );
}
add_action( 'init', 'kahler_blocks_init' );
