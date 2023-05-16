<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd2ea235416cc58c2547953301ec409c
{
    public static $files = array (
        '8f0e24c82839054e36346ca24952f364' => __DIR__ . '/../..' . '/config/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd2ea235416cc58c2547953301ec409c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd2ea235416cc58c2547953301ec409c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdd2ea235416cc58c2547953301ec409c::$classMap;

        }, null, ClassLoader::class);
    }
}
