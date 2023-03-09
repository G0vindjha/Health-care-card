<?php
include 'header.php';
include 'config.php';
$loguname = $_GET['loguname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Prescription</title>
</head>
<body>
<div style= "width: 100%; white-space: nowrap; overflow-x: scroll;">
<?php
        $query7 = " select * from prescriptionrecord where patientuname = '{$loguname}' ORDER BY id DESC
        LIMIT 5";
        $result7 = mysqli_query($conn, $query7) or die("Query Faild!!"); 
         if(mysqli_num_rows($result7)>0){
            while($row7 = mysqli_fetch_assoc($result7))
            {
        ?>
<div  class="float-child">
<h2 class="illdiv"><?php echo $row7['diseasename'];?></h2>
            <h3>Date : <?php echo $row7['date'];?></h3>
            <h3>Hospital :<?php echo $row7['hospitalname'];?></h3>
            <h3>Doctor Name : <?php echo $row7['doctorfname']." ".$row7['doctorlname'];?></h3>
            <?php
                $arr1 = explode(",", $row7['medicinename']);
                for($i=0;$i<sizeof($arr1);$i++)
                {
        ?>
        <h3><?php echo $arr1[$i];?></h3>    
        <?php
                }
        ?>           
            <br>
</div>
<?php
    }
}
?>

</div>
<style>
    .float-container {
    padding: 20px;
}

.float-child {
    width:24%; 
    height:500px;
    margin-left:10px;
    border:2px solid #3399ff;
    display:inline-block;
    margin-top: 20px;
    border-radius: 15px 50px;
    overflow-y: scroll;
    padding-left: 10px;
}  
.illdiv{
    margin-top:0px;
    width: 100%;
    text-align:center;
    height: 35px;
    border-radius: 15px 50px;
    background: #3399ff;
}
</style>
</body>
</html>