<?php
require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

$templates = new League\Plates\Engine(__DIR__ . '/templates');

echo $templates->render('example', [
	'name' => 'world & all',
	'list' => [
		['value' => 'foo'],
		['value' => 'bar'],
		['value' => 'baz'],
	]
]);
