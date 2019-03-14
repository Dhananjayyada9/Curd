<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$name=$_GET['name'];
if (!isset($name) || !strlen($name)) {
	echo "you submited is empty  ";
}else{
	echo "Form submited .";
}
echo "<br>$name";
?>
</body>
</html>
