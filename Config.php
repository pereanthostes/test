<?php
/**
 * Created by PhpStorm.
 * User: eugene
 * Date: 15.11.18
 * Time: 15:39
 */

abstract class Components_Config
{
    private static $cfg = [
        'mysql' => [
            'host' => 'test-mariadb',
            'base' => 'users',
            'charset' => 'utf8',
            'user' => 'root',
            'pass' => 'password'
        ],
        'routes' => [
            'user' => [
                'user/add' => 'user/index',//actionIndex in EditController
                'user/create' => 'user/create',//actionIndex in CreateController
                'user/delete' => 'user/delete'//actionIndex in DeleteController
            ]
        ]
    ];

    public static function get($key)
    {
        // @todo dopisati return
        return self::$cfg[$key];
    }

}