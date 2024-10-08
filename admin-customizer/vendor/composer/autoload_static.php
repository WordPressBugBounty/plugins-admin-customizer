<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39fc375a44020997d1b43bedca867244
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nilambar\\AdminNotice\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nilambar\\AdminNotice\\' => 
        array (
            0 => __DIR__ . '/..' . '/ernilambar/wp-admin-notice/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Nilambar\\AdminNotice\\Notice' => __DIR__ . '/..' . '/ernilambar/wp-admin-notice/src/Notice.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit39fc375a44020997d1b43bedca867244::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39fc375a44020997d1b43bedca867244::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit39fc375a44020997d1b43bedca867244::$classMap;

        }, null, ClassLoader::class);
    }
}
