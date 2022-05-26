<?php 

class User {
    protected $fullName;

    protected $mail;

    protected $isSignUp;

    protected $discount = 0;

    function __construct(String $fullName, String $mail, Bool $isSignUp)
    {
        $this->fullName = $fullName;
        $this->mail = $mail;
        $this->isSignUp = $isSignUp;
    }

    public function getFullName() {
        return $this->fullName;
    }
    public function setFullName($newName) {
        $this->fullName = $newName;
    }

    public function getMail() {
        return $this->mail;
    }
    public function setMail($newMail) {
        $this->mail = $newMail;
    }

    public function getIsSignUp() {
        return $this->isSignUp;
    }
    public function setIsSignUp($newBool) {
        $this->isSignUp = $newBool;
    }


    public function setDiscount() {
        if ($this->isSignUp) {
            $this->discount = 20;
        } 
    }
}