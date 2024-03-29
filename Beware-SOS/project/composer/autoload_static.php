<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1f433e2771fe36a91c592da14054049b
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1f433e2771fe36a91c592da14054049b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1f433e2771fe36a91c592da14054049b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1f433e2771fe36a91c592da14054049b::$classMap;

        }, null, ClassLoader::class);
    }
}
