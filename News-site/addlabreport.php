<?php
include 'header.php';
include 'config.php';
$loguname = $_GET['loguname'];
$query5 = " select * from prescriptionrecord where patientuname = '{$loguname}'";
        $result5 = mysqli_query($conn, $query5) or die("Query Faild!!"); 
         if(mysqli_num_rows($result5)>0){
            while($row5 = mysqli_fetch_assoc($result5))
            {
                $arr1 = explode(",", $row5['testname']);
                for($i=0;$i<sizeof($arr1);$i++)
                {
                    ?>

                    <!-- echo $arr1[$i]; -->

                    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Lab Report</title>
</head>
<body>
<div  class="float-child">
<h2 class="illdiv"><?php echo $row5['date'];?></h2>

<center>
<h3><?php echo $arr1[$i];?> Test</h3>
<label for=""><h3 class="btn" style="display:inline-block; text-align:center;"><a style="color: black;" href="./attachlabreport.php?loguname=<?php echo $loguname?>&testname=<?php echo $arr1[$i];?>">Add Report</a></h3></label>
<label for=""><h3 class="btn" style="display:inline-block; text-align:center;"><a style="color: black;" href="#">View Report</a></h3></label>
</center>

</div>
</body>
<style>
     .float-child {
    width:20%; 
    height:200px;
    margin-left:3%;
    border:2px solid #3399ff;
    display:inline-block;
    margin-top: 20px;
    border-radius: 15px 50px;
    
}  
.illdiv{
    margin-top:0px;
    width: 100%;
    text-align:center;
    height: 35px;
    border-radius: 15px 50px;
    background: #3399ff;
}

.btn {
  width:100px;
  height:30px;
  border-radius:5px;
  background-color: #3399ff; 
  color: black; 
  border: 2px solid #008CBA;
}

.btn:hover {
  background-color: white;
  color: #008CBA;
}
</style>
</html>
<?php
                }
            }
          }
?>