<?php

// Use to fetch product data from Mysql database
class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->connection)) return null;
        $this->db = $db;
    }

    // fetch all item of table by this method
    public function getDataFromTable($table = "product")
    {
        $query = "SELECT * FROM {$table}";
        $result = $this->db->connection->query($query);

        $result_array = [];

        // fetch each item of table one by one
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $result_array[] = $row;
        }

        return $result_array;
    }

    // fetch all item of table by this method
    public function getADataById($id = null, $table = 'product')
    {
        if ($id != null) {
            $query = "SELECT * FROM {$table} WHERE item_id={$id}";
            $result = $this->db->connection->query($query);
            // return the product columns
            return mysqli_fetch_array($result, MYSQLI_ASSOC);
        }
    }
}