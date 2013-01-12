<?php 
	header("location: page1.php");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form</title>
</head>

<body>
<?php 
 $_SESSION["last_name"] = "Arefin";
 $_SESSION["first_name"] = "Shahnur";
 
 echo $_SESSION["first_name"] . " " . $_SESSION["last_name"];
 
?>

</body>
</html>