
<?php
session_start(); 
$conn=mysqli_connect("localhost","root","","to_do_app");

if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["title"])){
    $taskTitle=trim(htmlspecialchars(htmlentities($_POST["title"])));

    $query="INSERT INTO `tasks`(`title`) VALUES('$taskTitle')";

    $result=mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn)==1){
        $_SESSION["success"] ="Task added successfully!";
        header("location:../index.php");
    }

}

?>