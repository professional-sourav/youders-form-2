<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1cd3cb7b07b6338ea76df5dd10897c8f
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1cd3cb7b07b6338ea76df5dd10897c8f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1cd3cb7b07b6338ea76df5dd10897c8f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
