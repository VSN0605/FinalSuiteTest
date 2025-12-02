<?php

$hook_version = 1;
$hook_array = array();

$hook_array['after_ui_frame'][] = array(
    1, // Sequence
    'After User Load Custom Logic', // Description
    'custom/LogicHooks/custom_user_logic.php', // File path
    'CustomUserLogic', // Class name
    'handleAfterUserLoad' // Function name
);

