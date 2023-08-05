


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $servername = "localhost";
    $username = "root";
    $password = "Nhidalna@123";
    $database = "roles";
    $conn = mysqli_connect($servername,$username,$password,$database);

    if ($conn->connect_error) {
        die("Connection failed :" .$conn->connect_error);
    }
    $username1 = $_POST['Username'];
    $password1 = $_POST['password'];

    $query = mysqli_query($conn,"SELECT * FROM `roles`.`userroles` where Username='$username1'and password='$password1' ");
    if(mysqli_num_rows($query)>0){
        session_start();
        $_SESSION['username']=$_POST['Username'];
        header('location:dashboard.php');
    }


    // $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        *{
            box-sizing: border-box;

        }
        .container{
            
            background-color: grey;
            padding: 23px;
            margin: 23px auto;            
        }
        .container h2,p{
            text-align: center;
        }
        input{
            display: block;
            margin: 12px;
            padding: 7px;
            width: 50%;

            
        }
        .btn{
            margin: 12px;
        }
    </style>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
</head>
<body>
    <div class="container">
        <h2>Welcome</h2>
        <p>Enter your details</p>
        <form method="post" >
  <div class="form-group row">
    <label for="Username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="Username" name="Username" placeholder="Usernname">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    
  </div>
</form>
    </div>
</body>
</html>


