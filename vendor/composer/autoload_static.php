<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94e0dd71320bb6fc19071f8cb50a8930
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit94e0dd71320bb6fc19071f8cb50a8930::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94e0dd71320bb6fc19071f8cb50a8930::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
