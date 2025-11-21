<?php

if(!defined('sugarEntry') || !sugarEntry) {
    die('Not a valid entry point');
}

// creates log file to log entries
function create_custom_log($msg) {
    $logFile = 'custom/logs/custom_rest_test.log';

    if(!file_exists('custom/logs')) {
        mkdir('custom/logs', 077, true);
    }

    file_put_contents($logFile, date("Y-m-d H:i:s") . " - " . $msg . "\n", FILE_APPEND);
}

create_custom_log("---- Script execution started ----");

$url = $GLOBALS['sugar_config']['site_url'] . '/service/v4/rest.php';


$login_parameters = array(
    "user_auth" => array(
        "user_name" => "admin123",
        "password" => md5("admin123"),
    )
);

// print_r($login_parameters);

$result = call_rest("login", $login_parameters, $url);

$session_id = $result->id ?? '';

if(empty($session_id)) {
    create_custom_log("Login failed, please try again");
    die("Login failed, try again");
}

create_custom_log("Login successfull, Session ID : " . $session_id);

// parameters for printing accounts
$get_params = array(
    'session' => $session_id,
    'module_name' => 'Accounts',
    'query' => '',
    'order_by' => 'name ASC',
    'offset' => 0,
    'select_fields' => array('id', 'name'),
    'max_results' => 10,
);

$accounts = call_rest('get_entry_list', $get_params, $url);

// printing accounts each account name
foreach ($accounts->entry_list as $acc) {
    $name = $acc->name_value_list->name->value;
    create_custom_log("Account: " . $name);
}

create_custom_log("---- Script Execution Completed ----");
echo "Below is the first 10 Accounts name and also you can check log file.<br><br>";
foreach ($accounts->entry_list as $acc) {
    $name = $acc->name_value_list->name->value;
    echo"<h3>" . $name . "</h3>";
}

function call_rest($method, $parameters, $url)
{
    $json = json_encode($parameters);
    $postArgs = "method=$method&input_type=JSON&response_type=JSON&rest_data={$json}";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $postArgs);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);
    curl_close($curl);

    return json_decode($response);
}