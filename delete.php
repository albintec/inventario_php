<?php

include("config.php");


$id=$_GET['id'];

$sql="DELETE FROM producto  WHERE id='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: welcome.php");
    }
?>
