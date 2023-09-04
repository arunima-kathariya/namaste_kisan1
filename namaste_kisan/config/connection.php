<?php
$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'namaste_kisan'; 

$con =  mysqli_connect($host, $username, $password, );

if(!$con)
{
    echo"not connected";

}
else{
    echo"connected";
}
?>
