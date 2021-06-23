let systemUUID = "";
let garageAPI = "";
function getSystemUUID(myFunc) {
    userUUID = $.cookie('pimationuseruuid');
    $.get('https://api.peasenet.com/sprinkler/user/' + userUUID).done(function (data) {
        systemUUID = JSON.parse(data)[0]["deviceUUID"];
        garageAPI = 'https://api.peasenet.com/sprinkler/garage/' + systemUUID;
        console.log("system uuid: " + systemUUID);
        myFunc();
    });
}

function setupGarageClick(){
    $("#garagebutton").click(function(){
        $.post(garageAPI + "/toggle").done(function(data){
            console.log(data);
        });
    });
}


$(document).ready(function () {
    getSystemUUID(setupGarageClick);
    $("#menuopen").click(function () {
        $("#menuopen").fadeOut(250, function () {
            $('#menunav').fadeIn(250);
        });
    });
    $("#menuclose").click(function () {
        $('#menunav').fadeOut(250, function () {
            $("#menuopen").fadeIn(250);
        });
    });
});