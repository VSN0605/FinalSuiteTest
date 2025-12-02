<?php

require_once('include/MVC/View/views/view.list.php');

class CustomVehicleViewList extends ViewList
{
    public function preDisplay()
    {
        parent::preDisplay(); 
    }

    public function display()
    {
        $vehicle_table_data = $this->getVehicleTableData();

        // To display custom SuiteCRM ListView
        // $this->ss->assign('VEHICLE_TABLE_DATA', $vehicle_table_data);

        // Display default SuiteCRM ListView first
        parent::display();

        // To display custom SuiteCRM ListView
        // echo $this->ss->fetch('custom/modules/Vehicle/tpls/vehicle_table.tpl');
    }

    private function getVehicleTableData()
    {
        $data = array();

        $db = DBManagerFactory::getInstance();

        $query = "SELECT name, model, color, deleted FROM vehicle";

        $result = $db->query($query);

        while ($row = $db->fetchByAssoc($result)) {
            $data[] = $row;
        }

        return $data;
    }
}
