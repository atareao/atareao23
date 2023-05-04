<?php
/**
 * Entry meta
 *
 * @package atareao23
 */

return array(
    'title'      => __( 'Entry meta', 'atareao23' ),
    'categories' => array( 'atareao23' ),
    'blockTypes' => array( 'core/template-part/entry-meta' ),
    'content'    => '<!-- wp:post-author-name {"isLink":true} /-->
    <!-- wp:post-date /-->
    <!-- wp:post-terms {"term":"category"} /-->'
);

