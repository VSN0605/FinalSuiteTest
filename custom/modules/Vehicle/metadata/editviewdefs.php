<?php

$module_name = 'Vehicle';
// $GLOBALS['log']->fatal("from editviewdefs file " . $module_name);

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
