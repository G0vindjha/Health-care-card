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
            <lord-icon
                src="https://cdn.lordicon.com/bhfjfgqz.json"
                trigger="hover"
                style="width:100px;height:100px;margin-left:40%;">
            </lord-icon>
        </div>
        <div>
        <?php
        include "config.php";
        $logduname=$_GET['logduname'];
          $query = " select * from doctordetails where doctoruname= '{$logduname}'";
          $result = mysqli_query($conn, $query) or die("Query Faild!!");
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div>
                <h2 style="text-align:center;margin-top:-5px"><?php echo $row['doctorfname']." ".$row['doctorlname']; ?></h2>
            </div>
            <div>
                <div style="margin-left:100px;">
                    <h3 class="detail"><?php echo $row['specilize']; ?></h3>
                    <h3 class="detail"><?php echo $row['doctorvarificationno']; ?></h3>
                </div>
            </div>
            <?php
        }
      }
      
      ?>    
            <div>
                <div style="width:100%; margin-top:10px;">
                    <form style="display:inline-block;width:48%;" action="https://wa.me/9106739843">
                        <input style="width:100%; margin:10px;" type="submit" class="btn" value="Chat on whatsapp">
                    </form>
                    <form style="display:inline-block; width:48%;" action="https://calendar.google.com/calendar/u/0/r/eventedit?vcon=meet&dates=now&hl=en&pli=1">
                        <input style="width:100%; margin:10px;" type="submit" class="btn" value="Video Chat on Meet">
                    </form>
                </div>
            </div>
        </div>
        <br>
    </div>

      

  <style>
    .linkDecoration{
      text-decoration:none;
      color:black;
    }
    
.detail{
    display:inline-block;
    margin-left:12%;
    margin-right:12%;
    margin-top:0px;
    
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