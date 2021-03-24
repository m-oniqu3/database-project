<?php

$firstname = $_POST['first'];
$lastname = $_POST['last'];
$username= $_POST['username'];
$password=$_POST['password'];



    $host="localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mealplan";

    //create the connection

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname );
   

    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else 
    {
        
        $sql= "INSERT INTO account (uname, fname, lname, pass) values('$username', '$firstname','$lastname', '$password')";

        if ($conn->query ($sql)){
            echo "Your information has been sucessfully added.";
        }

        else {
            echo "ERROR: ". $sql ."
            ". $conn->error;
        }
        $conn->close();
    }





die();

?>

