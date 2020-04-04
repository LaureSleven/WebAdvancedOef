<?php
setcookie('naam', $_GET['naam'], time() + 24 * 60 *60);
setcookie('achtergrondkleur', $_GET['achtergrondkleur'], time() + 24 * 60 *60);
$path = '/WebAdvancedOef/oef4';
header("Location: http://" .  $_SERVER['HTTP_HOST'] . $path . '/toon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF8">
<title>plaatscookie</title>
</head>
<body>
Cookie geplaatst
</body>
</html>