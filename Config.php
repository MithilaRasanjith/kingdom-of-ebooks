<?php
$servername="localhost";
$username="root";
$password="";
$db="kingdomofebooks";
$port=3307;

$conn=new mysqli($servername,$username,$password,$db,$port);

if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}else{
    echo "<script>alert('Connection Established');</script>";
}


header_remove();
?>
