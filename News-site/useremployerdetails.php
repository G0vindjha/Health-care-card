<?php
include 'config.php';
$loguname = $_GET['loguname'];
if(isset($_POST['save']))
{
    $logemployername=mysqli_real_escape_string($conn,$_POST['employername']);
    $logemployementno=mysqli_real_escape_string($conn,$_POST['employementno']);
    $logemployercontact=mysqli_real_escape_string($conn,$_POST['employercontactno']);
    $logemployeremail=mysqli_real_escape_string($conn,$_POST['employeremail']);
    $logemployeraddress=mysqli_real_escape_string($conn,$_POST['employeraddress']);
    $logprofession=mysqli_real_escape_string($conn,$_POST['profession']);
    if($logprofession == NULL)
    {
        $logprofession = 'No';
    }
    $sql = "INSERT INTO useremployerdetails (firstname, username, employername, employementno, employercontact, employeremail, employeraddress, profession) VALUES ('{$logfname}','{$loguname}','{$logemployername}','{$logemployementno}','{$logemployercontact}','{$logemployeremail}','{$logemployeraddress}','{$logprofession}')";
    if(mysqli_query($conn,$sql)){
            header("Location:{$hostname}/userinfopage.php?loguname={$loguname}");
        }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Details</title>
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
        <h1 style="text-align:center;">Employer Details</h1>
        </div>
        <div>
        <div>
        <label for="employer" style="display:inline-block;"><h3>Employer Name :  </h3></label>
            <input name="employername" type="text" class="input" style="display:inline-block;">
        </div> 
        <div>
        <label for="employer" style="display:inline-block;"><h3>Employment No. :  </h3></label>
            <input name="employementno" type="number" class="input" style="display:inline-block;">
        </div> 
        <div>
        <label for="employer" style="display:inline-block;"><h3>Employer Contact No. :  </h3></label>
            <input name="employercontactno" type="number" class="input" style="display:inline-block;">
        </div> 
        <div>
            <label for="employer" style="display:inline-block;"><h3>Employer Email :  </h3></label>
            <input name="employeremail" type="email" class="input" style="display:inline-block;">
        </div>
        <div>
        <label for="employer" style="display:inline-block;"><h3>Employer Address :  </h3></label>
        <textarea name="employeraddress" cols="30" rows="4" class="input"></textarea>
        </div>
        <div>
            <h3 style="text-align:center; margin-top:10px;padding:10px width: 500px;height:35px;border-radius: 15px 50px;background: #3399ff;">If You Don't Have Employer Then Enter your profesion</h3>
            <label for="employer" style="display:inline-block;"><h3>Your Profession : </h3></label>
            <input name="profession" type="text" class="input" style="display:inline-block;">
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