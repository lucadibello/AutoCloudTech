<?php

class ContactForm{

    function __construct(array $data)
    {
        $this->data = $data; 
    }

    public function sendMail(){
        throw new Exception('This method is WIP');
    }
}