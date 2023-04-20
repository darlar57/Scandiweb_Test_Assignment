<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita0cfc84e715c104c7bc151c9a0828b85
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInita0cfc84e715c104c7bc151c9a0828b85', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita0cfc84e715c104c7bc151c9a0828b85', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita0cfc84e715c104c7bc151c9a0828b85::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
