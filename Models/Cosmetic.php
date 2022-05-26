<?php 

class Cosmetic extends Product {
    protected $brand;

    protected $typeID = 2;
    
    //bonus: prodotto disponibile da maggio a agosto   
    //NON FUNZIONA QUI NON SO PERCHè
    //protected $timeAvailability = (intval(date("m")) >= 5 && intval(date("m")) <= 8) ? true : false;
    protected $timeAvailability;


    function __construct(String $name, Float $price, Int $availability, String $brand)
    {
        Product::__construct($name, $price, $availability);

        //QUI INVECE FUNZIONA
        $this->timeAvailability = (intval(date("m")) >= 5 && intval(date("m")) <= 8) ? true : false;

        $this->availability = ($this->timeAvailability) ? $availability : 0;

        $this->brand = $brand;
    }

    public function setBrand(String $newBrand) {
        $this->brand = $newBrand;    
    }
    public function getBrand() {
        return $this->brand;    
    }

    public function getTypeID() {
        return $this->typeID;    
    }

    public function getTimeAvailability() {
        return $this->timeAvailability;    
    }
}