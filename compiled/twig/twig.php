<?php
require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');

$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__ . '/cache',
]);

echo $twig->render('example.html', [
    'name' => 'world & all',
    'list' => [
        ['value' => 'foo'],
        ['value' => 'bar'],
        ['value' => 'baz'],
    ]
]);
