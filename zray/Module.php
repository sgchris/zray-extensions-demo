<?php

namespace MyWp;

class Module extends \ZRay\ZRayModule {
	
	public function config() {
		return array(
			'panels' => array(
				'clean_html' => array(
					'display' => true,
					'logo' => 'logo.png',
					'menuTitle' => 'Clean HTML',
					'panelTitle' => 'My WordPress plugin (Clean HTML)',
				),
				'simple_table' => array(
					'display' => true,
					'logo' => 'logo.png',
					'menuTitle' => 'Simple Table',
					'panelTitle' => 'My WordPress plugin (Simple Table)',
				),
				'search_and_paging' => array(
					'display' => true,
					'logo' => 'logo.png',
					'menuTitle' => 'Search & Paging',
					'panelTitle' => 'Search & Paging',
					
					'searchId' => 'table_with_seach_and_paging_search_id',
					'pagerId' => 'table_with_seach_and_paging_pager_id',
				),
				'summary_table' => array(
					'display' => true,
					'logo' => 'logo.png',
					'menuTitle' => 'Summary table',
					'panelTitle' => 'Summary table',
					
					'searchId' => 'summary_table_search_id',
					'pagerId' => 'summary_table_pager_id',
				),
				
			),
		);
	}
}
