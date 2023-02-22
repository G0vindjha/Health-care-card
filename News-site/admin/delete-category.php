<?php

if($_SESSION['user_role']== '0'){
    header("Location:{$hostname}/admin/post.php");
  }

    $cat_id = $_GET['id'];
    include 'config.php';
    $sql = "DELETE FROM category WHERE category_id = {$cat_id}";
    $result = mysqli_query($conn,$sql) or die("Querry Failed!!!");
    header("Location:{$hostname}/admin/category.php");
    mysqli_close($conn);
?>