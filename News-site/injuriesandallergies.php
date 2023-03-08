<?php
include 'config.php';
$loguname = $_GET['loguname'];

if(isset($_POST['save']))
{
    $arr = array(); 
    $arr1 = array(); 
    $arr2 = array(); 
    $count = mysqli_real_escape_string($conn,$_POST['Allergiesclickcount']);
    $count1 = mysqli_real_escape_string($conn,$_POST['Injuriesclickcount']);
    $count2 = mysqli_real_escape_string($conn,$_POST['Infectionsclickcount']);
    for($i=1;$i<=$count;$i++)
    {
        $a = mysqli_real_escape_string($conn,$_POST[$i]) ;
        array_push($arr,$a);
    }
    for($j=51;$j<=$count1;$j++)
    {
        $b = mysqli_real_escape_string($conn,$_POST[$j]) ;
        array_push($arr1,$b);
    }
    for($k=101;$k<=$count2;$k++)
    {
        $c = mysqli_real_escape_string($conn,$_POST[$k]) ;
        array_push($arr2,$c);
    }
    $logallergies = implode(",",$arr);
    $loginjuries = implode(",",$arr1);
    $loginfections = implode(",",$arr2);
    $sql = "INSERT INTO userallergeticinformation (firstname, username, allergies, injuries, infections) VALUES ('{$logfname}','{$loguname}','{$logallergies}','{$loginjuries}','{$loginfections}')";
      if(mysqli_query($conn,$sql)){
            header("Location:{$hostname}/useremployerdetails.php?loguname={$loguname}");
        }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Other Details</title>
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
        <h1 style="text-align:center;">Allergies, Injuries & Infections</h1>
        </div>
        
<div id="Allergies" style="margin-top:-20px;">

            <h2 style="text-align:center;background:#008CBA ">Allergies</h2>
            <input type="hidden" id="countAllergies" name="Allergiesclickcount" value="1">
            <div class="Allergies1" style="margin-top:-20px;">
            <label for="Allergies" style="display:inline-block;"><h3>Allergies Name : </h3></label>
            <input type="text" class="input" name="1" style="display:inline-block;">
            <label for="Allergies"><h3 class="btn" style="display:inline-block; text-align:center;" onclick="addAllergies()">Add</h3></label>
            </div>
        </div>
        <div id="Injuries" style="margin-top:-20px;">

            <h2 style="text-align:center;background:#008CBA ">Injuries</h2>
            <input type="hidden" id="countInjuries" name="Injuriesclickcount" value="51">
            <div class="Injuries1" style="margin-top:-20px;">
            <label for="Injuries" style="display:inline-block;"><h3>Injuries Name : </h3></label>
            <input type="text" class="input" name="51" style="display:inline-block;">
            <label for="Injuries"><h3 class="btn" style="display:inline-block; text-align:center;" onclick="addInjuries()">Add</h3></label>
            </div>
        </div>
        <div id="Infections" style="margin-top:-20px;">

            <h2 style="text-align:center;background:#008CBA ">Infections</h2>
            <input type="hidden" id="countInfections" name="Infectionsclickcount" value="101">
            <div class="Infections1" style="margin-top:-20px;">
            <label for="Infections" style="display:inline-block;"><h3>Infections Name : </h3></label>
            <input type="text" class="input" name="101" style="display:inline-block;">
            <label for=""><h3 class="btn" style="display:inline-block; text-align:center;" onclick="addInfections()">Add</h3></label>
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
    var z=101;
    
    const container = document.getElementById('Allergies');
    const container1 = document.getElementById('Injuries');
    const container2 = document.getElementById('Infections');
function addAllergies(){
    let div = document.createElement('div');
    div.setAttribute('class','Allergies1');
    div.setAttribute('style','margin-top:-20px;')
    container.appendChild(div);
    let h3 = document.createElement('h3');
    h3.setAttribute('for', 'Allergies');
    h3.setAttribute('style', 'display:inline-block;');
    h3.innerHTML = "Allergies Name :";
    div.appendChild(h3);
    let input = document.createElement('input');
    input.style.display = "inline-block";
    input.className = "input";
    input.name = x+1;
    div.appendChild(input);
    x=x+1;
    document.getElementById('countAllergies').value = x;
}
function addInjuries(){
    let div1 = document.createElement('div');
    div1.setAttribute('class','Injuries1');
    div1.setAttribute('style','margin-top:-20px;')
    container1.appendChild(div1);
    let h3 = document.createElement('h3');
    h3.setAttribute('for', 'Injuries');
    h3.setAttribute('style', 'display:inline-block;');
    h3.innerHTML = "Injuries Name :";
    div1.appendChild(h3);
    let input = document.createElement('input');
    input.style.display = "inline-block";
    input.className = "input";
    input.name = y+1;
    div1.appendChild(input);
    y=y+1;
    document.getElementById('countInjuries').value = y;
}
function addInfections(){
    let div2 = document.createElement('div');
    div2.setAttribute('class','Infections1');
    div2.setAttribute('style','margin-top:-20px;')
    container2.appendChild(div2);
    let h3 = document.createElement('h3');
    h3.setAttribute('for', 'Infections');
    h3.setAttribute('style', 'display:inline-block;');
    h3.innerHTML = "Infections Name :";
    div2.appendChild(h3);
    let input = document.createElement('input');
    input.style.display = "inline-block";
    input.className = "input";
    input.name = z+1;
    div2.appendChild(input);
    z=z+1;
    document.getElementById('countInfections').value = z;
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