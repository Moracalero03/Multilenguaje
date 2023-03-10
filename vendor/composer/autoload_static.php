<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f253d23fbf091f7f475f1ec2b4c6d39
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Valitron\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Valitron\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/valitron/src/Valitron',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f253d23fbf091f7f475f1ec2b4c6d39::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f253d23fbf091f7f475f1ec2b4c6d39::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4f253d23fbf091f7f475f1ec2b4c6d39::$classMap;

        }, null, ClassLoader::class);
    }
}
