<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf38d912e3a364cc03e0ecb8503cb0abd
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Html2Text\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Html2Text\\' => 
        array (
            0 => __DIR__ . '/..' . '/soundasleep/html2text/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf38d912e3a364cc03e0ecb8503cb0abd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf38d912e3a364cc03e0ecb8503cb0abd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
