<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9261d21ea5e514e28f9f858698338814
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9261d21ea5e514e28f9f858698338814::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9261d21ea5e514e28f9f858698338814::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9261d21ea5e514e28f9f858698338814::$classMap;

        }, null, ClassLoader::class);
    }
}
