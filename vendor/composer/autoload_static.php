<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit35308894302ca6b37e8fdf669eb671c6
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Furry\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Furry\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit35308894302ca6b37e8fdf669eb671c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit35308894302ca6b37e8fdf669eb671c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit35308894302ca6b37e8fdf669eb671c6::$classMap;

        }, null, ClassLoader::class);
    }
}
