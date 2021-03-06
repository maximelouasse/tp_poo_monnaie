<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7b68344c1f8b22a117b3003f21f2158
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Devise\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Devise\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Devise\\Object' => __DIR__ . '/../..' . '/src/Object.php',
        'Devise\\Panier' => __DIR__ . '/../..' . '/src/Panier.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc7b68344c1f8b22a117b3003f21f2158::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc7b68344c1f8b22a117b3003f21f2158::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc7b68344c1f8b22a117b3003f21f2158::$classMap;

        }, null, ClassLoader::class);
    }
}
