<?php
$servername="localhost";
$username="root";
$password="";
$db="kingdomofebooks";

$conn=new mysqli($servername,$username,$password,$db);

if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}else{
    echo "<script>alert('Connection Established');</script>";
}


header_remove();
?>
