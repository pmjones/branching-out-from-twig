<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';

use Qiq\Template;

$tpl = \Qiq\Template::new(
	paths: __DIR__ . '/templates',
	cachePath: __DIR__ . '/compiled',
);

$tpl->setView('example-compiled-stan');
$tpl->setData([
	'name' => 'world & all',
	'list' => [
		['value' => 'foo'],
		['value' => 'bar'],
		['value' => 'baz'],
	]
]);

echo $tpl();
