<?php

$module_name = 'Vehicle';

$menu[] = array(
    'route' => "#$module_name",
    'label' => 'LNK_VEHICLE_LIST',
    'acl_action' => 'list',
    'acl_module' => $module_name,
    'icon' => 'fa-car',
);
