<?php 

class Food extends Product {

    protected $expiringDate;

    protected $typeID = 0;

    function __construct(String $name, Float $price, Int $availability, String $expiringDate)
    {
        Product::__construct($name, $price, $availability);
        $this->expiringDate = $expiringDate;
    }

    public function setExpiringDate(String $newExpiringDate) {
        $this->expiringDate = $newExpiringDate;    
    }
    public function getExpiringDate() {
        return $this->expiringDate;    
    }

    public function getTypeID() {
        return $this->typeID;    
    }
}