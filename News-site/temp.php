<?php
include 'config.php';
$username = $_GET['loguname'];

$query = " select * from usercontactdetails  where username = '{$username}'";
$result = mysqli_query($conn, $query) or die("Query Faild!!"); 
 if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result))
    {
      $logpatientid = $row['patientid'];
      $logpatientfname = $row['firstname'];
      $logpatientlname = $row['lastname'];
      echo $logpatientid;   
    }
  }
  echo $logpatientfname;
?>