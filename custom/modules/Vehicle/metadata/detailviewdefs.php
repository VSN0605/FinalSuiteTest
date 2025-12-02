<?php

$module_name = 'Vehicle';

$viewdefs[$module_name] = 
array(
    'DetailView' =>
        array(
            'templateMeta' => array(
            'maxColumns' => 2,
            'widths' =>
            array(
                0 =>
                array(
                'label' => '10',
                'field' => '30',
                ),
                1 =>
                array(
                'label' => '10',
                'field' => '30',
                ),
                2 =>
                array(
                'label' => '10',
                'field' => '30',
                ),
            ),
        ),
        'panels' => array(
            'default' => 
            array(
                0 => 
                array(
                    0 =>
                    array(
                        'name' => 'name',
                        'comment' => 'Name of the Vehicle',
                        'label' => 'LBL_NAME',
                    ),
                    1 =>
                    array(
                        'name' => 'model',
                        'comment' => 'Model name of the Vehicle',
                        'label' => 'LBL_MODEL',
                    ),
                ),
                1 => 
                array(
                    0 =>
                    array(
                        'name' => 'color',
                        'comment' => 'Color of the Vehicle',
                        'label' => 'LBL_COLOR',
                    ),
                    
                ),
            ),
        ),
    ),
);