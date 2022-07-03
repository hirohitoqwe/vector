<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb0fd8e3bf79a1ed030e10514e8d0fc96
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

        spl_autoload_register(array('ComposerAutoloaderInitb0fd8e3bf79a1ed030e10514e8d0fc96', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb0fd8e3bf79a1ed030e10514e8d0fc96', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb0fd8e3bf79a1ed030e10514e8d0fc96::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}