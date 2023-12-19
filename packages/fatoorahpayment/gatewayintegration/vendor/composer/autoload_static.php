<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ba22f55ad3ab17947f9c5a9be4af91a
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fatoorahpayment\\Gatewayintegration\\' => 35,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fatoorahpayment\\Gatewayintegration\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ba22f55ad3ab17947f9c5a9be4af91a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ba22f55ad3ab17947f9c5a9be4af91a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8ba22f55ad3ab17947f9c5a9be4af91a::$classMap;

        }, null, ClassLoader::class);
    }
}