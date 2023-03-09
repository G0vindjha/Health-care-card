<?php
include 'config.php';
$loguname = $_GET['loguname'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Name</title>
</head>
<body>
    <?php
    include 'header.php';
    ?>
    <div>
    <center><div class="avt">
    <?php
		                    $query = " select * from userimage  where username = '{$loguname}'";
		                    $result = mysqli_query($conn, $query) or die("Query Faild!!"); 
                         if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result))
                            {
                        ?>
			                <img class="userimg" src="./upload/<?php echo $row['filename']; ?>">
		                <?php
		                    }
                      }
                      ?>
    </div></center>
    
    <div>
    <?php
        $query1 = " select patientid, firstname, lastname, umnumber from usercontactdetails  where username = '{$loguname}'";
        $result1 = mysqli_query($conn, $query1) or die("Query Faild!!"); 
         if(mysqli_num_rows($result1)>0){
            while($row1 = mysqli_fetch_assoc($result1))
            {
        ?>
        <div>
        <div  style="margin-top:10px;padding:10px width: 500px;height: 35px;border-radius: 15px 50px;background: #3399ff;">
        <h3 class="child" style="margin-left:15px;">Patient Id:<?php echo $row1['patientid'] ?></h3>
        <h3 class="child" style="margin-left:25% ;"><?php echo $row1['firstname'].' '.$row1['lastname']; ?></h3>
        <h3 class="child" style="margin-left:22% ;">Contact:<?php echo $row1['umnumber'] ?></h3>
        </div>  
        </div>
        <?php
            }
          }
        ?>
    </div>
    
    <div class="float-container">
