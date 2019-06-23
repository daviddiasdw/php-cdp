<?php

namespace app2\Database;

use PDO;

class DB
{
    private $host;
    private $name;
    private $username;
    private $password;
    private $connection;

    public function __construct()
    {

        $this->host = "database";
        $this->name = "homestead";
        $this->port = "3306";
        $this->username = "homestead";
        $this->password = "secret";

        $dns = "mysql:host=".$this->host.";port=". $this->port ." dbname=".$this->name;
        $this->connection =  new PDO($dns, $this->username, $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }


    /**
     * @return PDO
     */
    public function getConnection(): PDO
    {
        return $this->connection;
    }
}
