<?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include '../connect.php';
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sqlquery = "insert into `users` (username , password)
            values('$username', '$password')";
        $result = mysqli_query($con,$sqlquery);
        if ($result){
            echo "User registered.";
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
    <title>Sign-up</title>
</head>
<body>
        <form action="signup.php" method="post">
            <label for="nome">Name</label>
            <input type="text" name="username"/>
            <label for="password">Password</label>
            <input type="text" name="password"/>
            <input type="submit" value="send"/>
        </form>
</body>
</html>