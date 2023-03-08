<?php
include 'config.php';
$username =$_GET['loguname'];

$query = " select * from usercontactdetails  where username = '{$username}'";
$result = mysqli_query($conn, $query) or die("Query Faild!!"); 
 if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result))
    {
      $logpatientid = $row['patientid'];
      $logpatientfname = $row['firstname'];
      $logpatientlname = $row['lastname'];
    }
  }
          

if(isset($_POST['save']))
{
  $logdiseasename = $_POST['deseasename'];
  $loghospitalname = $_POST['hospitalname'];
  $logdoctorfname = $_GET['dfn'];
  $logdoctorlname = $_GET['dln'];
  $logdoctoruname = $_GET['dun'];
  $logdoctorid = $_GET['did'];
    $arr = array(); 
    $arr2 = array(); 
    $count = mysqli_real_escape_string($conn,$_POST['clickcount']) ;
    $count2 = mysqli_real_escape_string($conn,$_POST['clickcount2']) ;
    for($i=1;$i<=$count;$i++)
    {
        $z = mysqli_real_escape_string($conn,$_POST[$i]) ;
        array_push($arr,$z);
    }
    for($j=51;$j<=$count2;$j++)
    {
        $m = mysqli_real_escape_string($conn,$_POST[$j]) ;
        array_push($arr2,$m);
    }
    $logmedicinename = implode(",",$arr);
    $logtestname = implode(",",$arr2);
    $logdate = date("d/m/y");
    $sql = "INSERT INTO prescriptionrecord (diseasename, hospitalname, patientfname, patientlname, patientuname, patientid, doctorfname, doctorlname, doctoruname, doctorid,medicinename,testname,date) VALUES ('{$logdiseasename}','{$loghospitalname}','{$logpatientfname}','{$logpatientlname}','{$logpatientuname}','{$logpatientid}','{$logdoctorfname}','{$logdoctorlname}','{$logdoctoruname}','{$logdoctorid}','{$logmedicinename}','{$logtestname}','{$logdate}')";
      if(mysqli_query($conn,$sql)){
            header("Location:{$hostname}/userinfopage.php?loguname={$logpatientuname}");
        }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Prescription</title>
</head>
<body>
    <div class='ripple-background'>
        <div class='circle xxlarge shade1'></div>
        <div class='circle xlarge shade2'></div>
        <div class='circle large shade3'></div>
        <div class='circle mediun shade4'></div>
        <div class='circle small shade5'></div>
    </div>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method ="POST" autocomplete="off">
    <div class="parent" style="background-color:white;margin-left:30%;margin-right:30%;margin-top:10%;border-radius:20px;">
        <div style="margin-left:20px;">
        <div>
        <h1 style="text-align:center;">Add Prescription</h1>
        </div>
        <div style="margin-top:-30px;">
        <label for="prescriptions" style="display:inline-block;"><h3>Disease Name : </h3></label>
            <input name="deseasename" type="text" class="input" style="display:inline-block;">
        </div>   
        <div style="margin-top:-20px;">
        <label for="prescriptions" style="display:inline-block;"><h3>Hospital Name : </h3></label>
            <input type="text" name="hospitalname" class="input" style="display:inline-block;">
        </div>
        
<div id="med" style="margin-top:-20px;">

            <h2 style="text-align:center;background:#008CBA ">Medicine</h2>
            <input type="hidden" id="count" name="clickcount" value="1">
            <div class="med1" style="margin-top:-20px;">
            <label for="prescriptions" style="display:inline-block;"><h3>Medicine Name : </h3></label>
            <input type="text" class="input" name="1" style="display:inline-block;">
            <label for=""><h3 class="btn" style="display:inline-block; text-align:center;" onclick="addmed()">Add</h3></label>
            </div>
        </div>
        
        <label for=""><h3 class="btn" style="margin-left:35%; margin-top:30px; text-align:center;" onclick="reqlabtest()">Lab Test</h3></label>
        <div id="lab" style="display:none;">
        <h2 style="text-align:center;background:#008CBA ">Lab Test</h2>
            <input type="hidden" id="count2" name="clickcount2" value="1">
            <div class="med2" style="margin-top:-20px;">
            <label for="prescriptions" style="display:inline-block;"><h3>Test Name : </h3></label>
            <input type="text" class="input" name="51" style="display:inline-block;">
            <label for=""><h3 class="btn" style="display:inline-block; text-align:center;" onclick="addtest()">Add</h3></label>
            </div>
        </div>
            <button type="submit" class="btn" name="save" style="margin-left:35%; margin-top:30px;">Submit</button>
        </form>
        <br><br>      
        </div>    
</div>
<script>
    var x=1;
    var y=51;
    
    const container = document.getElementById('med');
    const container2 = document.getElementById('lab');
function addmed(){
    let div = document.createElement('div');
    div.setAttribute('class','med1');
    div.setAttribute('style','margin-top:-20px;')
    container.appendChild(div);
    let h3 = document.createElement('h3');
    h3.setAttribute('for', 'prescriptions');
    h3.setAttribute('style', 'display:inline-block;');
    h3.innerHTML = "Medicine Name :";
    div.appendChild(h3);
    let input = document.createElement('input');
    input.style.display = "inline-block";
    input.className = "input";
    input.name = x+1;
    div.appendChild(input);
    x=x+1;
    document.getElementById('count').value = x;
}
  function addtest() {
      let div1 = document.createElement('div');
    div1.setAttribute('class','med2');
    div1.setAttribute('style','margin-top:-20px;')
    container2.appendChild(div1);
    let h3 = document.createElement('h3');
    h3.setAttribute('for', 'prescriptions');
    h3.setAttribute('style', 'display:inline-block;');
    h3.innerHTML = "Test Name :";
    div1.appendChild(h3);
    let input1 = document.createElement('input');
    input1.style.display = "inline-block";
    input1.className = "input";
    input1.name = y+1;
    div1.appendChild(input1);
    y=y+1;
    document.getElementById('count2').value = y;
        }
    function reqlabtest() {
            var x = document.getElementById("lab");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
}
</script>
  <style>
    .input{
        border:2px solid #3399ff;
        height:20px;
        border-radius:5px
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

body{
  background: #3399ff;
}


.circle{
  position: absolute;
  border-radius: 50%;
  background: white;
  animation: ripple 15s infinite;
  box-shadow: 0px 0px 1px 0px #508fb9;
}

.small{
  width: 200px;
  height: 200px;
  left: -100px;
  bottom: -100px;
}

.medium{
  width: 400px;
  height: 400px;
  left: -200px;
  bottom: -200px;
}

.large{
  width: 600px;
  height: 600px;
  left: -300px;
  bottom: -300px;
}

.xlarge{
  width: 800px;
  height: 800px;
  left: -400px;
  bottom: -400px;
}

.xxlarge{
  width: 1000px;
  height: 1000px;
  left: -500px;
  bottom: -500px;
}

.shade1{
  opacity: 0.2;
}
.shade2{
  opacity: 0.5;
}

.shade3{
  opacity: 0.7;
}

.shade4{
  opacity: 0.8;
}

.shade5{
  opacity: 0.9;
}

@keyframes ripple{
  0%{
    transform: scale(0.8);
  }
  
  50%{
    transform: scale(1.2);
  }
  
  100%{
    transform: scale(0.8);
  }
}

  </style>
</body>
</html>