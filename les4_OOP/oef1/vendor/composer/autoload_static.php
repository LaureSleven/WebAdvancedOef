<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit937a7c3332383dfe5b82e0c5ff7a100c
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'worker\\' => 7,
        ),
        't' => 
        array (
            'tool\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'worker\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/worker',
        ),
        'tool\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/tool',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit937a7c3332383dfe5b82e0c5ff7a100c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit937a7c3332383dfe5b82e0c5ff7a100c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}