<?php
	require_once "db.php"
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
	<?php
		$lugares=array();
		$db=new db("root","daw01");
		$db->conectar_base_datos();
		echo $db->getInfo();
		echo "</br>";
		$db->setLugar("Madrid2","Excursión a las playas de Madrid, cuando el mundo explote","2014-10-12");
		echo $db->getLugares();
	?>
<body>
</body>
</html>