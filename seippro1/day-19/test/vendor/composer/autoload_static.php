<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit96a5dbf25ce197ed6945be1ef87b2ff3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit96a5dbf25ce197ed6945be1ef87b2ff3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit96a5dbf25ce197ed6945be1ef87b2ff3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}