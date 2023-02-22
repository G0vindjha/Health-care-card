<?php
include 'config.php';

if(empty($_FILES['logo']['name'])){
$file_name = $_POST['old_logo'];
}else{
    $errors = array();

    $file_name = $_FILES['logo']['name'];
    $file_size = $_FILES['logo']['size'];
    $file_tmp = $_FILES['logo']['tmp_name'];
    $file_type = $_FILES['logo']['type'];
    $file_ext = strtolower(end(explode('.',$file_name)));
    $extensions = array("jpeg","png","jpg");

    if(in_array($file_ext,$extensions)=== false)
    {
        $errors[] = "This Extension File Is Not Allowed";
    }

    if($file_size > 2097152)
    {
        $errors[] = "File Size Must Be 2 MB or lower";
    }

    if(empty($errors)== true){
        move_uploaded_file($file_tmp,"images/".$file_name);
    }else{
        print_r($errors);
        die();
    }
}

 $sql = "UPDATE settings SET websitename = '{$_POST["website_name"]}',logo='{$file_name}',footerdesc='{$_POST["footer_desc"]}'";
$result = mysqli_query($conn,$sql);

if($result){
    header("Location:{$hostname}/admin/settings.php"); 
}else{
    echo "<div class = 'alart alart-danger'>Query Failed!!!</div>";
}

?>