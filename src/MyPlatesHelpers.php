<?php

use League\Plates\Engine;
use League\Plates\Extension\ExtensionInterface;

class MyPlatesHelpers implements ExtensionInterface
{
    public function register(Engine $engine)
    {
        $engine->registerFunction('rot13', [$this, 'rot13']);
    }

    public function rot13(string $str): string
    {
        return str_rot13($str);
    }
}
