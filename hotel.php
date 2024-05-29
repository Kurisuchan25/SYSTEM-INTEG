<?php

$con=new mysqli('localhost',`root`,'',`cruds`);

if($con){
    echo "Connection succesful";
}else{
    die(mysqli_error($con));
}
?>