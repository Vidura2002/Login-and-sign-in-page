<?php
    require_once("include/sqlconnect.php");

    if(isset($_POST['log'])){
        $pass=$_POST['password'];
        $query="SELECT * FROM acc_creation";
        $data=mysqli_query($databaseConnect,$query);
        $fail=true;
        if($data){
            while($data_get=mysqli_fetch_assoc($data)){
                if($_POST['name']==$data_get['user_name'] && $_POST['password']==$data_get['passkey']){
                    $fail=false;
                    echo "<script>window.onload=function(){sucsess();}</script>";
                }
            }
            if($fail){
                echo "<script>window.onload=function(){error();}</script>";
            }
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Log</title>
    <link rel="stylesheet" type="text/css" href="css/shop.css?<?=filemtime("css/shop.css")?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body style="background-image: url('img/back4.jpeg');">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <script type="text/javascript" src="js/shopLog.js?<?=filemtime("js/shopLog.js")?>"></script>

    <div id="logForm">
        <div id="logimg" style="background-image:url('img/top.jpeg');">
        <h4 id="topic">Welcome to e-shop</h4>
        <p id="detail">Welcome back.Log in to access your account, track orders, and enjoy a personalized shopping experience. Discover the latest products and exclusive deals tailored just for you. Happy shopping!</p>
        </div>
        <form method="post">
        <div class="form-group" id="form">
            <h2 id="logTop">Log to shop</h2><br>
            <label for="name"><strong>Enter user name:</strong></label>
            <input id="Name" type="text" class="form-control" name="name"></input>
            <label for="password"><strong>Enter Password</strong></label>
            <input id="pass" type="password" class="form-control" name="password"></input><br>
            <input type="submit" id="logBtn" class="btn btn-primary" value="Log in" name="log"></input><br>
            <input type="button" id="create" class="btn btn-primary" value="create an account" style="background-color:red;"></input>
        </div>
        </form>
    </div>

    <div id="confirmMsg" style="background-image: url('img/top.jpeg')">
        <p style="margin-top:1rem;"><strong>logging succsessful!<strong></p>
        <img src="img/check.png" style="width:5rem; position:relative;left:0.5rem"></img>
    </div>

    <div id="errorMsg" style="background-image: url('img/top.jpeg')">
        <p style="margin-top:1rem;"><strong>Invalid input!<strong></p>
        <img src="img/error.jpeg" style="width:5rem; position:relative;left:0.5rem; border-radius:50px"></img>
        <p><strong>check user name and password.</strong></p>
        <input class="btn btn-info" id="ok" value="ok"></input>
    </div>

    <p id="all"><strong>@ 2024  All right resived.<strong><p>
    
</body>
</html>