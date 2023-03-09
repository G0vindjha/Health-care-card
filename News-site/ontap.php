<?php
include 'config.php';
$loguname = $_GET['loguname'];
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
            <?php
                        
		                    $query = " select * from userimage  where username = '{$loguname}'";
		                    $result = mysqli_query($conn, $query) or die("Query Faild!!"); 
                         if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result))
                            {
                        ?>
			                <center><img alt="Avatar" class="avatar" src="./upload/<?php echo $row['filename']; ?>"></center>
		                <?php
		                    }
                      }?>
        </div>
        <?php
        $query = " select firstname, lastname,umnumber from usercontactdetails  where username = '{$loguname}'";
        $result = mysqli_query($conn, $query) or die("Query Faild!!"); 
         if(mysqli_num_rows($result)>0){
            while($row1 = mysqli_fetch_assoc($result))
            {
        ?>
        
        <div class="child" style="margin-left:3%" >
            <h3><label for="Name">Name : <label for="value"></label><?php echo $row1['firstname'].' '.$row1['lastname']; ?></label></h3>
        </div>
        <div class="child" style="margin-left:16%">
            <h2 ><label for="Contact">Contact : <label for="value"><?php echo $row1['umnumber'] ?></label></label></h2>
        </div>
        <div>
            <center><button class="btn"><a class="linkDecoration" href="./userRegistration.php?loguname=<?php echo $loguname?>">Login</a></button></center>
            <br><br>
        </div>
        <div class="parent" style="display:flex;flex-direction:row;justify-content:center">
            <div class="child" style="margin-left:4%"><button class="btn"><a class="linkDecoration" href="./userRegistration.php?loguname=<?php echo $loguname?>">Add Precription</a></button></div>
            <div class="child" style="margin-left:5%"><button class="btn"><a class="linkDecoration" href="./viewPrescription.php?loguname=<?php echo $loguname?>">View Precription</a></button></div>
            <div class="child" style="margin-left:5%"><button class="btn"><a class="linkDecoration" href="./addlabreport.php?loguname=<?php echo $loguname?>">Add Lab Report</a></button></div>
            <div class="child" style="margin-left:5%"><button class="btn"><a class="linkDecoration" href="./alart.php">Send </br> Alart</a></button></div>
        </div>
        <?php
            }
          }
        ?>
        <br><br>
    </div>

      

  <style>
    .avatar {
  vertical-align: middle;
  width: 180px;
  height: 180px;
  border-radius: 50%;
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
  display: inline-block;
  
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