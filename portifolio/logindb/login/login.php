<?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include '../connect.php';
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sqlquery = "Select * from `users` where username='$username' and password = '$password'";
        $result = mysqli_query($con,$sqlquery);
        if ($result){
            echo "Logged in.";
        }else{
            die(mysqli_error($con));
        }

    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
        <form action="login.php" method="post">
            <label for="nome">Name</label>
            <input type="text" name="username"/>
            <label for="password">Password</label>
            <input type="text" name="password"/>
            <input type="submit" value="send"/>
        </form>
</body>
</html>