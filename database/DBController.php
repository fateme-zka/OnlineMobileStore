<?php

class DBController
{
    // Database connection properties
    protected $host = "localhost";
    protected $user = "root";
    protected $password = "";
    protected $db_name = "mobile_shop";

    // connection property
    public $connection = null;

    // call constructor
    public function __construct()
    {
        $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
        if ($this->connection->connect_error) {
            echo 'Failed to connect: ' . $this->connection->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // for closing connection
    protected function closeConnection()
    {
        if ($this->connection != null) {
            $this->connection->close();
            $this->connection = null;
        }
    }

}

