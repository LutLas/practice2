<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf7ed5c1886f80bdea525b9c77ff79e40
{
    public static $classMap = array (
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\UsersAuth' => __DIR__ . '/../..' . '/app/controllers/authenticate.php',
        'App\\Controllers\\UsersControl' => __DIR__ . '/../..' . '/app/controllers/add-name.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'ComposerAutoloaderInitf7ed5c1886f80bdea525b9c77ff79e40' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitf7ed5c1886f80bdea525b9c77ff79e40' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'Names' => __DIR__ . '/../..' . '/Names.php',
        'Parcel' => __DIR__ . '/../..' . '/Parcel.php',
        'Project' => __DIR__ . '/../..' . '/app/models/Project.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf7ed5c1886f80bdea525b9c77ff79e40::$classMap;

        }, null, ClassLoader::class);
    }
}
