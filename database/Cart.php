<?php

// php cart class
class Cart
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->connection)) return null;
        $this->db = $db;
    }

    // fetch all user carts
    public function getDataFromCartByUserId($userId)
    {
        $query = "SELECT * FROM cart WHERE user_id={$userId}";
        $result = $this->db->connection->query($query);

        $result_array = [];

        // fetch each item of table one by one
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $result_array[] = $row;
        }

        return $result_array;
    }

    // insert new record in to table
    public function insertToCart($params = null, $table = 'cart')
    {
        if ($this->db->connection != null && $params != null) {
            // get the array of table columns
            $columns = implode(",", array_keys($params));
            // get the array of values of each columns in table
            $values = implode(",", array_values($params));

            // create sql query
            $query = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
            // execute query
            $result = $this->db->connection->query($query);
            return $result;
        }

    }

    // get user-id and item-id and enter them to InsertToCart method
    public function addToCart($userId, $itemId)
    {
        if (isset($userId) && isset($itemId)) {
            $params = array(
                "user_id" => $userId,
                "item_id" => $itemId
            );

            // call insetToCart to actually insert data to cart
            $res = $this->insertToCart($params, 'cart');
            if ($res) {
                // reload the current page after adding item to cart
                header("Location:" . $_SERVER['PHP_SELF']);
            }
        }
    }

    public function getSum($arr)
    {
        $sum = 0;
        foreach ($arr as $item) {
            $sum += floatval($item);
        }
        return sprintf('%.2f', $sum);
    }

    public function deleteCartItemById($id = null)
    {
        if ($this->db->connection != null && $id != null) {
            $query = "DELETE FROM `cart` WHERE `cart`.`cart_id` = {$id}";

            // execute query and delete
            $res = $this->db->connection->query($query);
            if ($res) {
                // reload the current page after deleting item from cart table
                header("Location:" . $_SERVER['PHP_SELF']);
            }
        }
    }

    public function getUserCartItemIds($cart_array = null)
    {
        if ($cart_array != null) {
            $item_ids = array_map(function ($value) {
                return $value['item_id'];
            }, $cart_array);
            return $item_ids;
        }
    }

}