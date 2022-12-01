<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb7a23c0dd1a75ac47d08c517730e0208
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AdinanCenci\\Climatempo\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AdinanCenci\\Climatempo\\' => 
        array (
            0 => __DIR__ . '/..' . '/adinan-cenci/climatempo-api/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb7a23c0dd1a75ac47d08c517730e0208::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb7a23c0dd1a75ac47d08c517730e0208::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb7a23c0dd1a75ac47d08c517730e0208::$classMap;

        }, null, ClassLoader::class);
    }
}
