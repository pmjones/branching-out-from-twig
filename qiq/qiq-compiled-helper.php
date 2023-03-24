<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';

$tpl = \Qiq\Template::new(
	paths: __DIR__ . '/templates',
	cachePath: __DIR__ . '/compiled',
	helpers: new MyQiqHelpers(),
);

$tpl->setView('example-compiled-helper');
$tpl->setData([
	'name' => 'world & all',
	'list' => [
		['value' => 'foo'],
		['value' => 'bar'],
		['value' => 'baz'],
	]
]);

echo $tpl();
