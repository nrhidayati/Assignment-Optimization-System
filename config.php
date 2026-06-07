<?php
$conn = new mysqli("localhost","root","","lp_system");
if($conn->connect_error){
    die("Connection Failed");
}
?>