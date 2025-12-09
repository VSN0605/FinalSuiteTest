<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}


require_once('include/Dashlets/Dashlet.php');


#[\AllowDynamicProperties]
class MyVehicleDashlet extends Dashlet
{
    public $title = 'Vehicle Dashlet';
    public $description = 'Shows sample data from Vehicle module';

    public function __construct($id, $def = null)
    {
        parent::__construct($id, $def);

        if (!empty($def['title'])) {
            $this->title = $def['title'];
        }
    }


    public function display()
    {
        global $db;

        // Fetch sample data
        $query = "SELECT name, model, color FROM vehicle WHERE deleted = 0 LIMIT 5";
        $result = $db->query($query);

        $html = "
            
            <table class='list view table' >
                <tr>
                    <th style='color: black'>Name</th>
                    <th style='color: black'>Model</th>
                    <th style='color: black'>Color</th>
                </tr>
        ";

        while ($row = $db->fetchByAssoc($result)) {
            $html .= "
                <tr style='border: 1px solid black'>
                    <td style='border: 1px solid #eeedf0'>{$row['name']}</td>
                    <td style='border: 1px solid #eeedf0'>{$row['model']}</td>
                    <td style='border: 1px solid #eeedf0'>{$row['color']}</td>
                </tr>
            ";
        }

        $html .= "</table>";

        return parent::display() . $html;
    }

}
