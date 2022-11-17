<?php class Database
{
    private static $dbName = 'we_love_food';
    private static $dbHost = '127.0.0.1:3306';
    private static $dbUsername = 'xaraton';
    private static $dbUserPassword = 'micio1917!!';
    private static $cont = null;
    public function __construct()
    {
        die('Init function is not allowed');
    }
    public static function connect()
    {
        if (null == self::$cont) {
            try {
                self::$cont = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName, self::$dbUsername, self::$dbUserPassword);
                
            } catch (PDOException $e) {
                echo('Connesso a we_love_food');
                die($e->getMessage());
            }
        }
        return self::$cont;
    }
    public static function disconnect()
    {
        self::$cont = null;
    }
}
?>