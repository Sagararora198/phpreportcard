<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>




</html>




<?php
include('reportcard.php');

// echo $_SESSION['username'];
$servername = "localhost";
$username = "root";
$password = "";
$database = "roles";
$conn = mysqli_connect($servername,$username,$password,$database);

if ($conn->connect_error) {
      
    die("Connection failed :" .$conn->connect_error);
}
$query = mysqli_query($conn,"SELECT * FROM `roles`.`userroles` where Username='".$_SESSION['username']."'");
while($row=mysqli_fetch_array($query)){
    $role = $row['roletyoe'];
}
if($role=='admin'){


?>
<style>
        .button_area{
            margin-top:100px;
        }
    </style>
<body>    
<div class="button_area">
    <a  href="add_student.php" class="primary_btn">Add student score </button>
    <a  href="database.php" class="primary_btn"> Show report of existing students</button>

</div>

</body>
</html>

<?php }elseif ($role=='student') { ?>
    <style>
        .button_area{
            margin-top:100px;
        }
    </style>
   
<div class="button_area">
    
    <a  href="myreport.php" class="primary_btn"> Show my report card</button>

</div>

<?php 

}
?>
