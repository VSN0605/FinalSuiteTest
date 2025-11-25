<?php

$job_strings[] = 'dailyAccountSummary';

function dailyAccountSummary() {

    $GLOBALS['log']->fatal("Daily account summary scheduler run at " . date("Y-m-d H:is"));

    $GLOBALS['log']->fatal("Daily account summary scheduler end");

    return true;
}
      