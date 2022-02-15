<?php

include("config.php");


$id=$_POST['id'];
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];

$sql="UPDATE producto SET  codigo='$codigo',nombre='$nombre',precio='$precio' WHERE id='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: welcome.php");
    }
?>