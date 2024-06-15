<?php
        require_once("include/sqlconnect.php");

        $query="SELECT * FROM acc_creation";
        $data=mysqli_query($databaseConnect,$query);
        $table="<table>";
        $table.="<tr><th>First Name</th><th>Last Name</th><th>User Name</th><th>e-mail</th>
        <th>password</th><th>create Date</th><tr>";
        if($data){
            while($data_get=mysqli_fetch_assoc($data)){
                $table.="<tr>";
                $table.='<td>'.$data_get['first_name'].'</td>';
                $table.='<td>'.$data_get['last_name'].'</td>';
                $table.='<td>'.$data_get['user_name'].'</td>';
                $table.='<td>'.$data_get['email'].'</td>';
                $table.='<td>'.$data_get['passkey'].'</td>';
                $table.='<td>'.$data_get['create_date'].'</td>';
                $table.="</tr>";
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td,th{
            border:2px solid black;
            padding:1rem;
        }

        table{
            border-collapse: collapse;
            margin-left:5rem;
        }
        th{
            background-color:rgb(75, 193, 225);
        }
        #topic{
            margin-left:25rem;
            margin-bottom:3rem;
        }

    </style>
</head>
<body>
    <h2 id="topic">E-shop Account Creation Datasheet</h2>
    <?php echo $table ?>
</body>
</html>