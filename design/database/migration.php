<?php 

// create connection 
$conn=mysqli_connect("localhost","root","");
if(!$conn){
    echo "connection field";
}
$query="CREATE DATABASE IF NOT EXISTS to_do_app";
$result=mysqli_query($conn,$query);
 mysqli_close($conn);

//create table

$conn= mysqli_connect("localhost","root","","to_do_app");
if(!$conn){
    echo "connection failed";
}
$query="CREATE TABLE IF NOT EXISTS TASKS(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(200) NOT NULL
)";

$result=mysqli_query($conn,$query);
mysqli_close($conn);

?>