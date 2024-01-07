<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit707d86787709f4004fe2840256b887b0
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit707d86787709f4004fe2840256b887b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit707d86787709f4004fe2840256b887b0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit707d86787709f4004fe2840256b887b0::$classMap;

        }, null, ClassLoader::class);
    }
}
