<?php

$manifest = array(
    'acceptable_sugar_versions' => array(),
    'acceptable_sugar_flavors' => array('CE'),
    'readme' => '',
    'key' => 'VCL',
    'author' => 'Your Name',
    'description' => 'Vehicle Module',
    'is_uninstallable' => true,
    'name' => 'Vehicle Module',
    'version' => '1.0',
);


$installdefs = array(
    'id' => 'VehicleModule',
    'beans' => array(
        array(
            'module' => 'Vehicle',
            'class' => 'Vehicle',
            'path' => 'modules/Vehicle/Vehicle.php',
            'tab' => true,
        ),
    ),
    'copy' => array(
        array(
            'from' => '<basepath>/modules/Vehicle',
            'to' => 'modules/Vehicle',
        ),
        array(
            'from' => '<basepath>/custom/Extension',
            'to'   => 'custom/Extension',
        ),
    ),
);