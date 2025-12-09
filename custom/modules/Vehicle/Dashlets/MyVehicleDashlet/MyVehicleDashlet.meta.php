<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}


global $app_strings;

$dashletMeta['MyVehicleDashlet'] = 
array(  
    'module' => 'Vehicle',
    'title'       => 'Vehicle Dashlet',
    'description' => 'A customizable view into Vehicle',
    'icon'        => 'themes/default/images/icon_Vehicle_32.png',
    'category'    => 'Module Views',
);
