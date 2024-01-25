<?php 

class MySqlDatabaseConnection implements DatabaseConnectionInterface
{

    private string $dsn;
    private string $username;
    private string $password;

    private static ?MySqlDatabaseConnection $instance = null;
    // string $dsn,string $username,string $password
    private function __construct()
    {

    }

    public static function getInstance()
    {
        self::$instance =  self::$instance == null ? new MySqlDatabaseConnection() : self::$instance; 

        return self::$instance;
    }

    public function setConfig(string $dsn,string $username,string $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
    }
}