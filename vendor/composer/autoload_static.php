<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcdce1547e94626464cb6e151646a63e1
{
    public static $files = array (
        '35d1e42abf4d8c181ae544a92d8f3f6a' => __DIR__ . '/..' . '/kint-php/kint/Kint.class.php',
        '598f6ff116a3a9ebed039e8721551d6d' => __DIR__ . '/../..' . '/src/Support/whoops-loader.php',
        'bc9d28b6d7d8d656e84ad897d81ca719' => __DIR__ . '/../..' . '/src/Admin/admin-color.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcdce1547e94626464cb6e151646a63e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcdce1547e94626464cb6e151646a63e1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
