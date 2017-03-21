<?php
namespace Tickleman\My_Framework_Rocks;

use ITRocks\Framework\Configuration;

global $loc;
require __DIR__ . '/../../loc.php';
require __DIR__ . '/../../itrocks/framework/config.php';

$config['Tickleman/My_Framework_Rocks'] = [
	Configuration::APP         => Application::class,
	Configuration::ENVIRONMENT => $loc[Configuration::ENVIRONMENT],
	Configuration::EXTENDS_APP => 'ITRocks/Framework',
];
