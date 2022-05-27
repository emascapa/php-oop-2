<?php 

trait BasicInfo {
    protected $name;
    protected $price;
    protected static $availability;

    public function setName(String $newName) {
        $this->name = $newName;    
    }
    public function getName() {
        return $this->name;    
    }
    
    public function setPrice(String $newPrice) {
        $this->price = $newPrice;    
    }
    public function getPrice() {
        return $this->price;    
    }

    public function setAvailability(String $newAvailability) {
        $this->availability = $newAvailability;    
    }
    public function getAvailability() {
        return $this->availability;    
    }

    public function addOneItemToBasket() {
        if ($this->getAvailability() != 0) {

            $this->setAvailability($this->getAvailability() - 1);

        } else {
            throw new Exception ('Non ci sono più prodotti di questo tipo, non puoi aggiungere il prodotto al carrello');
        }
    }

}

class Product {
/*     protected $name;
    protected $price;
    protected $availability; */

    use BasicInfo;

    protected $image = 'https://picsum.photos/seed/picsum/300/300';

    
    function __construct(String $name, Float $price, Int $availability)
    {
        $this->name = $name;
        $this->price = $price;
        $this->availability = $availability;
    }
    
/*     public function setName(String $newName) {
        $this->name = $newName;    
    }
    public function getName() {
        return $this->name;    
    }
    
    public function setPrice(String $newPrice) {
        $this->price = $newPrice;    
    }
    public function getPrice() {
        return $this->price;    
    }

    public function setAvailability(String $newAvailability) {
        $this->availability = $newAvailability;    
    }
    public function getAvailability() {
        return $this->availability;    
    } */

    public function getImage() {
        return $this->image;    
    }

}