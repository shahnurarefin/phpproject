<?php 
//  create connection

$connection = mysql_connect("localhost","root","");
if(!$connection){
    die("Database connection is not successful: " . mysql_error());
}

// selecting datbase

$db_select = mysql_select_db("widget_corp",$connection);

if(!$db_select){
    die("Database is not selected: " . mysql_error());
}

// performing datbase query

$result = mysql_query("select id,menu_name from subjects where visible=1", $connection);

if(!$result){
    die("There is no Data in the database" . mysql_error());
}

// showing data in script

while ($row = mysql_fetch_array($result)){
    echo $row["menu_name"] . " " . $row["id"];
    echo "<br/>";
}

		

	

		
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form</title>
</head>

<body>
</body>
</html>
<?php 
mysql_close($connection);
?>