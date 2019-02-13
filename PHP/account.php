<?php
class Account {
    public $id;
    $name;
    public $document;
    public $email;
    public $password;

    public function _construct($name, $document){
        $this->name = $name;
        $this->document = $document;
    }
} ?>