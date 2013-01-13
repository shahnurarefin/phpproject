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
	
	//query result
	
	$result = mysql_query("select * from subjects",$connection);
	
	if(!$result){
		die("There is not query: " . mysql_error());
	}
	
	// result show
	echo "<ul>";
	while ($row = mysql_fetch_array($result)){
		echo "<li>"; echo $row["menu_name"] . " " . $row["position"];echo "</li>";
		
	}
	echo "</ul>";
		
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