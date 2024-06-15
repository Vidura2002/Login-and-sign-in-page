function showConfirmMsg(){
    $(document).ready(function(){
        $("#confirmMsg").fadeIn(1000);
    })
}

$(document).ready(function(){
    $("#ok").click(function(){
        $("#confirmMsg").fadeOut(1000);
        window.location.href="shopLog.php";
    })
})