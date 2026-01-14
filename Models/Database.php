<?php

namespace Models;
class Database
{

    protected static $_dbInstance = null;

    protected $_dbHandle;


    public static function getInstance()
    {

        if (self::$_dbInstance == null) { //checks if the PDO exists
            //creates new instance if not, sending in connection info
            self::$_dbInstance = new self();
        }
        return self::$_dbInstance;
    }

    private function __construct()
    {
        try {
            $this->_dbHandle = new \PDO("pgsql:host=localhost;port=5432;dbname=hackcamp",
                "postgres",
                "123"
            );
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getdbConnection()
    {
        return $this->_dbHandle;
    }

    public function __destruct()
    {
        $this->_dbHandle = null; //destroys the PDO handle when no longer needed
    }

}