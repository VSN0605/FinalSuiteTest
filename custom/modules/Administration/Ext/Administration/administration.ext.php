<?php 
 //WARNING: The contents of this file are auto-generated


$admin_option_defs = array();
$admin_option_defs['Administration']['your_custom_link_identifier'] = array(
    'LBL_MODULE_HEALTH_CHECK_LABEL', 
    'LBL_MODULE_HEALTH_CHECK_TITLE', 
    'LBL_MODULE_HEALTH_CHECK_DESC', 
    './index.php?module=Contacts&action=moduleHealthCheck' 
);


$admin_group_header[] = array(
    'LBL_MODULE_HEALTH_CHECK_TITLE', // Panel Title
    '',                            // Icon (optional)
    false,                         // Not an external link
    $admin_option_defs,            // Array of options/links
    'LBL_MODULE_HEALTH_CHECK_DESC'   // Panel Description
);

?>