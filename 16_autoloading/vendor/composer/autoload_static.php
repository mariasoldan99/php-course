<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit00f0d60b660bf6268fd62fe6e2f316c3
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit00f0d60b660bf6268fd62fe6e2f316c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit00f0d60b660bf6268fd62fe6e2f316c3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit00f0d60b660bf6268fd62fe6e2f316c3::$classMap;

        }, null, ClassLoader::class);
    }
}