<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0605b781f8cfa7db475fd64cfcda600
{
    public static $files = array (
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'XDApp\\Casbin\\' => 13,
            'XDAppTest\\Casbin\\' => 17,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Contracts\\Service\\' => 26,
            'Symfony\\Contracts\\Cache\\' => 24,
            'Symfony\\Component\\VarExporter\\' => 30,
            'Symfony\\Component\\ExpressionLanguage\\' => 37,
            'Symfony\\Component\\Cache\\' => 24,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
            'Psr\\Cache\\' => 10,
        ),
        'I' => 
        array (
            'IPTools\\' => 8,
        ),
        'C' => 
        array (
            'Casbin\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'XDApp\\Casbin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'XDAppTest\\Casbin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Contracts\\Service\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/service-contracts',
        ),
        'Symfony\\Contracts\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/cache-contracts',
        ),
        'Symfony\\Component\\VarExporter\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-exporter',
        ),
        'Symfony\\Component\\ExpressionLanguage\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/expression-language',
        ),
        'Symfony\\Component\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/cache',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'IPTools\\' => 
        array (
            0 => __DIR__ . '/..' . '/s1lentium/iptools/src',
        ),
        'Casbin\\' => 
        array (
            0 => __DIR__ . '/..' . '/casbin/casbin/src',
        ),
    );

    public static $classMap = array (
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0605b781f8cfa7db475fd64cfcda600::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0605b781f8cfa7db475fd64cfcda600::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite0605b781f8cfa7db475fd64cfcda600::$classMap;

        }, null, ClassLoader::class);
    }
}
