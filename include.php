<?php
function __autoload($class_name)
{
    $folders = array(
        'controllers',
        'models',
        'helpers',
    );
    foreach ($folders as $folder) {
        if (file_exists($folder . DIRECTORY_SEPARATOR . $class_name . '.php')) {
            include $folder . DIRECTORY_SEPARATOR . $class_name . '.php';
        }
    }
}