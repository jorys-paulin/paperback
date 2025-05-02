<?php
/**
 * Title: 404
 * Slug: paperback/hidden-404
 * Inserter: no
 *
 * @package Paperback
 * @since Paperback 1.0
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
  <!-- wp:heading {"level":1} -->
  <h1 class="wp-block-heading"><?php echo esc_html_x( 'Page not found', '404 error message', 'paperback' ); ?></h1>
  <!-- /wp:heading -->
  <!-- wp:paragraph -->
  <p><?php echo esc_html_x( 'The page you are looking for doesn\'t exist, or it has been moved. Please try searching using the form below.', '404 error message', 'paperback' ); ?></p>
  <!-- /wp:paragraph -->
  <!-- wp:pattern {"slug":"paperback/hidden-search"} /-->
</div>
<!-- /wp:group -->
