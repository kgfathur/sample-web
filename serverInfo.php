<?php

$ipAddress = $_SERVER['SERVER_ADDR'];
$remoteAddress = $_SERVER['REMOTE_ADDR'];
$instanceID = getenv('HOSTNAME'); 
if(empty($instanceID)){
  $instanceID = gethostname();
}

// Display instance metadata.
echo '<hr>';
echo '<div class="center">';
echo '	<h3>Server Information</h3>';
echo '	<h4>Client Address: ' . $remoteAddress. '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Server Address: ' . $ipAddress . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Server Hostname: ' . $instanceID  . '</h4>';
echo '</div>';

?>