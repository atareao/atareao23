<?php
/**
 * Simple footer
 *
 * @package atareao23
 */

return array(
    'title'      => __( 'Simple footer', 'atareao23' ),
    'categories' => array( 'atareao23' ),
    'blockTypes' => array( 'core/template-part/footer' ),
    'content'    => '<!-- wp:group {"layout":{"inherit":true}} -->
    <div class="wp-block-group">
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"30px"}}}} -->
        <div class="wp-block-group" style="padding-top:80px;padding-bottom:30px">
            <!-- wp:paragraph {"align":"center"} -->
            <p class=""has-text-align-center>Implemented by <a rel="nofollow" href="https://atareao.es">atareao</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->',
);
