<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Processing</title>
</head>

<body>
<?php 
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	echo "{$username}:{$password}";
?>
</body>
</html>