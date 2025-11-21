<?php 
 //WARNING: The contents of this file are auto-generated



$job_strings[] = 'dailyAccountSummary';

function dailyAccountSummary() {

    $GLOBALS['log']->fatal("Daily account summary scheduler run at " . date("Y-m-d H:is"));

    $GLOBALS['log']->fatal("Daily account summary scheduler end");

    return true;
}



$job_strings[] = 'leadsCreatedToday';

function leadsCreatedToday() {
    global $db;

    $GLOBALS['log']->fatal("========= Leads Created Today  ==========");

    $query = "select count(*) as total from leads where deleted=0 and date_entered like '%".date('Y-m-d')."%'";
    $result = $db->query($query);
    $row = $db->fetchByAssoc($result);
    $count = (int)$row['total'];

    if($count > 5) {
        $GLOBALS['log']->fatal("Total Leads created by today is greater than 5 : ". $count );
    } else {
        $GLOBALS['log']->fatal("Total Leads created by today is less than 5 : ". $count );
    }

    $GLOBALS['log']->fatal("========= Leads Created Today ==========");

    return true;
}
?>