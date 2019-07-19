<?php

class ContactForm{

    function __construct(array $data)
    {
        $this->data = $data; 
    }

    public function sendMail(){
        // carico le liberie di composer
        require 'vendor/autoload.php';
        
        throw new Exception('This method is WIP');
    }
}