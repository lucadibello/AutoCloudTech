<?php
class MotorFactory
{

    private $errors = array();

    public function index()
    {
        //Show index page
        ViewLoader::load("_templates/header");
        ViewLoader::load("motorfactory/index");
        ViewLoader::load("_templates/contact-form");
        ViewLoader::load("_templates/footer");
    }

    public function contact(){
        if($_SERVER["REQUEST_METHOD"] == "POST" && self::validate($_POST)){
            // Loads model
            require_once("./application/models/contactForm.php");
            new ContactForm($_POST);
        }
        else{
            $GLOBALS["NOTIFIER"].add($this->errors);
        }

        Header("Location:  MotorFactory");
    }

    private function validate(): bool{
        $errors = array();

        // Clear data
        foreach ($this->data as $key => $value) {
            $this->data[$key] = self::test_input($value);
        }

        // Name
        if (!(strlen($this->data['name']) < 255 && ctype_alnum(str_replace(' ', '',$this->data['name'])))) {
            array_push($this->errors, "The name have to be less than 255 characters long and it must be an alphanumeric string");
        }

        // Email
        if (!(strlen($this->data['email']) < 255 && filter_var($this->data['email'], FILTER_VALIDATE_EMAIL))){
            array_push($this->errors,"The email have to be less than 255 characters long and it must be a valid email address");
        }

        // Message
        if (!(strlen($this->data['message']) < 500 && ctype_print($this->data['message']))) {
            array_push($this->errors,"The message have to be less than 255 characters long and it must containt only printable characters.");
        }
        
        return count($errors) == 0;
    }

    private function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
