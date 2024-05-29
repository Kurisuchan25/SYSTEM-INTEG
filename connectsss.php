<?php

$con=new mysqli("localhost:3307", "root", "", "crud");

if(!$con){  
    die(mysqli_error($con));
}

?>