<?php
if(isset($_POST['toggle'])) {
exec ('sudo /var/www/html/modules/garage/toggle.py');
header('Location: index.php');
}
if(isset($_GET['9674'])) {
exec ('sudo /var/www/html/modules/garage/toggle.py');
header('Location: index.php');
}
 ?>
