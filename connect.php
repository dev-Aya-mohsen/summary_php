<?php
/*
    $localhost="localhost";
    $username="root";
    $password="";
    $dbname = "php-test";
    // Create connection
    //pdo
    //mysqli
    $conn=new mysqli($localhost,$username,$password,$dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
    else{
        echo"connected successfully!";
    }
    */
    
$localhost="localhost";
define('username','root');
define('password', '');
$dbname= 'php-test';
$conn=mysqli_connect($localhost,username,password,$dbname);
if(!$conn){
    die("connection failed".mysqli_connect_error());
}
 


        


































?>