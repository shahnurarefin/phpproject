<?php 
//  create connection

$connection = mysql_connect("localhost","root","");
if(!$connection){
    die("Database connection is not successful: " . mysql_error());
}


		

	

		
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form</title>
</head>

<body>
<?php 

									}

?>
</body>
</html>
<?php 
mysql_close($connection);
?>