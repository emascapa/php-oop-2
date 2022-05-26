<?php 

class Game extends Product {
    protected $maxAge;

    protected $typeID = 1;

    function __construct(String $name, Float $price, Int $availability, String $maxAge)
    {
        Product::__construct($name, $price, $availability);
        $this->maxAge = $maxAge;
    }

    public function setMaxAge(String $newMaxAge) {
        $this->maxAge = $newMaxAge;    
    }
    public function getMaxAge() {
        return $this->maxAge;    
    }

    public function getTypeID() {
        return $this->typeID;    
    }
}