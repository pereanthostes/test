<?php
class Components_Db
{
    public static function getConnection()
    {
        $config = Components_Config::get('mysql');
        $dsn = "mysql:host={$config['host']};dbname={$config['base']};charset={$config['charset']}";
        return $db = new PDO($dsn, $config['user'], $config['pass']);
    }
}