<?php
/**
 * add a link to admin options page from plugins directory
 *
 * @since 1.0.0
 */
  add_filter( 'plugin_action_links', 'wp_easy_grid_add_action_plugin', 10, 5 );
  function wp_easy_grid_add_action_plugin( $links, $file ) {
  	static $plugin;
  			$learn_more_link = array('settings' => '<a href="admin.php?page=wp_easy_grid_options">' . __('Learn more', 'wp_easy_grid') . '</a>');
        $links = array_merge($learn_more_link, $links);

  		return $links;
  }
