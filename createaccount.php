<?php
    require_once("include/sqlconnect.php");

    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $uname=$_POST['uname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $date=date('Y:m:d H:i:s');

        $query="INSERT INTO acc_creation(first_name,last_name,user_name,email,passkey,create_date)
        value('{$fname}','{$lname}','{$uname}','{$email}','{$password}','{$date}') ";

        $data_added=mysqli_query($databaseConnect,$query);

        if($data_added){
            echo "<script>window.onload=function(){showConfirmMsg();}</script>";
        }
        else{
            echo "error";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/createaccount.css?<?=filemtime("css/createaccount.css")?>">
</head>
<body style="background-image: url('img/back4.jpeg');">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <script type="text/javascript" src="js/createaccount.js?<?=filemtime("js/createaccount.js")?>"></script>
    
    <div class="row">

        <div class="col-sm-4" id="some" style="background-image:url('img/top.jpeg');">
            <p id="caption">"Join us today and unlock a world of exclusive deals and seamless shopping!"</p>
            <p id="detail">Create your account today and dive into a seamless shopping experience! Enjoy exclusive member-only deals, personalized recommendations, and a fast, secure checkout process. With just a few clicks, you'll gain access to a world of amazing products and unbeatable offers. Don't miss out—join our community and elevate your shopping game!</p>
            <p id="all"><strong>@ 2024  All right resived.</strong></p>
        </div>


        <div class="col-sm-4" id="form">
            <h2 id="topic">Create an Account</h2><br>
            <form action="createaccount.php" method="post">
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" name="fname"></input>
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" name="lname"></input>
                <label for="uname">User Name:</label>
                <input type="text" class="form-control" id="uname" name="uname"></input>
                <label for="email">e-mail:</label>
                <input type="email" class="form-control" id="email" name="email"></input>
                <label for="password">Create Password:</label>
                <input type="password" class="form-control" id="password" name="password"></input>
                <label for="passConfi">Confirm Password:</label>
                <input type="password" class="form-control" id="passConfi"></input><br>
                <input type="submit" class="btn btn-primary" id="subBtn" value="Create account" name="submit"></input>
            </div>
            </form>
        </div>

    </div>

    <div id="confirmMsg" style="background-image: url('img/top.jpeg')">
        <p><strong>Account Created Sucsessfully!<strong></p>
        <img src="img/check.png" style="width:5rem; position:relative;left:2rem"></img>
        <input class="btn btn-info" id="ok" value="ok"></input>
    </div>

</body>
</html>