<?php

if(!defined('sugarEntry') || !sugarEntry) {
    die('Not a valid entry point');
}

require_once('include/MVC/Controller/SugarController.php');

class ContactsController extends SugarController
{
    public function action_HelloWorld() {
        echo 'Hello from custom controller in Contacts module';
        exit();
    }
                                  
    // function for module health check in Administration
    public function action_moduleHealthCheck()
    {
        $this->view = 'modulehealthcheck';
    }
}