<?php

if ($showServerInfo == 'true') {

	// Retrieve the instance's Public IP address and Instance ID.
	
	// $ipAddress = file_get_contents('http://169.254.169.254/latest/meta-data/public-ipv4');
	// $instanceID = file_get_contents('http://169.254.169.254/latest/meta-data/instance-id');
	$ipAddress = $_SERVER['SERVER_ADDR'];
	$remoteAddress = $_SERVER['REMOTE_ADDR'];
	// $instanceID = gethostname();
	$instanceID = getenv('HOSTNAME'); 

	// Display instance metadata.
	
	echo '<hr>';
	echo '<div class="center">';
	echo '	<h3>Server Information</h3>';
	echo '	<h4>Client Address: ' . $remoteAddress. '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Server Address: ' . $ipAddress . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Server Hostname: ' . $instanceID  . '</h4>';
	echo '</div>';
}

?>