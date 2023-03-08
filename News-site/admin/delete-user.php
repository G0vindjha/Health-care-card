<?php

if($_SESSION['user_role']== '0'){
    header("Location:{$hostname}/admin/post.php");
  }

include "config.php";
$user_id = $_GET['id'];
$sql = "DELETE FROM user WHERE user_id = {$user_id}";
$result = mysqli_query($conn,$sql) or die("Querry Faild!!!");
header("Location:{$hostname}/admin/users.php");
mysqli_close($conn);
?>