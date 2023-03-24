<?php
require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

$latte = new Latte\Engine();
$latte->setTempDirectory(__DIR__ . '/tempdir');

$latte->render(__DIR__ . '/templates/example.latte', [
	'name' => 'world & all',
	'list' => [
		['value' => 'foo'],
		['value' => 'bar'],
		['value' => 'baz'],
	]
]);
