<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8257e596f60136c21f77094e5f30710f
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\Fractal\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\Fractal\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/fractal/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8257e596f60136c21f77094e5f30710f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8257e596f60136c21f77094e5f30710f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
