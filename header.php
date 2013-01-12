

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form</title>
</head>

<body>

<?php ob_start();?>
<?php 
	header("location: page1.php");
	exit;
?>
<?php ob_end_flush();?>

</body>
</html>