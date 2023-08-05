<?php
session_start();
include("reportcard.php")
?>
<style>

    table, th, td {
        border:1px solid black;
      }
</style>
<table style="width:100%">
    <tr>
      <th>Sno</th>
      <th>Name</th>
      <th>Math</th>
      <th>ADSA</th>
      <th>DCCN</th>
    </tr>
    
      
 

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "roles";
$conn = mysqli_connect($servername,$username,$password,$database);

if ($conn->connect_error) {
    die("Connection failed :" .$conn->connect_error);
}

   $sql = "SELECT Sno,username,mathmarks,adsamarks,dccnmarks FROM `roles`.`reportcard`";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()){
           echo "
           <tr>
           <td>" .$row['Sno'] ."</td>
           <td>" .$row['username'] ."</td>
           <td>" .$row['mathmarks'] ."</td>
           <td>" .$row['adsamarks'] ."</td>
           <td>" .$row['dccnmarks'] ."</td>
           </tr> 
           
           ";
       }
       echo "</tabel>";
   }

   $conn->close();
  ?>



<div class="button_area">
    <a  href="add_student.php" class="primary_btn">Add student score </button>

</div>
