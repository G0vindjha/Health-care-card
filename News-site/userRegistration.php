<?php
include "config.php";


if(isset($_POST['login']))
{
  $loguname = $_GET['loguname'];

    if(empty($_POST['username'] || $_POST['password'])){
        echo '<div class= "alart alart-danger">All field must be filled.</div>';
        die();
    }else{
        $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT username FROM userbasicinformation WHERE username = '{$username}' AND password = '{$password}'";
    $result = mysqli_query($conn,$sql) or die("query Failed!!!");

    $sql1 = "SELECT doctoruname FROM doctordetails WHERE doctoruname = '{$username}' AND password = '{$password}'";
    $result1 = mysqli_query($conn,$sql1) or die("query Failed!!!");

    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result)){
            session_start();
            $_SESSION["username"] = $row['username'];
            header("Location:{$hostname}/userinfopage.php?loguname=$username");
        }
    }
    elseif(mysqli_num_rows($result1)>0) { 
      
      while($row = mysqli_fetch_assoc($result1)){
        session_start();
        $_SESSION["username"] = $row['username'];
        header("Location:{$hostname}/addprescription.php?logduname=$username & loguname=$loguname");
      }
            
    }
    else{
      echo '<div class= "alart alart-danger">UserName And Password arew Not Valid.</div>';
  }
    
}
}



