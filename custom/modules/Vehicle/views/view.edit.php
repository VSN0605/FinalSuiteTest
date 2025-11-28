<?php

require_once('include/MVC/View/views/view.edit.php');

class CustomVehicleViewEdit extends ViewEdit
{
    public function display()
    {
        $vehicle_table_data = $this->getVehicleTableData($this->bean->id);

        parent::display();

        echo $this->ss->fetch('custom/modules/Vehicle/tpls/vehicle_table.tpl');
    }

    public function getVehicleTableData()
    {
        // $data = array();

        $db = DBManagerFactory::getInstance();
        $query = "SELECT name, model, color FROM vehicle";
        $result = $db->query($query);
        while ($row = $db->fetchByAssoc($result)) {
            $data[] = $row;
        }

        return $data;
    }
}