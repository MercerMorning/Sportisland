<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56d1ad88d8c86f20b849b5db89244f2f
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $prefixesPsr0 = array (
        'j' => 
        array (
            'johnpbloch\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/johnpbloch/wordpress-core-installer/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit56d1ad88d8c86f20b849b5db89244f2f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit56d1ad88d8c86f20b849b5db89244f2f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit56d1ad88d8c86f20b849b5db89244f2f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}