<?php

class CustomUserLogic {
    function handleAfterUserLoad( $event, $arguments) {
        $GLOBALS['log']->fatal("User loaded successfully");

        if (empty($_SESSION['custom_user_status'])) {
            $_SESSION['custom_user_status'] = 'loaded';
        }
    }
}