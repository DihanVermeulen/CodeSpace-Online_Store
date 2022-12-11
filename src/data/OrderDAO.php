<?php

class OrderDAO {
    //====================Post====================

    public static function postOrderToDb($DbConfig, $order)
    {
        $db_connection = $DbConfig->connect();

        $statement = "INSERT INTO orders VALUES(null, ?, ?, ?, ?)";

        $product_id = $order->getProduct_ID();
        $user_id = $order->getUser_id();
        $quantity = $order->getQuantity();
        $created_at = $order->getCreated_at();

        // Check connection
        if ($db_connection->connect_error) {
            die("Connection failed: " . $db_connection->connect_error);
        }
        try {

            $stmt = $db_connection->prepare($statement);
            $stmt->bind_param('ssss', $product_id, $user_id, $quantity, $created_at);
            
            $stmt->execute();
        } catch(Error $err) {
            echo "Unknown error occured when trying to place order.";
        }
    }
}