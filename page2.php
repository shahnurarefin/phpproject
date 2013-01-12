<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>page 2</title>
</head>

<body>

<?php 

$name = $_GET["param1"];
$fname = $_GET["param2"];
$mname = $_GET["param3"];

echo "Name: " . $name; echo "<br/>";
echo "Father's Name: " . $fname; echo "<br/>";
echo "Mother's Name: " . $mname; echo "<br/>";

?>
</body>
</html>