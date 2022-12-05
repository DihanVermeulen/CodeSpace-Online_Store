<?php

class UserDAO
{
    // ====================Read====================
    // ====================Create====================

    public static function postUserToDb($DbConfig, $user)
    {
        $db_connection = $DbConfig->connect();

        $statement = "INSERT INTO users VALUES(null, ?, ?, ?, ?)";

        // Check connection
        if ($db_connection->connect_error) {
            die("Connection failed: " . $db_connection->connect_error);
        }

        $stmt = $db_connection->prepare($statement);
        $stmt->bind_param('ssss', $user['user_name'], $user['user_surname'], $user['user_email'], $user['user_password']);

        $stmt->execute();
    }
}
