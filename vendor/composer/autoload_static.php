<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit633175906f0f87f44a360e435d04526e
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '431646cfdec640b38c75d8ae40228e17' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
        'B' => 
        array (
            'Botlicious\\' => 11,
            'Bot\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'Botlicious\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Bot\\' => 
        array (
            0 => __DIR__ . '/../..' . '/bot',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PhpOption\\' => 
            array (
                0 => __DIR__ . '/..' . '/phpoption/phpoption/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit633175906f0f87f44a360e435d04526e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit633175906f0f87f44a360e435d04526e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit633175906f0f87f44a360e435d04526e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