<div class="float-child">
    <div><h2 style="text-align:center; margin-top:10px;padding:10px width: 500px;height:35px;border-radius: 15px 50px;background: #3399ff;">Basic Information</h2></div>
    <div style= "height: 500px; overflow-y: scroll;">
    <?php
        $query2 = " select * from userbasicinformation where username = '{$loguname}'";
        $result2 = mysqli_query($conn, $query2) or die("Query Faild!!"); 
         if(mysqli_num_rows($result2)>0){
            while($row2 = mysqli_fetch_assoc($result2))
            {
        ?>
        <h3>Name : <?php echo $row2['firstname'].' '.$row2['lastname']; ?></h3>
        <h3>Date Of Birth :<?php echo $row2['DOB'];?></h3>
        <h3>Father's Name : <?php echo $row2['fathername'];?></h3>
        <h3>Mother's Name : <?php echo $row2['mothername'];?></h3>
        <h3>Gender: <?php echo $row2['gender'];?></h3>
        <h3>marital Status : <?php echo $row2['maritalstatus'];?></h3>
        <h3>Nationality : <?php echo $row2['nationality'];?></h3>
        <h3>Height : <?php echo $row2['height'];?></h3>
        <h3>Weight:<?php echo $row2['weight'];?>KG</h3>
        <h3>Blood Group : <?php echo $row2['bloodgroup'];?></h3>
        <h3>Diabetic : <?php echo $row2['diabetic'];?></h3>
        <h3>Metal in Body : <?php echo $row2['metalinbody'];?></h3>
        <?php
            }
          }
        ?>
    </div>
  </div>
  
  <div class="float-child">
    <div><h2 style="text-align:center;margin-top:10px;padding:10px width: 500px;height: 35px;border-radius: 15px 50px;background: #3399ff;">Contact Details</h2></div>
    <div style= "height: 500px; overflow-y: scroll;">
    <?php
        $query3 = " select * from usercontactdetails where username = '{$loguname}'";
        $result3 = mysqli_query($conn, $query3) or die("Query Faild!!"); 
         if(mysqli_num_rows($result3)>0){
            while($row3 = mysqli_fetch_assoc($result3))
            {
        ?>
    <h3>Patient Contact Number : <?php echo $row3['umnumber'];?></h3>
    <h3>Patient Email : <?php echo $row3['uemail'];?></h3>
    <h3>Father's Contact Number : <?php echo $row3['ufmnumber'];?></h3>
    <h3>Mother's Contact Number : <?php echo $row3['ummnumber'];?></h3>
    <h3>Emergency Contact Number : <?php echo $row3['uemnumber'];?></h3>
    <h3 style="text-align:center;">Recent Address</h3>
    <h3>Room/col & Society Name : <?php echo $row3['urroomsociety'];?> </h3>
    <h3>LandMark : <?php echo $row3['urlandmark'];?></h3>
    <h3>City : <?php echo $row3['urcity'];?></h3>
    <h3>State : <?php echo $row3['urstate'];?></h3>
    <h3>Pincode : <?php echo $row3['urpincode'];?></h3>
    <h3 style="text-align:center;">Parmanent Address</h3>
    <h3>Room/col & Society Name : <?php echo $row3['uproomsociety'];?> </h3>
    <h3>LandMark : <?php echo $row3['uplandmark'];?></h3>
    <h3>City : <?php echo $row3['upcity'];?></h3>
    <h3>State : <?php echo $row3['upstate'];?></h3>
    <h3>Pincode : <?php echo $row3['uppincode'];?></h3>
    <?php
            }
          }
        ?>
    </div>
  </div>
  <div class="float-child">
    <div><h2 style="text-align:center;margin-top:10px;padding:10px width: 500px;height: 35px;border-radius: 15px 50px;background: #3399ff;">Insurance Details</h2></div>
    <div style= "height: 300px; overflow-y: scroll;">
    <?php
        $query4 = " select * from userinsurancedetail where username = '{$loguname}'";
        $result4 = mysqli_query($conn, $query4) or die("Query Faild!!"); 
         if(mysqli_num_rows($result4)>0){
            while($row4 = mysqli_fetch_assoc($result4))
            {
        ?>
        <h3> Insurance Company : <?php echo $row4['companyname'];?> </h3>    
        <h3> Membership No. : <?php echo $row4['membershipnum'];?></h3>    
        <h3> Policy Holder : <?php echo $row4['phname'];?></h3>    
        <h3> Policy Holder DOB : <?php echo $row4['phdob'];?></h3>    
        <h3> Contact : <?php echo $row4['phcontact'];?></h3>
        <h3> Relation with policy holder : <?php echo $row4['phrelation'];?></h3>
        <h3> Insurance company cont: : <?php echo $row4['companynum'];?></h3>
        <?php
            }
          }
        ?>      
    </div>
  </div>
  <div class="float-child">
    <div><h2 style="text-align:center;margin-top:10px;padding:10px width: 500px;height: 35px;border-radius: 15px 50px;background: #3399ff;">Employer Details</h2></div>
    <div style= "height: 300px; overflow-y: scroll;">
    <?php
        $query6 = " select * from useremployerdetails where username = '{$loguname}'";
        $result6 = mysqli_query($conn, $query6) or die("Query Faild!!"); 
         if(mysqli_num_rows($result6)>0){
            while($row6 = mysqli_fetch_assoc($result6))
            {
                if($row6['profession'] === "No")
                {

        ?>
        <h3> Employer Name : <?php echo $row6['employername'];?> </h3>    
        <h3> Employement Number : <?php echo $row6['employementno'];?> </h3>    
        <h3> Employer contact No. : <?php echo $row6['employercontact'];?> </h3>    
        <h3> Employer Email : <?php echo $row6['employeremail'];?> </h3>    
        <h3> Employer Address : <?php echo $row6['employeraddress'];?> </h3>       
        <?php
                }
                else{
                    ?>
                    <h3>I am Self Employed</h3>
                    <h3> Profession : <?php echo $row6['profession'];?> </h3>
                    <?php 
                }
            }
          }
        ?>      
    </div>
  </div>
  <div class="float-child">
    <div><h2 style="text-align:center;margin-top:10px;padding:10px width: 500px;height: 35px;border-radius: 15px 50px;background: #3399ff;">Allergetic Information</h2></div>
    <div style= "height: 200px; overflow-y: scroll;">
    <?php
        $query5 = " select * from userallergeticinformation where username = '{$loguname}'";
        $result5 = mysqli_query($conn, $query5) or die("Query Faild!!"); 
         if(mysqli_num_rows($result5)>0){
            while($row5 = mysqli_fetch_assoc($result5))
            {
                $arr1 = explode(",", $row5['allergies']);
                for($i=0;$i<sizeof($arr1);$i++)
                {
        ?>
        <h3><?php echo $arr1[$i];?></h3>    
        <?php
                }
            }
          }
        ?>         
    </div>
  </div>
  <div class="float-child">
    <div><h2 style="text-align:center;margin-top:10px;padding:10px width: 500px;height: 35px;border-radius: 15px 50px;background: #3399ff;">Injuries & Infection Information</h2></div>
    <div style= "height: 200px; overflow-y: scroll;">
    <h3 style="text-align:center;background-color:cornflowerblue;border-radius:8px;">Injuries</h3>
    <?php
        $query5 = " select * from userallergeticinformation where username = '{$loguname}'";
        $result5 = mysqli_query($conn, $query5) or die("Query Faild!!"); 
         if(mysqli_num_rows($result5)>0){
            while($row5 = mysqli_fetch_assoc($result5))
            {
                $arr1 = explode(",", $row5['injuries']);
                for($i=0;$i<sizeof($arr1);$i++)
                {
        ?>
        <h3><?php echo $arr1[$i];?></h3>    
        <?php
                }
            }
          }
        ?>      
    <h3 style="text-align:center;background-color:cornflowerblue;border-radius:8px;">Infections</h3>
    <?php
        $query5 = " select * from userallergeticinformation where username = '{$loguname}'";
        $result5 = mysqli_query($conn, $query5) or die("Query Faild!!"); 
         if(mysqli_num_rows($result5)>0){
            while($row5 = mysqli_fetch_assoc($result5))
            {
                $arr1 = explode(",", $row5['infections']);
                for($i=0;$i<sizeof($arr1);$i++)
                {
        ?>
        <h3><?php echo $arr1[$i];?></h3>    
        <?php
                }
            }
          }
        ?>              
    </div>
  </div>
  
