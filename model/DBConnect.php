<?php

namespace Model;

use PDO;

class DBConnect
{
    public $dsn;
    public $user;
    public $password;

    public function __construct($dsn, $user, $password)
    {
        $this->dsn = $dsn;
        $this->password = $password;
        $this->user = $user;
    }

    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->user, $this->password);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
            die();
        }
    }
}