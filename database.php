<?php 
	// create connection
	
	$connection = mysql_connect("localhost","root","");
	if(!$connection){
			die("Database connection is not establised" . mysql_error());
		}
		
	// selecting database
	
	$db_select = mysql_select_db("widget_corp",$connection);
	if(!$db_select){
		die("Database not found" .  mysql_error());
		}
		

	

		
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form</title>
</head>

<body>
<?php 
	// database query
	
	$result = mysql_query("SELECT * FROM subjects where id=3",$connection);
	
	if(!$result){
		die("No data found in database" . mysql_error());
		}
		
	// fetching data
	
	while($row = mysql_fetch_array($result)){
			echo $row["id"] . " " . $row["menu_name"] . " " . $row["position"];	
			echo "<br/>";
									}

?>
</body>
</html>
<?php 
mysql_close($connection);
?>