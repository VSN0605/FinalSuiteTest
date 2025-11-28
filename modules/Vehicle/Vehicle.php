<?php

require_once('data/SugarBean.php');
class Vehicle extends SugarBean
{
    public $new_schema = true;
    public $module_dir = 'Vehicle';
    public $object_name = 'Vehicle';
    public $table_name = 'vehicle';
}