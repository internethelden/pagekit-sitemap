<?php

use Pagekit\Application;


return [
	'name' => 'sitemap',
	'type' => 'extension',
	'main' => function( Application $app ) {
		// bootstrap code
	},
	
	'autoload' => [
		'Spqr\\Sitemap\\' => 'src'
	],
	
	'nodes' => [],
	
	'routes' => [
		'/sitemap' => [
			'name'       => '@sitemap',
			'controller' => [
				'Spqr\\Sitemap\\Controller\\SitemapController'
			]
		],
	],
	
	'menu' => [
		'sitemap'           => [
			'label'  => 'Sitemap',
			'url'    => '@sitemap',
			'active' => '@sitemap(/*)?',
			'icon'   => 'sitemap:icon.svg'
		],
		'sitemap: settings' => [
			'parent' => 'sitemap',
			'label'  => 'Settings',
			'url'    => '@sitemap/settings',
			'access' => 'sitemap: manage settings'
		]
	],
	
	'permissions' => [
		'sitemap: manage settings' => [
			'title' => 'Manage settings'
		]
	],
	
	'settings' => '@sitemap/settings',
	
	'config' => [
		'frequency' => 'weekly',
		'filename' => 'sitemap.xml',
		'excluded'  => []
	],
	
	'events' => [
	]
];