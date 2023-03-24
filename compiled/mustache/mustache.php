<?php
require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

$mustache = new Mustache_Engine([
	'cache' => __DIR__ . '/cache',
	'loader' => new Mustache_Loader_FilesystemLoader(__DIR__ . '/templates'),
]);

$tpl = $mustache->loadTemplate('example');

echo $tpl->render([
	'name' => 'world & all',
	'list' => [
		['value' => 'foo'],
		['value' => 'bar'],
		['value' => 'baz'],
	]
]);
