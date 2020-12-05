<style>

body{
    background-image: url(img/w8.jpg);
    display: block;
    color: white;
    background-size: cover!important;

}
</style>
<?php
include_once '../headers.php';
 ?>
 <center>
<br/>
<p>Open/Close Garage Door</p>
<form  action="submit.php" method="post">
  <?php
    echo '<button name="toggle" value="garage" class="btnoff w3-button w3-blue" id="f-btngarage">Toggle Garage</button><br/>';
  ?>
</form>
