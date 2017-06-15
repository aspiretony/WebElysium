<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'AdminLTE' => $baseDir . '/vendor/maiconpinto/cakephp-adminlte-theme/',
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'Temao' => $baseDir . '/plugins/Temao/',
        'ThemeSorcerer' => $baseDir . '/plugins/ThemeSorcerer/',
        'tema' => $baseDir . '/plugins/tema/'
    ]
];