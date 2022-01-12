<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcacfecd45e56f29340ee93ad5f45f98d
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'D' => 
        array (
            'Database\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcacfecd45e56f29340ee93ad5f45f98d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcacfecd45e56f29340ee93ad5f45f98d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcacfecd45e56f29340ee93ad5f45f98d::$classMap;

        }, null, ClassLoader::class);
    }
}
