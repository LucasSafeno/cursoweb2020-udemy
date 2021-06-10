<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52757ee163da2bcf8e1f854fa03b580a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit52757ee163da2bcf8e1f854fa03b580a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52757ee163da2bcf8e1f854fa03b580a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
