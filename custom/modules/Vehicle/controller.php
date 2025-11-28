<?php

require_once('include/MVC/Controller/SugarController.php');

class VehicleController extends SugarController
{
    public function action_index()
    {
        $this->view = 'list'; 
        
    }

    public function action_vehicle()
    {
        $this->view = 'list';
    }

}

