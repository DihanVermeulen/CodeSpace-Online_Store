<?php 

class Product {
    private $id;
    private $title;
    private $price;
    private $image_location;

    public function __construct($id, $title, $price, $image_location) {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->image_location = $image_location;
    }
}