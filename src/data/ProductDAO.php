<?php

class ProductDAO {
    // ====================Read====================

    /**
     * Reads product by ID
     * @param DbConfig requires database config
     */
    public function readByID($DbConfig, $id) {
        $db_connection = $DbConfig->connect();

        $statement = "SELECT * FROM products WHERE id = '$id'";

        if ($result = $db_connection->query($statement)) {

            $db_connection->close();
            $products = $result->fetch_object();

            return $products;

        } else {
            die("Connection failed: " . $db_connection->error); //die function to close connection in case of error
        }
        
    }
}