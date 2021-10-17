<?php

// require 'SDK/lib';
// $az = file_get_contents('http://169.254.169.254/latest/meta-data/placement/availability-zone');
// $region = substr($az, 0, -1);
// $az = "local";
// $region = "on-premise";

$showServerInfo = "true";
$timeZone = "Asia/Jakarta";
$currency = "$";
$db_url = getenv('db_host');
$db_name = getenv('db_name');
$db_user = getenv('db_user');
$db_password = getenv('db_password');

?>
