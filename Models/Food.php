<?php 

class Food extends Product {

    protected $expiringDate;

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
}