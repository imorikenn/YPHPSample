<?php require_once("DBManager.class.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>ワーク7</title>
</head>
<body>
<?php 
$dbmanager = DBManager::getInstance();
echo $dbmanager->getId();
?>
<hr/>
<?php
$dbmanager = DBManager::getInstance();
echo $dbmanager->getId();
?>

</body>
</html>