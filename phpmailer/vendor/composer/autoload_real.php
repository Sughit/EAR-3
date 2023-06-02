<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite9f18db96fbefb8a53491ddf8d51d77e
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInite9f18db96fbefb8a53491ddf8d51d77e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite9f18db96fbefb8a53491ddf8d51d77e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite9f18db96fbefb8a53491ddf8d51d77e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
