<?php
/**
 * Title: Written by
 * Slug: paperback/hidden-written-by
 * Inserter: no
 *
 * @package    WordPress
 * @subpackage Twenty_Twenty_Five
 * @since      Twenty Twenty-Five 1.0
 */

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0.2em"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group has-small-font-size">
	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Written by ', 'paperback' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:post-author-name {"isLink":true} /-->
	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'in', 'paperback' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:post-terms {"term":"category"} /-->
</div>
<!-- /wp:group -->
