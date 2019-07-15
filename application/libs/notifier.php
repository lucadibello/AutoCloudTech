<?php

class Notifier{

    function __construct()
    {   
        // Create session variable
        $_SESSION["notifier"] = array();
    }

    function add($text){
        // Add element at the end of the array
        array_push($_SESSION["notifier"], $text);
    }

    function remove(int $index){
        // Remove element and re-index values
        unset($_SESSION["notifier"][$index]);
        $_SESSION["notifier"] = array_values($_SESSION["notifier"]);
    }

    function clear(){
        // Secure clear
        unset($_SESSION["notifier"]);
        $_SESSION["notifier"] = array();
    }

    function getNotifications(): array{
        return $_SESSION["notifier"];
    }
}