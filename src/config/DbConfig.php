<?php
class DbConfig
{
    private $config = array(
        "host" => "localhost",
        "user" => "root",
        "password" => "",
        "db" => "online_store_db"
    );

    public function connect()
    {
        $mysqli = new mysqli(
            $this->config['host'],
            $this->config['user'],
            $this->config['password'],
            $this->config['db']
        );

        // Check connection
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        } else {
            return $mysqli;
        }
    }
}
