<?php
include 'header.php';
include 'config.php';
$logpatientuname = $_GET['loguname'];
$logtestname = $_GET['testname'];

if (isset($_FILES['uploadpdf']['name']))
        {
          $file_name = $_FILES['uploadpdf']['name'];
          $file_tmp = $_FILES['uploadpdf']['tmp_name'];
          $new_name = time()."-".basename($file_name);
          $folder = "./uploadedlabreport/" . $new_name;
          $img_name = $new_name;

if (isset($_POST['save'])) {
    
    $doctorname = mysqli_real_escape_string($conn,$_POST['doctorname']);
    $hospitalname = mysqli_real_escape_string($conn,$_POST['hospitalname']);
    $detailreport = mysqli_real_escape_string($conn,$_POST['detailreport']);

	$sql = "INSERT INTO userlabrecords (patientuname,doctorname,hospitalname,testname,detailreport,filename) VALUES ('{$logpatientuname}','{$doctorname}','{$hospitalname}','{$logtestname}','{$detailreport}','{$img_name}')";

	mysqli_query($conn, $sql);

	if (move_uploaded_file($file_tmp, $folder)) {
		echo "<h3> file uploaded successfully!</h3>";
    header("Location:{$hostname}/userinfopage.php?loguname={$logpatientuname}");
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
        }
?>          
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Lab Report</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method ="POST" enctype="multipart/form-data" autocomplete="off">
<div  class="float-child">
<div class="parent" style="background-color:white;margin-left:30%;margin-right:30%;margin-bottom:20px;border-radius:20px;">
        <div style="margin-left:20px;">
        <div>
        <h1 style="text-align:center; margin-bottom:30px;">Test Details</h1>
        </div>
        <div style="margin-top:-30px;">
        <label for="prescriptions" style="display:inline-block;"><h3>Doctor Name : </h3></label>
            <input name="doctorname" type="text" class="input" style="display:inline-block;">
        </div>   
        <div style="margin-top:-20px;">
        <label for="prescriptions" style="display:inline-block;"><h3>Hospital Name : </h3></label>
            <input type="text" name="hospitalname" class="input" style="display:inline-block;">
        </div>
        <div style="margin-top:-20px;">
        <label for="prescriptions" style="display:inline-block;"><h3>Detail About Report : </h3></label>
            <textarea name="detailreport" class="input" style="display:inline-block;" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group" style="margin-top:-20px;">
			<input class="form-style" type="file" name='uploadpdf' accept=".pdf">
		</div>
        <button type="submit" class="btn" name="save" style="margin-left:35%; margin-top:20px;">Submit</button>

</div>

</div>
</form>
</body>
<style>
    .input{
        border:2px solid #3399ff;
        height:20px;
        border-radius:5px
    }
     .float-child {
    width:100%; 
    height:100%;
    border:2px solid white;
    background-color: #3399ff;
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
    background: white;
}

.form-group{ 
  position: relative;
  display: block;
    margin: 0;
    padding: 0;
}
.form-style {
  padding: 13px 20px;
  padding-left: 55px;
  margin-top: 20px;
  height: 48px;
  width: 90%;
  font-weight: 500;
  border-radius: 4px;
  font-size: 14px;
  line-height: 22px;
  letter-spacing: 0.5px;
  outline: none;
  color: white;
  background-color: #3399ff;
  border: none;
  -webkit-transition: all 200ms linear;
  transition: all 200ms linear;
  box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
}
.form-style:focus,
.form-style:active {
  border: none;
  outline: none;
  box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
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