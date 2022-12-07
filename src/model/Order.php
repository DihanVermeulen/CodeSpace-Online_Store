<?php 

class Order {

    // ====================Variables====================
    
    private $product_id;
    private $user_id;
    private $quantity;
    private $created_at;
 
    // ====================Constructor====================

    public function __construct($product_id, $user_id, $quantity, $created_at)
    {
        $this->product_id = $product_id;
        $this->user_id = $user_id;
        $this->quantity = $quantity;
        $this->created_at = $created_at;
    }

}