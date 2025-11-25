<?php

if(!defined('sugarEntry') || !sugarEntry) {
    die('Not a valid Entry Point');
}

class actionFollowUPDate extends AOW_Action
{

    public function __construct($id = '')
    {
        return parent::__construct($id);
    }
 
    public function edit_display(){
        return '<div></div>';
    }

    public function run_action(SugarBean $bean, $params = [])
    {
        global $db;                            
        // Calculate follow-up date (today + 3 days)
        $futuredate = date('Y-m-d', strtotime('+3 days'));

        $GLOBALS['log']->fatal("Custom Workflow Action Triggered For {$bean->module_dir}, ID: {$bean->id}");

        // Prevent workflow loops
        if (!empty($bean->followup_date)) {
            $GLOBALS['log']->fatal("Follow-up date already set, skipping.");
            return true;
        }

        $table_cstm = $bean->table_name . "_cstm"; // leads_cstm

        $id = $db->quote($bean->id);
        $futuredate_db = $db->quote($futuredate);

        // Update custom field
        $sql_cstm = "
            UPDATE {$table_cstm}
            SET followup_date_c = '{$futuredate_db}'
            WHERE id_c = '{$id}'
        ";
        $db->query($sql_cstm);

        $GLOBALS['log']->fatal("Follow-up date updated successfully: $futuredate");

        return true;
    }
 
    public function displayParameters(){
        return '<div></div>';
    }
 
    public function loadJS() {
        
    }
   
}


?>

