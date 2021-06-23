<?php
include_once '../lib/cookie_check.php';
include_once '../index.php';
if (!in_array("garage", $capabilities)) {
//    header("Location: /");
    echo "garage not in capabilities";
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="css/w3.css" rel="stylesheet">
    <link type="text/css" href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e00a151875.js" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="js/body.js"></script>
    <link href="css/w3-flat.css" type="text/css" rel="stylesheet"/>

    <title>PiMation Garage</title>
</head>
    <body>
        <div class="w3-display-middle">
            <a id="garagebutton" class="w3-button w3-blue" value="<?php echo $_COOKIE['pimationuseruuid']; ?>">Toggle Garage</a>
        </div>
        <div class="w3-display-bottomleft w3-center w3-flat-silver w3-dropdown-hover " style="position:fixed;">
            <a href="javascript:void(0);" id="menuopen" class="w3-button fix-bars">
                <i style="z-index: 5;" class="fa fa-bars w3-display-middle"></i>
            </a>
            <div style="display: none;" id="menunav">
                <a id="menuclose" class="w3-button "> <i style="z-index: 5;" class="fa fa-times"></i></a>
                <a href="/" class="w3-button"><i style="z-index: 5;" class="fa fa-home"></i></a>
            </div>
        </div>
    </body>
</html>