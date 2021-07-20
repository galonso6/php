<?php

class User {
    public $id;
    public $name;
    public $lastname;
    public $email;
    public $password;

    public function __construct()
    {
        
    }
    public function setName(string $name){
        $this->name = $name;
    }
    
    public function setLastname(String $lastname){
        $this->lastname = $lastname;
    }
    public function getFullName(){
        return $this->name. ' '. $this->lastname;
    }
    public function _destruct(){
        echo 'Se termino el objeto User';
    }
}
?>