<?php

if (ACLController::checkAccess('Vehicle', 'list', true)) {
    $module_menu[] = array(
        "index.php?module=Vehicle&action=vehicle",
        "Vehicles",
        "Vehicle",
        "Vehicle"
    );
}