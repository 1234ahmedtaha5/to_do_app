<?php 
session_start();
$conn=mysqli_connect("localhost","root","","to_do_app");

if($_SERVER['REQUEST_METHOD']=='POST' && isset( $_POST['title'])){
    $title=$_POST["title"];
    $id=$_GET['id'];
    $sql = "UPDATE `tasks` SET `title`='$title' WHERE `id` = $id ";
    $result=mysqli_query($conn,$sql);

   if(mysqli_affected_rows($conn)==1){
    $_SESSION['success']="update successfully";
    header("location:../index.php");
   }
}

?>