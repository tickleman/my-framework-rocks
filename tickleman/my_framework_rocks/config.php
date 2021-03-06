<?php
namespace Tickleman\My_Framework_Rocks;

use ITRocks\Framework;
use ITRocks\Framework\Configuration;
use ITRocks\Framework\Plugin\Priority;
use ITRocks\Framework\View;

global $loc;
require __DIR__ . '/../../loc.php';
require __DIR__ . '/../../itrocks/framework/config.php';

$config['Tickleman/My_Framework_Rocks'] = [
	Configuration::APP         => Application::class,
	Configuration::ENVIRONMENT => $loc[Configuration::ENVIRONMENT],
	Configuration::EXTENDS_APP => 'ITRocks/Framework',

	Priority::NORMAL => [
		Framework\Tools\Wiki::class,
		Framework\View::class => [
			View\Html\Engine::CSS => 'mfr'
		],
		Framework\Widget\Menu::class => [
			Framework\Widget\Menu::TITLE => [SL, 'Home', '#main'],
			'Code snippets' => [
				'/Tickleman/My_Framework_Rocks/Code/Snippets' => 'Code snippets',
				'/Tickleman/My_Framework_Rocks/Code/Files'    => 'Code snippet files'
			],
			'Administration' => [
				'/Tickleman/My_Framework_Rocks/Frameworks'                      => 'Frameworks',
				'/Tickleman/My_Framework_Rocks/Framework/Programming_Languages' => 'Programming languages',
				'/ITRocks/Framework/Users'                                      => 'Users'
			]
		]
	]
];
