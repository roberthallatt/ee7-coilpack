<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4113fa66f570df6c30ffaeb3734c93ef
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ExpressionEngine\\Dependency\\Symfony\\Polyfill\\Ctype\\' => 51,
            'ExpressionEngine\\Dependency\\Sabberworm\\CSS\\' => 43,
            'ExpressionEngine\\Dependency\\Psr\\Cache\\' => 38,
            'ExpressionEngine\\Dependency\\PhpOption\\' => 38,
            'ExpressionEngine\\Dependency\\League\\MimeTypeDetection\\' => 53,
            'ExpressionEngine\\Dependency\\League\\Flysystem\\Cached\\' => 52,
            'ExpressionEngine\\Dependency\\League\\Flysystem\\' => 45,
            'ExpressionEngine\\Dependency\\Dotenv\\' => 35,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ExpressionEngine\\Dependency\\Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'ExpressionEngine\\Dependency\\Sabberworm\\CSS\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabberworm/php-css-parser/src',
        ),
        'ExpressionEngine\\Dependency\\Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'ExpressionEngine\\Dependency\\PhpOption\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption',
        ),
        'ExpressionEngine\\Dependency\\League\\MimeTypeDetection\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/mime-type-detection/src',
        ),
        'ExpressionEngine\\Dependency\\League\\Flysystem\\Cached\\' => 
        array (
            0 => __DIR__ . '/..' . '/expressionengine/flysystem-cached-adapter/src',
        ),
        'ExpressionEngine\\Dependency\\League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem/src',
        ),
        'ExpressionEngine\\Dependency\\Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4113fa66f570df6c30ffaeb3734c93ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4113fa66f570df6c30ffaeb3734c93ef::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4113fa66f570df6c30ffaeb3734c93ef::$classMap;

        }, null, ClassLoader::class);
    }
}
