<?php

// $module_name = 'Vehicle';

$viewdefs['Vehicle']['EditView'] = array(
    'templateMeta' => array(
        'maxColumns' => 2,
        'widths' => array(
            0 => array('label' => '10', 'field' => '30'),
            1 => array('label' => '10', 'field' => '30'),
        ),
    ),
    'panels' => array(
        'LBL_VEHICLE_INFORMATION' => array(
            array(
                array(
                    'name' => 'name',
                    'label' => 'Vehicle Name',             
                ),
                array(
                    'name' => 'model',
                    'label' => 'Vehicle Model',
                ),
            ),
            array(
                array(
                    'name' => 'color',
                    'label' => 'Vehicle Color',
                ),
                array(
                    'name' => 'engine_number',
                    'label' => 'Engine Number',
                ),
            ),
        ),
    ),
);