if(isset($_POST['save']))
{

session_start();
  $logfname = mysqli_real_escape_string($conn,$_POST['logfname']) ;
  $loglname = mysqli_real_escape_string($conn,$_POST['loglname']);
  $loguname = mysqli_real_escape_string($conn,$_POST['loguname']);
  $logemail = mysqli_real_escape_string($conn,$_POST['logemail']);
  $logpass = mysqli_real_escape_string($conn,$_POST['logpass']);
  $logdob = mysqli_real_escape_string($conn,$_POST['logdob']);
  $logfathername = mysqli_real_escape_string($conn,$_POST['logfathername']);
  $logmothername = mysqli_real_escape_string($conn,$_POST['logmothername']);
  $loggender = mysqli_real_escape_string($conn,$_POST['loggender']);
  $logmaritalstatus = mysqli_real_escape_string($conn,$_POST['logmaritalstatus']);
  $lognationality = mysqli_real_escape_string($conn,$_POST['lognationality']);
  $logheight = mysqli_real_escape_string($conn,$_POST['logheight']);
  $logweight = mysqli_real_escape_string($conn,$_POST['logweight']);
  $logbloodgroup = mysqli_real_escape_string($conn,$_POST['logbloodgroup']);
  $logdiabetic = mysqli_real_escape_string($conn,$_POST['logdiabetic']);
  $logmetalinbody = mysqli_real_escape_string($conn,$_POST['logmetalinbody']);
  $logumnumber = mysqli_real_escape_string($conn,$_POST['logumnumber']);
  $logufmnumber = mysqli_real_escape_string($conn,$_POST['logufmnumber']);
  $logummnumber = mysqli_real_escape_string($conn,$_POST['logummnumber']);
  $logurrs = mysqli_real_escape_string($conn,$_POST['logurrs']);
  $logurlm = mysqli_real_escape_string($conn,$_POST['logurlm']);
  $logurc = mysqli_real_escape_string($conn,$_POST['logurc']);
  $logurs = mysqli_real_escape_string($conn,$_POST['logurs']);
  $logurp = mysqli_real_escape_string($conn,$_POST['logurp']);
  $loguprs = mysqli_real_escape_string($conn,$_POST['loguprs']);
  $loguplm = mysqli_real_escape_string($conn,$_POST['loguplm']);
  $logupc = mysqli_real_escape_string($conn,$_POST['logupc']);
  $logups = mysqli_real_escape_string($conn,$_POST['logups']);
  $logupp = mysqli_real_escape_string($conn,$_POST['logupp']);
  $logepname = mysqli_real_escape_string($conn,$_POST['logepname']);
  $loguemnumber = mysqli_real_escape_string($conn,$_POST['loguemnumber']);
  $logepr = mysqli_real_escape_string($conn,$_POST['logepr']);
  $logicn = mysqli_real_escape_string($conn,$_POST['logicn']);
  $logicmn = mysqli_real_escape_string($conn,$_POST['logicmn']);
  $logiphn = mysqli_real_escape_string($conn,$_POST['logiphn']);
  $logiphdob = mysqli_real_escape_string($conn,$_POST['logiphdob']);
  $logiphc = mysqli_real_escape_string($conn,$_POST['logiphc']);
  $logiphr = mysqli_real_escape_string($conn,$_POST['logiphr']);
  $logicc = mysqli_real_escape_string($conn,$_POST['logicc']);

  $num0 = (rand(1,9));
  $num1 = time();
  $randnum = $num0 . $num1; 

  $sql = "SELECT username FROM userbasicinformation WHERE username = '{$loguname}'";
  $result = mysqli_query($conn,$sql) or die("Query is not working");
  if(mysqli_num_rows($result)>0){
      echo "<p style = 'color:red; text-align:center;margin 10px 0;'>Username is already present</p>";
  }else{
      $sql1 = "INSERT INTO userbasicinformation (firstname, lastname, username, password, email, DOB, fathername, mothername, gender, maritalstatus, nationality, height, weight, bloodgroup, diabetic, metalinbody) VALUES ('{$logfname}','{$loglname}','{$loguname}','{$logpass}','{$logemail}','{$logdob}','{$logfathername}','{$logmothername}','{$loggender}','{$logmaritalstatus}','{$lognationality}','{$logheight}','{$logweight}','{$logbloodgroup}','{$logdiabetic}','{$logmetalinbody}')";
      $sql2 = "INSERT INTO usercontactdetails (firstname, lastname, username, patientid, umnumber, uemail, ufmnumber, ummnumber, uemnumber, uproomsociety, uplandmark, upcity, upstate, uppincode, urroomsociety, urlandmark, urcity, urstate, urpincode, uepname, ueprelation) VALUES ('{$logfname}','{$loglname}','{$loguname}','{$randnum}','{$logumnumber}','{$logemail}','{$logufmnumber}','{$logummnumber}','{$loguemnumber}','{$loguprs}','{$loguplm}','{$logupc}','{$logups}','{$logupp}','{$logurrs}','{$logurlm}','{$logurc}','{$logurs}','{$logurp}','{$logepname}','{$logepr}')";
      $sql3 = "INSERT INTO userinsurancedetail (firstname, lastname, username, companyname, membershipnum, phname, phdob, phcontact, phrelation, companynum) VALUES ('{$logfname}','{$loglname}','{$loguname}','{$logicn}','{$logicmn}','{$logiphn}','{$logiphdob}','{$logiphc}','{$logiphr}','{$logicc}')";
      if(mysqli_query($conn,$sql1)){
        if((mysqli_query($conn,$sql2))){
          if((mysqli_query($conn,$sql3))){
            //if((mysqli_query($conn,$sql4))){
            header("Location:{$hostname}/userimageupload.php?loguname={$loguname}&logfname={$logfname}");
          //}
          }
        }
          
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
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
    <link rel="stylesheet" href="./style.css">
    <title>Login</title>
</head>
<body>
<div class="section">
  <div class="container">
    <div class="row full-height justify-content-center">
    <img src="./images/HCC.jpg" alt="" style="margin-top:10px;">
      <div class="col-12 text-center align-self-center py-5">
        <div class="section pb-5 pt-5 pt-sm-2 text-center">
          <h6 class="mb-0 pb-3 mt-2"><span>Log In </span><span>Sign Up</span></h6>
          <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
          <label for="reg-log"></label>
          <div class="card-3d-wrap mx-auto">
            <div class="card-3d-wrapper">
              <div class="card-front">
                <div class="center-wrap">
                  <div class="section text-center">
                    <h4 class="mb-4 pb-3">Log In</h4>
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method ="post">
                    <div class="form-group">
                      <input type="text" name="username" class="form-style" placeholder="Your username" id="loguname" autocomplete="off">
                      <i class="input-icon uil uil-at"></i>
                    </div>
                    <div class="form-group mt-2">
                      <input type="password" name="password" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                      <i class="input-icon uil uil-lock-alt"></i>
                    </div>
                    <input type="submit" name="login" class="btn mt-4" value="login" />
                    <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
                    </form>
                  </div>
                </div>
              </div>
              <div class="card-back">
                <div class="center-wrap">
                  <div class="section text-center">
                    <h4 class="mb-4 pb-3">Sign Up</h4>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method ="POST" autocomplete="off">
                    <div style= "height: 200px; overflow-y: scroll;">
                    <div class="form-group">
                      <input type="text" name="logfname" class="form-style" placeholder="Your First Name" id="logfname" autocomplete="off">
                      <i class="input-icon uil uil-user"></i>
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="loglname" class="form-style" placeholder="Your Last Name" id="loglname" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="loguname" class="form-style" placeholder="Your User Name" id="loguname" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                      <i class="input-icon uil uil-at"></i>
                    </div>
                    <div class="form-group mt-2">
                      <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                      <i class="input-icon uil uil-lock-alt"></i>
                    </div>
                    <div class="form-group mt-2">
                      <input type="date" name="logdob" class="form-style" placeholder="Your Date of Birth" id="logdob" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="logfathername" class="form-style" placeholder="Your Father's Name" id="logfathername" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="logmothername" class="form-style" placeholder="Your Mother's Name" id="logmothername" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="loggender" class="form-style" placeholder="Gender" id="loggender" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="logmaritalstatus" class="form-style" placeholder="Your Marital Status" id="logmaritalstatus" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="lognationality" class="form-style" placeholder="Your Nationality" id="lognationality" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="float" name="logheight" class="form-style" placeholder="Your Height" id="logheight" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="float" name="logweight" class="form-style" placeholder="Your Weight" id="logweight" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="logbloodgroup" class="form-style" placeholder="Your Blood Group" id="logbloodgroup" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="logdiabetic" class="form-style" placeholder=" Are you diabetic ?" id="logdiabetic" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="logmetalinbody" class="form-style" placeholder="Do you have metal in body ?" id="logmetalinbody" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="logumnumber" class="form-style" placeholder="Your Mobile Number " id="logumnumber" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="logufmnumber" class="form-style" placeholder="Your Father's Mobile number " id="logufmnumber" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="logummnumber" class="form-style" placeholder="Your Mother's mobile number " id="logummnumber" autocomplete="off">
                       
                    </div>
                    
                    <div class="form-group mt-2">
                    <h3 style="text-align:center; margin-top:10px;padding:10px width: 500px;height:35px;border-radius: 15px 50px;background: #3399ff;">Recent Address</h3>
                      <input type="text" name="logurrs" class="form-style" placeholder="Your Recent Room Number & Society's Name" id="logurrs" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="logurlm" class="form-style" placeholder="Landmark" id="logurlm" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="logurc" class="form-style" placeholder="City" id="logurc" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="logurs" class="form-style" placeholder="State" id="logurs" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="number" name="logurp" class="form-style" placeholder="Pincode" id="logurp" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                    <h3 style="text-align:center; margin-top:10px;padding:10px width: 500px;height:35px;border-radius: 15px 50px;background: #3399ff;">Parmanent Address</h3>
                      <input type="text" name="loguprs" class="form-style" placeholder="Your Parmanent Room Number & Society's Name" id="loguprs" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="loguplm" class="form-style" placeholder="Landmark" id="loguplm" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="logupc" class="form-style" placeholder="City" id="logupc" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="logups" class="form-style" placeholder="State" id="logups" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="number" name="logupp" class="form-style" placeholder="Pincode" id="logupp" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                    <h3 style="text-align:center; margin-top:10px;padding:10px width: 500px;height:35px;border-radius: 15px 50px;background: #3399ff;">Emergency Person Detail</h3>
                      <input type="text" name="logepname" class="form-style" placeholder="Your Emergency Parson's Name" id="logepn" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="number" name="loguemnumber" class="form-style" placeholder="Your Emergency Mobile number " id="loguemnumber" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="logepr" class="form-style" placeholder="Your Relation with Emergency Parson" id="logepr" autocomplete="off">
                    </div>
                    <div class="form-group mt-2">
                    <h3 style="text-align:center; margin-top:10px;padding:10px width: 500px;height:35px;border-radius: 15px 50px;background: #3399ff;">Insurance Detail</h3>
                      <input type="text" name="logicn" class="form-style" placeholder="Insurance Company's Name" id="logicn" autocomplete="off">
                    </div>
                    <div class="form-group mt-2">
                      <input type="number" name="logicmn" class="form-style" placeholder="Insurance Membership Number" id="logicmn" autocomplete="off">
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="logiphn" class="form-style" placeholder="Insurance Policy Holder Name" id="logiphn" autocomplete="off">
                    </div>
                    <div class="form-group mt-2">
                      <input type="date" name="logiphdob" class="form-style" placeholder="Insurance Policy Holder DOB" id="logiphdob" autocomplete="off">
                    </div>
                    <div class="form-group mt-2">
                      <input type="number" name="logiphc" class="form-style" placeholder="Insurance policy Holder Number" id="logiphc" autocomplete="off">
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="logiphr" class="form-style" placeholder="Your Relation with Policy Holder" id="logiphr" autocomplete="off">
                    </div>
                    <div class="form-group mt-2">
                      <input type="num" name="logicc" class="form-style" placeholder="Insurance Company Number" id="logicc" autocomplete="off">
                    </div>
                    </div>
                    <input type="submit"  name="save" class="btn mt-4" value="Save" required />
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');

body{
	font-family: 'Poppins', sans-serif;
	font-weight: 300;
	font-size: 15px;
	line-height: 1.7;
	color: black;
	background-color: #3399ff;
	overflow-x: hidden;
}
a {
	cursor: pointer;
  transition: all 200ms linear;
}
a:hover {
	text-decoration: none;
}
.link {
  color:black;
}
.link:hover {
  color: #3399ff;
}
p {
  font-weight: 500;
  font-size: 14px;
  line-height: 1.7;
}
h4 {
  font-weight: 600;
}
h6 span{
  padding: 0 20px;
  text-transform: uppercase;
  font-weight: 700;
}
.section{
  position: relative;
  width: 100%;
  display: block;
}
.full-height{
  min-height: 100vh;
}
[type="checkbox"]:checked,
[type="checkbox"]:not(:checked){
  position: absolute;
  left: -9999px;
}
.checkbox:checked + label,
.checkbox:not(:checked) + label{
  position: relative;
  display: block;
  text-align: center;
  width: 60px;
  height: 16px;
  border-radius: 8px;
  padding: 0;
  margin: 10px auto;
  cursor: pointer;
  background-color: white;
}
.checkbox:checked + label:before,
.checkbox:not(:checked) + label:before{
  position: absolute;
  display: block;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  color: white;
  background-color: #3399ff;
  font-family: 'unicons';
  content: '\eb4f';
  z-index: 20;
  top: -10px;
  left: -10px;
  line-height: 36px;
  text-align: center;
  font-size: 24px;
  transition: all 0.5s ease;
}
.checkbox:checked + label:before {
  transform: translateX(44px) rotate(-270deg);
}


.card-3d-wrap {
  position: relative;
  width: 440px;
  max-width: 100%;
  height: 400px;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  perspective: 800px;
  margin-top: 60px;
}
.card-3d-wrapper {
  width: 100%;
  height: 100%;
  position:absolute;    
  top: 0;
  left: 0;  
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  transition: all 600ms ease-out; 
}
.card-front, .card-back {
  width: 100%;
  height: 100%;
  background-color: white;
  background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg');
  background-position: bottom center;
  background-repeat: no-repeat;
  background-size: 300%;
  position: absolute;
  border-radius: 6px;
  left: 0;
  top: 0;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden;
}
.card-back {
  transform: rotateY(180deg);
}
.checkbox:checked ~ .card-3d-wrap .card-3d-wrapper {
  transform: rotateY(180deg);
}
.center-wrap{
  position: absolute;
  width: 100%;
  padding: 0 35px;
  top: 50%;
  left: 0;
  transform: translate3d(0, -50%, 35px) perspective(100px);
  z-index: 20;
  display: block;
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
  height: 48px;
  width: 100%;
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
.input-icon {
  position: absolute;
  top: 0;
  left: 18px;
  height: 48px;
  font-size: 24px;
  line-height: 48px;
  text-align: left;
  color: black;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}

.form-group input:-ms-input-placeholder  {
  color: white;
  opacity: 0.7;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input::-moz-placeholder  {
  color: white;
  opacity: 0.7;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:-moz-placeholder  {
  color: white;
  opacity: 0.7;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input::-webkit-input-placeholder  {
  color:white;
  opacity: 0.7;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:focus:-ms-input-placeholder  {
  opacity: 0;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:focus::-moz-placeholder  {
  opacity: 0;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:focus:-moz-placeholder  {
  opacity: 0;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:focus::-webkit-input-placeholder  {
  opacity: 0;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}

.btn{  
  border-radius: 4px;
  height: 44px;
  font-size: 13px;
  font-weight: 600;
  text-transform: uppercase;
  -webkit-transition : all 200ms linear;
  transition: all 200ms linear;
  padding: 0 30px;
  letter-spacing: 1px;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  text-align: center;
  border: 2px solid #3399ff;
  background-color: #3399ff;
  color: white;
  box-shadow: 0 8px 24px 0 rgba(255,235,167,.2);
}
.btn:active,
.btn:focus{  
  background-color: #3399ff;
  color: white;
  box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
}
.btn:hover{  
  background-color: white;
  color: #3399ff;
  box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
}




.logo {
	position: absolute;
	top: 30px;
	right: 30px;
	display: block;
	z-index: 100;
	transition: all 250ms linear;
}
.logo img {
	height: 26px;
	width: auto;
	display: block;
}
    </style>
</body>
</html>