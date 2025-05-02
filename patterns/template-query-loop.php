<?php
/**
 * Title: List of posts, 3 columns
 * Slug: paperback/template-query-loop
 * Categories: query
 * Block Types: core/query
 * Description: A list of posts, 3 columns, with featured image and post date.
 *
 * @package Paperback
 * @since Paperback 1.0
 */

?>

<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"align":"full","layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:post-featured-image {"aspectRatio":"16/9"} /-->
		<!-- wp:post-title {"isLink":true} /-->
		<!-- wp:post-excerpt /-->
		<!-- wp:post-date {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontSize":"small"} /-->
	<!-- /wp:post-template -->
	
	<!-- wp:query-no-results -->
		<!-- wp:pattern {"slug":"paperback/hidden-no-results"} /-->
	<!-- /wp:query-no-results -->
	
	<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
