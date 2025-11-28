<?php

// $module_name = 'Vehicle';

$viewdefs['Vehicle']['EditView'] = array(
    'templateMeta' => array(
        'maxColumns' => 2,
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30'),
        ),
    ),
    'panels' => array(
        'default' => array(
            array('name'),
            array('model'),
            array('color'),
        ),
    ),
);
