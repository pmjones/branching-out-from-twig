<?php
require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

$smarty = new Smarty();

$smarty->setTemplateDir(__DIR__ . '/templates');
$smarty->setCompileDir(__DIR__ . '/templates_c');
$smarty->setCacheDir(__DIR__ . '/cache');
$smarty->setConfigDir(__DIR__ . '/configs');

$smarty->assign('name', 'world & all');
$smarty->assign('list', [
	['value' => 'foo'],
	['value' => 'bar'],
	['value' => 'baz'],
]);
$smarty->display('example.tpl');
