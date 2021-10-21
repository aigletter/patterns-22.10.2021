<?php


namespace patterns\Singleton;

use \PDO;

class Db
{
    protected static $instance;

    protected $connection;

    protected function __construct()
    {
        $this->connection = new PDO('mysql:dbname=examples;host=127.0.0.1', 'root', '1q2w3e');
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return static::$instance;
    }

    public function query()
    {
        return '';
    }
}