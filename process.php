<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Processing</title>
</head>

<body>
<?php 

setcookie("Password",0,time()+(60*60*24));


if(isset($_COOKIE["Password"])){
	$testpass = $_COOKIE["Password"];
	echo "Arefin:{$testpass}";
					}
	else {
		echo "No Data in  Cookie";
		}

?>
</body>
</html>