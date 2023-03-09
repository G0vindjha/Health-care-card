<?php
include 'config.php';
include 'header.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class='ripple-background'>
        <div class='circle xxlarge shade1'></div>
        <div class='circle xlarge shade2'></div>
        <div class='circle large shade3'></div>
        <div class='circle mediun shade4'></div>
        <div class='circle small shade5'></div>
    </div>
    <div class="parent" style="background-color:white;margin-left:30%;margin-right:30%;margin-top:10%;border-radius:20px;">
        <div>
            <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
            <center><h1>Write Queries</h1></center>
        </div>
        <div class="user-login flex">
            <center><input class="log" type="email" placeholder="Username">
            <img src="./images/user-icon-18dp.svg" alt=""></center>
            
        </div>
        <div>
            <br>
            <center><input class="log" type="password"  placeholder="Password">
            <img src="./images/lock1-black-18dp.svg" alt=""></center>
            
        </div>
        <div>
            <br>
            <center><textarea name="text" id="text" placeholder="Comment...." cols="30" rows="10" class="log"></textarea><img style="visibility:hidden" src="./images/lock1-black-18dp.svg" alt=""></center>
            
        </div>
        <div>
            <br>
            <center><input class="btn" type="submit" value="submit" ></center>
            <br><br>
        </div>

      

  <style>
    .avatar {
  vertical-align: middle;
  width: 150px;
  height: 150px;
  border-radius: 50%;
  margin-top: 10px;
  margin-bottom: 10px;
}
    .log{
        width: 50%;
        height:30px;
        border-radius: 5px;
    }
    .linkDecoration{
      text-decoration:none;
      color:black;
    }
  .btn {
  width:100px;
  height:40px;
  border-radius:5px;
  background-color: #3399ff; 
  color: black; 
  border: 2px solid #008CBA;
}

.btn:hover {
  background-color: white;
  color: #008CBA;
}

    
.child {
  display: inline;
  
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