</div>
        
</div>
<div class="prevrecord">
<div class="parent" style="margin-top:1240px;width:100%;height: 60px; border-radius: 15px 50px;background:#3399ff">
<h2 style="display:inline-block;margin:15px; ">Patient's Previous Health Records</h2>
<form action="search.php" method="GET" style="display:inline-block; background-color:#3399ff;height:50%;width:50%;padding-top:10px;padding-left:15%;margin-left:10%">
    <input style="width:70%;height:30px; border-radius:5px; margin-bottom:50px; " type="text">
    <button type="submit" style="border-radius:5px;background-color: #3399ff;  border: 2px solid #3399ff;"><h4>Search</h4></button>
</form>
</div> 
    <div style= "height: 300px; overflow-y: scroll;">
    <div class="float-container-forprevhrecord">
    <?php
        $query7 = " select * from prescriptionrecord where patientuname = '{$loguname}'";
        $result7 = mysqli_query($conn, $query7) or die("Query Faild!!"); 
         if(mysqli_num_rows($result7)>0){
            while($row7 = mysqli_fetch_assoc($result7))
            {
        ?>
        <div class="float-child-forprevhrecord">
            <h2 class="illdiv"><?php echo $row7['diseasename'];?></h2>
            <h3>Date : <?php echo $row7['date'];?></h3>
            <h3>Hospital :<?php echo $row7['hospitalname'];?></h3>
            <h3>Doctor Name : <?php echo $row7['doctorfname']." ".$row7['doctorlname'];?></h3>
            <button class="btn"><a class="linkDecoration" href="./viewsingleprescription.php?loguname=<?php echo $loguname?>&deseasename=<?php echo $row7['diseasename']?>">View Prescribed Medicine</a></button>
        </div>
        <?php
            }
        }
        ?>
    </div>
    </div>

<div class="parent" style="margin-top:40px;width:100%;height: 60px; border-radius: 15px 50px;background:#3399ff">
<h2 style="display:inline-block;margin:15px; ">Patient's Previous Lab Test Records</h2>
<form action="search.php" method="GET" style="display:inline-block; background-color:#3399ff;height:50%;width:50%;padding-top:10px;padding-left:15%;margin-left:10%">
    <input style="width:70%;height:30px; border-radius:5px; margin-bottom:50px; " type="text">
    <button type="submit" style="border-radius:5px;background-color: #3399ff;  border: 2px solid #3399ff;"><h4>Search</h4></button>
</form>
</div> 
<div style= "height: 300px; overflow-y: scroll;">
    <div class="float-container-forprevhrecord">
    <?php
        $query7 = " select * from userlabrecords where patientuname = '{$loguname}'";
        $result7 = mysqli_query($conn, $query7) or die("Query Faild!!"); 
         if(mysqli_num_rows($result7)>0){
            while($row7 = mysqli_fetch_assoc($result7))
            {
        ?>
        <div class="float-child-forprevhrecord">
            <h2 class="illdiv"><?php echo $row7['testname'];?> Test</h2>
            <h3>Date : <?php echo $row7['date'];?></h3>
            <h3>Hospital : <?php echo $row7['hospitalname'];?></h3>
            <h3>Doctor : <?php echo $row7['doctorname'];?></h3>
            <button class="btn"><a class="linkDecoration" href="./viewsinglelabreport.php">View Report</a></button>
        </div>
        <?php
            }
        }
        ?>
    
    </div>
    </div>

</div>


<style>
    .parent{

    }
    .linkDecoration{
      text-decoration:none;
      color:black;
    }
  .btn {
  width:100%;
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
.illdiv{
    text-align:center;
    margin-top:10px;
    padding:10px width: 500px;
    height: 35px;
    border-radius: 15px 50px;
    background: #3399ff;
}
.float-container-forprevhrecord {
    padding: 20px;
}

.float-child-forprevhrecord {
    width: 24%;
    float: left;
    padding: 5px;
    margin-left: 10px;
    
}          

.float-container {
    padding: 20px;
}

.float-child {
    width: 50%;
    float: left;
    padding: 5px;
    
    
}  
        .child{
            display: inline;
        }
        .avt{
            height: 250px;
            width: 300px;
            margin-top: 10px;
        }
        .userimg{
            border:5px solid #3399ff;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            
        }
        .inline{
            border-radius: 15px 50px;
            background: #3399ff;
            padding: 20px;
            width: 450px;
            height: 300px;
            margin-left: 10px;
        }
    </style>
</body>
</html>