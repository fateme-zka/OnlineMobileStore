<?php

class User
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->connection)) return null;
        $this->db = $db;
    }

    // check if user exist or not by email
    public function getUserByEmail($email)
    {
        $query = "SELECT * FROM users WHERE email='$email'";
        $result = $this->db->connection->query($query);
        return mysqli_fetch_array($result, MYSQLI_ASSOC);
    }


    // insert new user to user table
    public function insertNewUser($username, $email, $pass)
    {
        $query = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$pass')";
        return mysqli_query($this->db->connection, $query);
    }

    // get user by email and password
    public function getUserByEmailAndPass($email, $pass)
    {
        $query = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
        $result = $this->db->connection->query($query);
        return mysqli_fetch_array($result, MYSQLI_ASSOC);
    }

    // get user by user_id
    public function getUserById($id)
    {
        $query = "SELECT * FROM users WHERE user_id = '$id'";
        $result = $this->db->connection->query($query);
        return mysqli_fetch_array($result, MYSQLI_ASSOC);
    }

    // get all users from users table
    public function getAllUsers()
    {
        $query = "SELECT * FROM users";
    }

}