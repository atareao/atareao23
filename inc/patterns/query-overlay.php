<?php
/**
 * Query (Overlay)
 *
 * @package atareao23
 */
return array(
    'title'      => __('Query overlay', 'atareao23'),
    'categories' => array( 'atareao23' ),
    'blockTypes' => array( 'core/query' ),
    'content'    => '<!-- wp:query {"queryId":1,"query":{"perPage":0,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query">
    <!-- wp:query-title {"type":"archive","className":"my-5"} /-->
    <!-- wp:term-description /-->
    
    <!-- wp:post-template {"className":"my-5"} -->
    <!-- wp:pattern {"slug": "atareao23/el-entry-overlay"} /-->
    <!-- /wp:post-template -->

    <!-- wp:query-pagination {"className":"mb-5"} -->
    <!-- wp:query-pagination-numbers /-->
    <!-- /wp:query-pagination -->

    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"className":"mb-5","placeholder":"Sin resultados"} -->
    <p class="mb-5">Sin resultados</p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->',
);
