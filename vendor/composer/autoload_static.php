<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit71b465081ae9abc4c522e4f2359a0a47
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OOP\\App\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OOP\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'OOP\\App\\Database' => __DIR__ . '/../..' . '/App/Database.php',
        'OOP\\App\\TrxHeaders' => __DIR__ . '/../..' . '/App/TrxHeaders.php',
        'OOP\\App\\TrxHeadersController' => __DIR__ . '/../..' . '/App/TrxHeadersController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit71b465081ae9abc4c522e4f2359a0a47::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit71b465081ae9abc4c522e4f2359a0a47::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit71b465081ae9abc4c522e4f2359a0a47::$classMap;

        }, null, ClassLoader::class);
    }
}
