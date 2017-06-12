<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitced403fdcb39afc7ea94e256dcc2d20e
{
    public static $files = array (
        'e8aa6e4b5a1db2f56ae794f1505391a8' => __DIR__ . '/..' . '/amphp/amp/lib/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'A' => 
        array (
            'Amp\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Amp\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/amp/lib',
        ),
    );

    public static $prefixesPsr0 = array (
        'K' => 
        array (
            'Kafka\\' => 
            array (
                0 => __DIR__ . '/..' . '/nmred/kafka-php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitced403fdcb39afc7ea94e256dcc2d20e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitced403fdcb39afc7ea94e256dcc2d20e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitced403fdcb39afc7ea94e256dcc2d20e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
