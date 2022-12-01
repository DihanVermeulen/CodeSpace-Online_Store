<?php 

class Product {

    // ===================Variables========================
    private $id;
    private $title;
    private $price;
    private $image_location;

    // ========================Construct====================
    public function __construct($id, $title, $price, $image_location) {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->image_location = $image_location;
    }

    // ==================Get and Set==========================
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of image_location
     */ 
    public function getImage_location()
    {
        return $this->image_location;
    }

    /**
     * Set the value of image_location
     *
     * @return  self
     */ 
    public function setImage_location($image_location)
    {
        $this->image_location = $image_location;

        return $this;
    }
}