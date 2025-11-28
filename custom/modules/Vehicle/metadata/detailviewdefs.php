<?php

$module_name = 'Vehicle';
// $GLOBALS['log']->fatal("from detailviewdefs file " . $module_name);

$viewdefs[$module_name]['DetailView'] = array(
    'templateMeta' => array(
        'maxColumns' => 2,
    ),
    'panels' => array(
        'default' => array(
            array('name'),
            array('model'),
        ),
    ),
);

// print_r($viewdefs);