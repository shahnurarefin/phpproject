<?php 
	//create database connection
	$connection = mysql_connect("localhost","root","");
	if(!$connection){
		die("Database is not connected yet: " .  mysql_error());
	}
	// connect with database
	
	$db_connect = mysql_select_db("widget_corp",$connection);
	
	if(!$db_connect){
		die("Database is not connected: " . mysql_error());
	}
		
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form</title>
</head>

<body>
<?php 
 
?>

</body>
</html>