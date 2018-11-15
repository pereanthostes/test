<?php

function __autoload($class_name)
{
    $class_name = str_replace('_', '/', $class_name) . '.php';

    if (is_file($class_name)) {
        require_once($class_name);
        return;
    }

}