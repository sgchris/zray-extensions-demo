<?php

$zre = new \ZRayExtension('MyWp');
$zre->setEnabledAfter('wp_cache_close');

$zre->traceFunction('wp_cache_close', function(){}, function($context, &$storage) {
	if ( ! function_exists( 'get_plugins' ) ) {
		require_once ABSPATH . 'wp-admin/includes/plugin.php';
	}
	
	$pluginsData = get_plugins();
	$activePlugins = get_option('active_plugins');
	
	if (is_array($pluginsData) && count($pluginsData) > 0) {
		foreach ($pluginsData as $pluginKey => $pluginData) {
			$storage['default_panels'][] = array(
				'name' => $pluginData['Name'], 
				'version' => $pluginData['Version'],
				'active' => in_array($pluginKey, $activePlugins) ? 'Active' : 'Inactive',
			);
		}
	}
	
	// duplicate the data for the new panel
	$storage['clean_html'] = $storage['default_panels'];
	$storage['simple_table'] = $storage['default_panels'];
	$storage['search_and_paging'] = $storage['default_panels'];
	$storage['summary_table'] = $storage['default_panels'];
});

