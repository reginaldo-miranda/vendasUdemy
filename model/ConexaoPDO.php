<?php

define('HOST', 'localhost');
define('DBNAME', 'id8849593_sysbar');
define('CHARSET', 'utf8');
define('USER', 'id8849593_sysbar');
define('PASSWORD', 'saguides@123');

class ConexaoPDO {

    public static $instance;  

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO("mysql:host=" . HOST . "; dbname=" . DBNAME . "; charset=" . CHARSET . ";", USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_PERSISTENT => TRUE));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
            //self::$instance->exec("set name uft8");
        }
        return self::$instance;
    }

}

?>
