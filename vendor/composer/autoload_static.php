<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit99d69a4e51284fd1e71dba2cd54302cf
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit99d69a4e51284fd1e71dba2cd54302cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit99d69a4e51284fd1e71dba2cd54302cf::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit99d69a4e51284fd1e71dba2cd54302cf::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit99d69a4e51284fd1e71dba2cd54302cf::$classMap;

        }, null, ClassLoader::class);
    }
}
