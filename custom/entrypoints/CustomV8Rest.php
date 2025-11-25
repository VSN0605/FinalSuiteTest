<?php 

if(!defined('sugarEntry') || !sugarEntry) {
    die('Not a valid entry point');
}

function create_custom_log($msg) {
    $logFile = 'custom/logs/custom_v8_api.log';

    if(!file_exists('custom/logs')) {
        mkdir('custom/logs', 0777, true);
    }

    file_put_contents($logFile, date("Y-m-d") . "-" . $msg . "\n", FILE_APPEND);
}

create_custom_log("------ V8 API Script Executed ------");

$token_url = $GLOBALS['sugar_config']['site_url'] . '/Api/access_token';

$auth_data = array(
    "grant_type" => "client_credentials",
    "client_id" => "5eae0610-1410-a90b-e574-691eee906cc1",
    "client_secret" => "suitecrmclient",
    "username" => "admin123",
    "password" => "admin123",
);

$ch = curl_init($token_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($auth_data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

$token_data = json_decode($response, true);

if(empty($token_data['access_token'])) {
    create_custom_log("Token error: " . $response);
    die("Authentication failed");
}

$access_token = $token_data["access_token"];

create_custom_log("Access token received");

// fetching first 10 leads
$api_url = $GLOBALS['sugar_config']['site_url'] . "/Api/V8/module/Leads?sort=date_entered&fields[Leads]=name&page[size]=10";

$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer " . $access_token,
    "Content-Type: application/json"
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

if(!empty($data["data"])) {
    foreach($data["data"] as $lead) {
        $name = $lead["attributes"]["name"] ?? "Unknown Lead";
        create_custom_log("Lead: " . $name);
    }
}
                         
create_custom_log("------ V8 API Execution completed ------");                  

echo "Script Executed Successfully, Please check log file<br>";
if(!empty($data["data"])) {
    foreach($data["data"] as $lead) {
        $name = $lead["attributes"]["name"] ?? "Unknown Lead";
        echo "<h3>" . $name . "</h3>";
    }
}