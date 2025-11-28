<?php

class VehicleACL extends SugarACLStrategy
{
    public function checkAccess($module, $action, $context)
    {
        return true; // allow everything
    }
}