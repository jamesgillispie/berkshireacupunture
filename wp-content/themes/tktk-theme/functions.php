<?php
/**
 * The tktk theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tktk
 */

use Timber\Timber;
use Tktk\Setup;
use Tktk\Enqueue;
use Tktk\TimberContext;
use Tktk\CustomRoutes;
use Tktk\StyleguideRoutes;

// Load Composer dependencies
if ( file_exists(__DIR__ . '/vendor/autoload.php') ) {
    require_once __DIR__ . '/vendor/autoload.php';
}

// Initialize Timber if available
if ( class_exists(Timber::class) ) {
    Timber::init();
} else {
    add_action('admin_notices', function () {
        echo '<div class="error"><p>Timber is not installed. Please run <code>composer install</code>.</p></div>';
    });
}

new Setup();
new Enqueue( 'tktk' );
new TimberContext();
new CustomRoutes();
new StyleguideRoutes();

/**
 * Register pattern categories for FSE
 */
function tktk_register_pattern_categories() {
    register_block_pattern_category(
        'hero',
        array( 'label' => __( 'Hero', 'tktk' ) )
    );
    register_block_pattern_category(
        'sections',
        array( 'label' => __( 'Sections', 'tktk' ) )
    );
    register_block_pattern_category(
        'contact',
        array( 'label' => __( 'Contact', 'tktk' ) )
    );
    register_block_pattern_category(
        'utility',
        array( 'label' => __( 'Utility', 'tktk' ) )
    );
}
add_action( 'init', 'tktk_register_pattern_categories' );

/**
 * Remove core WordPress block patterns
 */
function tktk_remove_core_patterns() {
    remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'tktk_remove_core_patterns' );

/**
 * Disable remote block patterns from WordPress.org directory
 */
add_filter( 'should_load_remote_block_patterns', '__return_false' );

/**
 * Enqueue editor styles for block editor parity
 */
function tktk_enqueue_editor_styles() {
    add_editor_style( 'build/editor-style.css' );
}
add_action( 'after_setup_theme', 'tktk_enqueue_editor_styles' );

/**
 * Register block styles
 */
function tktk_register_block_styles() {
    // Button styles
    register_block_style(
        'core/button',
        array(
            'name'  => 'primary',
            'label' => __( 'Primary (Sage)', 'tktk' ),
        )
    );
    
    register_block_style(
        'core/button',
        array(
            'name'  => 'secondary',
            'label' => __( 'Secondary (Outlined)', 'tktk' ),
        )
    );
    
    register_block_style(
        'core/button',
        array(
            'name'  => 'teal',
            'label' => __( 'Teal', 'tktk' ),
        )
    );
    
    // Image styles
    register_block_style(
        'core/image',
        array(
            'name'  => 'portrait',
            'label' => __( 'Portrait Style', 'tktk' ),
        )
    );
    
    // Group styles
    register_block_style(
        'core/group',
        array(
            'name'  => 'soft-background',
            'label' => __( 'Soft Background', 'tktk' ),
        )
    );
}
add_action( 'init', 'tktk_register_block_styles' );