<?php

class UserDAO
{
    // ====================Read====================

    public static function getUserFromDbByEmail($DbConfig, $email) {
        $db_connection = $DbConfig->connect();

        $statement = "SELECT * FROM users WHERE user_email = '$email'";

        // Check connection
        if ($db_connection->connect_error) {
            die("Connection failed: " . $db_connection->connect_error);
        }
        try {

            $result = $db_connection->query($statement);
            
            while($row = $result->fetch_assoc()) {
                $response[] = $row;
            }
            var_dump($response);
            $db_connection->close();
            return $response;
        } catch(Error $err) {
            echo $err;
        }
    }

    // ====================Create====================

    public static function postUserToDb($DbConfig, $user)
    {
        $db_connection = $DbConfig->connect();

        $statement = "INSERT INTO users VALUES(null, ?, ?, ?, ?)";

        // Check connection
        if ($db_connection->connect_error) {
            die("Connection failed: " . $db_connection->connect_error);
        }
        try {

            $stmt = $db_connection->prepare($statement);
            $stmt->bind_param('ssss', $user['user_name'], $user['user_surname'], $user['user_email'], $user['user_password']);
            
            $stmt->execute();
        } catch(Error $err) {
            echo "Unknown error occured where registering user, please check your details and try again.";
        }
    }
}
