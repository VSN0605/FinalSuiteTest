<?php

$dictionary['Vehicle'] = array(
    'table' => 'vehicle',
    'audited' => true,
    'duplicate_merge' => true,
    'acl' => true,
    'acl_class' => 'VehicleACL',
    'fields' => array(
        'name' => array(
            'name' => 'name',
            'vname' => 'LBL_NAME',
            'type' => 'varchar',
            'len' => 255,
            'required' => true,
        ),
        'model' => array(
            'name' => 'model',
            'vname' => 'LBL_MODEL',
            'type' => 'varchar',
            'len' => 100,
            'required' => true,
        ),
        'color' => array(
            'name' => 'color',
            'vname' => 'LBL_COLOR',
            'type' => 'varchar',
            'len' => 20,
        ),
    ),
    // 'relationships' => array(),
);

// $GLOBALS['log']->fatal("from vehicle_vardefs file ", print_r($dictionary));