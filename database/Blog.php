<?php

class Blog
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->connection)) return null;
        $this->db = $db;
    }

    // fetch all blog of table by this method
    public function getABlogById($id = null, $table = 'blog')
    {
        if ($id != null) {
            $query = "SELECT * FROM {$table} WHERE id={$id}";
            $result = $this->db->connection->query($query);
            // return the product columns
            return mysqli_fetch_array($result, MYSQLI_ASSOC);
        }
    }

}