<?php

if(!defined('sugarEntry') || !sugarEntry) {
    die('Not a valid entry point');
}

header('Content-Type: application/json');

global $db;

$sql = "SELECT COUNT(*) AS total FROM leads WHERE deleted = 0 AND date_entered >= DATE_SUB(NOW(), INTERVAL 7 DAY)";

$result = $db->query($sql);
$row = $db->fetchByAssoc($result);

$count = !empty($row['total']) ? (int)$row['total'] : 0;

echo json_encode(['weekly_leads' => $count]);
exit;