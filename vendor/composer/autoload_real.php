<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit2579646b03ef1d1a469c0ad15c8f82cd
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

        spl_autoload_register(array('ComposerAutoloaderInit2579646b03ef1d1a469c0ad15c8f82cd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit2579646b03ef1d1a469c0ad15c8f82cd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit2579646b03ef1d1a469c0ad15c8f82cd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
