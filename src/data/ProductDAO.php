<?php

class ProductDAO
{
    // ====================Read====================

    /**
     * Reads product by ID
     * @param DbConfig requires database config
     */
    public function readByID($DbConfig, $id)
    {
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

    /**
     * Reads all products
     * @param DbConfig requires database config
     */
    public function readAll($DbConfig)
    {
        $db_connection = $DbConfig->connect();

        $statement = "SELECT * FROM products";

        if ($result = $db_connection->query($statement)) {
            $db_connection->close();
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }

            return $products;
        } else {
            die("Connection failed: " . $db_connection->error); //die function to close connection in case of error
        }
    }
}
