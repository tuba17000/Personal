<?php 
    $HOSTNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DBNAME ='registration';

    $con = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    if (!$con){
            die(mysqli_error(throw new Exception("Error Processing Request", 1))); 
        };

?>