<?php
/**
 * Footer with menu and separator
 *
 * @package atareao23
 */

return array(
    'title'      => __( 'Footer with menu and separator', 'atareao23' ),
    'categories' => array( 'atareao23' ),
    'blockTypes' => array( 'core/template-part/footer' ),
    'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px"}}},"layout":{"inherit":false}} -->
    <div class="wp-block-group" style="padding-top:60px"><!-- wp:separator {"color":"primary","className":"is-style-wide"} -->
    <hr class="wp-block-separator has-text-color has-background has-primary-background-color has-primary-color is-style-wide"/>
    <!-- /wp:separator -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"20px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-group" style="padding-bottom:20px"><!-- wp:paragraph {"fontSize":"small"} -->
    <p class="has-small-font-size"><meta charset="utf-8"><strong>Implemented by <a rel="nofollow" href="https://atareao.es">atareao</a></strong></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:navigation {"itemsJustification":"center","overlayMenu":"never","className":"social-links"} /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);
