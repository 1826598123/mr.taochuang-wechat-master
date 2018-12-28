<?php

/**
 * 自动映射命名空间
 * 类自动加载
 */
spl_autoload_register(function ($class) {
    $separator = DIRECTORY_SEPARATOR;
    $class = __DIR__ . $separator . str_replace('\\', $separator, $class) . '.php';
    if (file_exists($class)) {
        include $class;
    }
});
