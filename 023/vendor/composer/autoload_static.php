<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e47effa8f6f74799d61756e5c61dd22
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Viktor\\023\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Viktor\\023\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e47effa8f6f74799d61756e5c61dd22::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e47effa8f6f74799d61756e5c61dd22::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8e47effa8f6f74799d61756e5c61dd22::$classMap;

        }, null, ClassLoader::class);
    }
}
