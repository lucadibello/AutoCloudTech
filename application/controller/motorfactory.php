<?php
class MotorFactory
{
    public function index()
    {
        //Show index page
        ViewLoader::load("_templates/header");
        ViewLoader::load("motorfactory/index");
        ViewLoader::load("_templates/footer");
    }
}
