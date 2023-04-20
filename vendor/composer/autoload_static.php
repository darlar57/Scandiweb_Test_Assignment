<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0cfc84e715c104c7bc151c9a0828b85
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Models\\Controller' => __DIR__ . '/../..' . '/app/models/Controller.php',
        'Models\\DB' => __DIR__ . '/../..' . '/app/models/DB.php',
        'Models\\DbOperations' => __DIR__ . '/../..' . '/app/models/DbOperations.php',
        'Models\\Product' => __DIR__ . '/../..' . '/app/models/Product.php',
        'Models\\Products\\Book' => __DIR__ . '/../..' . '/app/models/Products/Book.php',
        'Models\\Products\\DVD' => __DIR__ . '/../..' . '/app/models/Products/DVD.php',
        'Models\\Products\\Furniture' => __DIR__ . '/../..' . '/app/models/Products/Furniture.php',
        'Models\\Validate' => __DIR__ . '/../..' . '/app/models/Validate.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita0cfc84e715c104c7bc151c9a0828b85::$classMap;

        }, null, ClassLoader::class);
    }
}
