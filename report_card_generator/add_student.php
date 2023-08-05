<?php
session_start();
include("reportcard.php")

?>
<style>
    
    .primary-btn{
        
    display: block;
    margin: auto;
    width: 9%;
    background-color: red;
    border: 2px solid #eb5a5a;
    border-radius: 4px;
    text-align: center;
    color: white;
    text-decoration: none;

    }
</style>    
<div class="container">
    <h1>
        Enter Student Detail Here
    </h1>
</div>

<form action="add_student.php" method="post" class="form">
    <label for="username">Enter full name of the student</label>
    <input type="text" name="username" id="username" class="username" required >

    <label for="mathnumber">Enter maths number</label>
    <input type="number" name="mathnumber" id="mathnumber" class="mathnumber" required> 

    <label for="mathnumber">Enter ADSA number </label>
    <input type="number" name="adsanumber" id="adsanumber" class="adsanumber" required> 

    <label for="mathnumber">Enter DCCN number</label>
    <input type="number" name="dccnnumber" id="dccnnumber" class="dccnnumber" required> 

    <button type="submit" class="primary_btn ">submit</button>
</form>
   
<div>

    <a href="database.php" class="primary-btn ">Show score card </a>
</div>
    

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "Nhidalna@123";
    $database = "roles";
    $conn = mysqli_connect($servername,$username,$password,$database);

    if ($conn->connect_error) {
        die("Connection failed :" .$conn->connect_error);
    }
    $name = $_POST['username'];
    $mathmarks = $_POST['mathnumber'];
    $adsamarks = $_POST['adsanumber'];
    $dccnmarks = $_POST['dccnnumber'];
    $sql = "INSERT INTO `roles`.`reportcard`(username,mathmarks,adsamarks,dccnmarks) VALUES('$name','$mathmarks','$adsamarks','$dccnmarks')";
    if ($conn->query($sql)==TRUE) {
        echo "<script> alert(`Success`);</script>";
    }
    else{
        echo "<script> alert(`failed`);</script>";
    }
    $conn->close();
}
?>
