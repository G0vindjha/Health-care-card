<?php
include 'config.php';

if(empty($_FILES['new_image']['name'])){
    $new_name = $_POST['old_image'];
}else{
    $errors = array();

    $file_name = $_FILES['new_image']['name'];
    $file_size = $_FILES['new_image']['size'];
    $file_tmp = $_FILES['new_image']['tmp_name'];
    $file_type = $_FILES['new_image']['type'];
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

    $new_name = time()."-".basename($file_name);
    $target = "upload/".$new_name;
    $img_name = $new_name;

    if(empty($errors)== true){
        move_uploaded_file($file_tmp,$target);
    }else{
        print_r($errors);
        die();
    }
}

 $sql = "UPDATE post SET title = '{$_POST["post_title"]}',description='{$_POST["postdesc"]}',category={$_POST["category"]},profile_image='{$img_name}'
        WHERE post_id = {$_POST["post_id"]};";
        if($_POST['old_category'] != $_POST["category"] ){
            $sql .= "UPDATE category SET post = post - 1 WHERE category_id = {$_POST['old_category']};";
            $sql .= "UPDATE category SET post = post + 1 WHERE category_id = {$_POST["category"]};";
        }
$result = mysqli_multi_query($conn,$sql);

if($result){
    header("Location:{$hostname}/admin/post.php"); 
}else{
    echo "<div class = 'alart alart-danger'>Query Failed!!!</div>";
}

?>