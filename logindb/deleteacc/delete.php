<?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include '../connect.php';
        $password = $_POST['password'];
        $username = $_POST['username'];
            $sqlquery = "delete from `users` where username='$username' and password = '$password'";
            $result = mysqli_query($con,$sqlquery);
        if ($result){
            echo "User Deleted.";
        }else{
            die(mysqli_error($con));
        };
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    <form action="delete.php" method="post">
            <label for="nome">Name</label>
            <input type="text" name="username"/>
            <label for="password">Password</label>
            <input type="text" name="password"/>
            <input type="submit" value="Delete Account"/>
    </form>
</body>
</html>