<?php
if(isset($_POST['toggle'])) {
exec ('sudo /var/www/html/modules/garage/toggle.py');
header('Location: index.php');
}
 ?>
