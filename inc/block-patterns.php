<?php
/**
 * atareao23 Theme: Block Patterns
 *
 * @package atareao23
 */
if ( ! function_exists( 'atareao23_register_block_patterns' ) ) :

    function atareao23_register_block_patterns() {

        if ( function_exists( 'register_block_pattern_category' ) ) {
            register_block_pattern_category(
                'atareao23',
                array( 'label' => __( 'atareao23', 'atareao23' ) )
            );
        }

        if ( function_exists( 'register_block_pattern' ) ) {
            $block_patterns = array(
                '404',
                'footer-columns',
                'footer-left',
                'footer-primary',
                'footer-search',
                'footer-separator',
                'footer-simple',
                'footer-small',
                'footer-with-site-title',
                'query-overlay',
                'el-entry-meta',
                'el-entry-overlay',
            );

            foreach ( $block_patterns as $block_pattern ) {
                register_block_pattern(
                    'atareao23/' . $block_pattern,
                    require __DIR__ . '/patterns/' . $block_pattern . '.php'
                );
            }

            //register header templates also as patterns
            $header_patterns = array(
                'centered',
                'default',
                'linear',
                'minimal',
                'rounded-logo',
                'wide',
            );

            foreach ( $header_patterns as $header_pattern ) {
                register_block_pattern(
                    'atareao23/header-' . $header_pattern,
                    array(
                        'title'      => __( 'atareao23 Header (' . $header_pattern . ')', 'atareao23' ),
                        'categories' => array( 'header' ),
                        'blockTypes' => array( 'core/template-part/header' ),
                        'content'    => file_get_contents (get_theme_file_path( '/parts/header-' . $header_pattern . '.html' )),
                    )
                );
            }
        }
    }
endif;

add_action( 'init', 'atareao23_register_block_patterns', 9 );
