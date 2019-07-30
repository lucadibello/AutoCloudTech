<?php
class Integration
{
    public function index()
    {
        //Show index page
        ViewLoader::load("_templates/header");
        ViewLoader::load("integration/index");
        ViewLoader::load("_templates/footer");
    }
}
