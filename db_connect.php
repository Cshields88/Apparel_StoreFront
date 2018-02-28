<?php
$dbconnect = mysqli_connect("localhost","root","", "chictutorial");
echo 'your connected';
if(mysqli_connect_errno()){
    echo "Connection Failed: ".mysqli_connect_error();
    exit;
}




?>