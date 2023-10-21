<?php 
session_start();

if(isset($_GET['id'])){
    $conn=mysqli_connect("localhost","root","","to_do_app");
    $id=$_GET['id'];
    $query="DELETE  FROM `tasks` WHERE `id`=$id ";
    mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn)){
      $_SESSION['success']="task delete successfully";
      header("location:../index.php");
    }
    
}
?>