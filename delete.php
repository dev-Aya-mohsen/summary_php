<?php
    require 'connect.php';
    $id = $_GET["pid"];
    $del= "DELETE FROM `signup` WHERE `id`='$id'";
    $query=mysqli_query($conn,$del);
  if($query){
   header("location:show_user.php");
  }


?>