<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited9688fcaa64126156ab65b15c3fb6da
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInited9688fcaa64126156ab65b15c3fb6da::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited9688fcaa64126156ab65b15c3fb6da::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}