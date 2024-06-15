function sucsess(){
    $(document).ready(function(){
        $("#confirmMsg").fadeIn();
        $("#confirmMsg").fadeOut(3000);
        setTimeout(()=>{
            window.location.href="land.php";
        },5000);
        
    })
}

function error(){
    $(document).ready(function(){
        $("#errorMsg").fadeIn();
    })
}

$(document).ready(function(){
    $("#ok").click(function(){
        $("#errorMsg").fadeOut(2000);
    })

    $("#create").click(function(){
        window.location.href="createaccount.php";
    })
})

