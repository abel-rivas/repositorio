<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit568a9281d355f7204586980229323037
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Extendify\\MetaGallery\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Extendify\\MetaGallery\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit568a9281d355f7204586980229323037::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit568a9281d355f7204586980229323037::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
