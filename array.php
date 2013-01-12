

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>For Each</title>
</head>

<body>


<?php 
$arefin = array("name"=> "hitesh", "telephone"=> "01938884547", "sex" => "male");
echo "<pre>";
print_r($arefin);
echo "</pre>";

echo "Another process to show array \n";
echo "<br/>";

foreach($arefin as $arefinboss){
	echo $arefinboss . " ";
	echo "<br/>";
	}
	

?>
</body>
</html>