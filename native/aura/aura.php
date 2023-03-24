<?php
require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

$helperLocatorFactory = new \Aura\Html\HelperLocatorFactory();
$helpers = $helperLocatorFactory->newInstance();

$view_factory = new \Aura\View\ViewFactory($helpers);
$view = $view_factory->newInstance();

$view_registry = $view->getViewRegistry();
$view_registry->setPaths([__DIR__ . '/templates']);

$view->setData([
	'name' => 'world & all',
	'list' => [
		['value' => 'foo'],
		['value' => 'bar'],
		['value' => 'baz'],
	]
]);
$view->setView('example');

echo $view();
