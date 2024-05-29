<?php
$connection = mysqli_connect("localhost:3307","root","","login_DB");
if(mysqli_connect_error()){

    echo "Failed to connect in Mysql" . mysqli_connect_error();

}else{
    echo "";
}
?>