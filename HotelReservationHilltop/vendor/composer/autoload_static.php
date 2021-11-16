<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit082f367a15d41c8012456b07676f75ba
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit082f367a15d41c8012456b07676f75ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit082f367a15d41c8012456b07676f75ba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit082f367a15d41c8012456b07676f75ba::$classMap;

        }, null, ClassLoader::class);
    }
}