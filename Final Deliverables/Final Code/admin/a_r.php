<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'donation');
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$ID=$_POST['ID'];
$STATUS=$_POST['status'];

$sql="UPDATE form SET status='$STATUS' WHERE id= '$ID' ";


if(!mysqli_query($link,$sql)){
    echo"error";
}
else{
   
    header("refresh:0; url=../admin/index.php");
}
