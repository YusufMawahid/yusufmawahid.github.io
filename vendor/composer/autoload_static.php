<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbabdc7084c9867e2f1b76978ee989940
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

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mail' => 
            array (
                0 => __DIR__ . '/..' . '/pear/mail',
            ),
        ),
        'C' => 
        array (
            'Console' => 
            array (
                0 => __DIR__ . '/..' . '/pear/console_getopt',
            ),
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/..' . '/pear/pear-core-minimal/src',
    );

    public static $classMap = array (
        'PEAR_Exception' => __DIR__ . '/..' . '/pear/pear_exception/PEAR/Exception.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbabdc7084c9867e2f1b76978ee989940::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbabdc7084c9867e2f1b76978ee989940::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitbabdc7084c9867e2f1b76978ee989940::$prefixesPsr0;
            $loader->fallbackDirsPsr0 = ComposerStaticInitbabdc7084c9867e2f1b76978ee989940::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInitbabdc7084c9867e2f1b76978ee989940::$classMap;

        }, null, ClassLoader::class);
    }
}
