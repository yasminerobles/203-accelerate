<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit95753d5aa2e3a7942eae2a5b015550e7
{
    public static $files = array (
        '2c2d2fe92db4cd03403dbb108ac263b7' => __DIR__ . '/..' . '/codeinwp/gutenberg-menu-icons/load.php',
        '0498965e576e4ec1efaedeccfee8b5f0' => __DIR__ . '/..' . '/codeinwp/menu-item-custom-fields/menu-item-custom-fields.php',
        '347e48cf03d89942a6ddafc17d247b11' => __DIR__ . '/..' . '/codeinwp/icon-picker/icon-picker.php',
        '5a095c604245b0e67e4573f0a3b240cd' => __DIR__ . '/..' . '/codeinwp/themeisle-sdk/load.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit95753d5aa2e3a7942eae2a5b015550e7::$classMap;

        }, null, ClassLoader::class);
    }
}
