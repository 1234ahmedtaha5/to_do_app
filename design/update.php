<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
</head>
<?php 
$conn=mysqli_connect("localhost","root","","to_do_app");
if(isset($_GET['id'])){
    $id = $_GET["id"];
    $query2="SELECT * from `tasks` where `id`=$id";
    $result=mysqli_query($conn,$query2);
    $row=mysqli_fetch_assoc($result);
}

?>

<body>
 
  
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                 <h1 class="text-center">Edit task </h1> 
                <form action="handelers/edit-handeler.php?id= <?php echo $_GET['id'] ?> " method="POST" class="form border p-2 my-5">
                    <input type="text" name="title" class="form-control my-3 border border-success" placeholder="add new todo" value="<?php echo $row['title'] ?>">
                    <input type="submit" value="Add" class="form-control btn btn-primary my-3 " placeholder="add new todo">
                </form>
            </div>
            
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>