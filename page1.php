<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>page 1</title>
</head>

<body>
<?php 

	$url_page = "page2.php";
	$name = "Shahnur Arefin";
	$fname = "Mustaq Ahmed";
	$mname = "Salina Akhtar";
?>
<?php 
	$url = $url_page;
	$url .= "?param1=" . urlencode($name);
	$url .= "&param2=" . urlencode($fname);
	$url .= "&param3=" . urlencode($mname);
?>
<a href="<?php echo htmlspecialchars($url);?>">Go to Page 2</a>
</body>
</html>