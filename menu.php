<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sample Web - Caf&eacute; Menu</title>
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/menu.css">
</head>

<body class="bodyStyle">

	<div id="header" class="mainHeader">
		<hr>
		<div class="center">Sample Web Server</div>
	</div>
	<br>
	<?php
		// Display the server metadata information if the showServerInfo parameter is true.
		include('serverInfo.php');
	?>
	<hr>
	<div class="topnav">
		<a href="index.php">Home</a>
		<a href="menu.php" class="active">Menu</a>
		<a href="orderHistory.php">Order History</a>
	</div>
	<hr>
	<div class="center">
		<h3>Menu</h3>
	</div>
	<hr>
</body>
</html>