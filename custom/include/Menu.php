<?php

global $module_menu;

// Add Quick Tools option in Desktop Header Menu
$module_menu[] = array(
    "index.php?entryPoint=quickTools",
    'Quick Tools',
    'Home',   // Icon (use existing module icon)
    'Home'    // Module
);
