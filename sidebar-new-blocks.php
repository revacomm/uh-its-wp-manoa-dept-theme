<?php

/**
 * Sidebar template containing the primary and secondary widget areas
 *
 */
?>

<div id="primary" class="widget-area primary-sidebar-new-blocks">
  <?php global $post; // Setup the global variable $post

  $post_meta_dropdown_value = get_post_meta($post->ID, '_uh_post_dropdown_field', true);

  if (is_page() && $post->post_parent) {
    // Make sure we are on a page and that the page is a parent.
    $kiddies = wp_list_pages('sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0&link_before=<span class="fa fa-chevron-left" aria-hidden="true"></span>');
  } else {
    $kiddies = wp_list_pages('sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0&link_before=<span class="fa fa-chevron-left" aria-hidden="true"></span>');
  }
  if ($kiddies) {
    echo '<ul class="secondary">';
    echo $kiddies;
    echo '</ul>';
  } ?>

  <ul id="sidebar-new-blocks" class="xoxo">
    <?php
    if (!dynamic_sidebar('primary-widget-area')) :
    ?>

    <?php endif; // end primary widget area 
    ?>

    <?php if (!empty($post_meta_dropdown_value) && $post_meta_dropdown_value != 0) : ?>
      <li class="widget-container">
        <?php
        include 'uh-featured-posts/featured_post.php';
        ?>
      </li>
    <?php endif ?>
  </ul>
</div><!-- #primary .widget-area -->