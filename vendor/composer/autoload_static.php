<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e4fba7606ee8d9288e7eab71911ea72
{
    public static $classMap = array (
        'Connection' => __DIR__ . '/../..' . '/core/database/connection.php',
        'Post' => __DIR__ . '/../..' . '/lesson_18-array_methods/index.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit9e4fba7606ee8d9288e7eab71911ea72::$classMap;

        }, null, ClassLoader::class);
    }
}
