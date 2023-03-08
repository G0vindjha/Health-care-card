<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor List</title>
</head>
<body>
<?php
    include 'header.php';    
?>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="./images/Sam.jpeg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Govind Jha</h2>
        <p class="title">Doctor</p>
        <p>Doctor's Detail</p>
        <p>jhag2491@gmail.com</p>
        <p><button class="button"><a style="text-decoration:none;color:black;" href="./createAppointment.php">Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="./images/Sam.jpeg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Govind Jha</h2>
        <p class="title">Doctor</p>
        <p>Doctor's Detail</p>
        <p>jhag2491@gmail.com</p>
        <p><button class="button"><a style="text-decoration:none;color:black;" href="./createAppointment.php">Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="./images/Sam.jpeg" alt="John" style="width:100%">
      <div class="container">
        <h2>Govind Jha</h2>
        <p class="title">Doctor</p>
        <p>Doctor's Detail</p>
        <p>jhag2491@gmail.com</p>
        <p><button class="button"><a style="text-decoration:none;color:black;" href="./createAppointment.php">Contact</a></button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/Sam.jpeg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Govind Jha</h2>
        <p class="title">Doctor</p>
        <p>Doctor's Detail</p>
        <p>jhag2491@gmail.com</p>
        <p><button class="button"><a style="text-decoration:none;color:black;" href="./createAppointment.php">Contact</a></button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/Sam.jpeg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Govind Jha</h2>
        <p class="title">Doctor</p>
        <p>Doctor's Detail</p>
        <p>jhag2491@gmail.com</p>
        <p><button class="button"><a style="text-decoration:none;color:black;" href="./createAppointment.php">Contact</a></button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/Sam.jpeg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Govind Jha</h2>
        <p class="title">Doctor</p>
        <p>Doctor's Detail</p>
        <p>jhag2491@gmail.com</p>
        <p><button class="button"><a style="text-decoration:none;color:black;" href="./createAppointment.php">Contact</a></button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/Sam.jpeg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Govind Jha</h2>
        <p class="title">Doctor</p>
        <p>Doctor's Detail</p>
        <p>jhag2491@gmail.com</p>
        <p><button class="button"><a style="text-decoration:none;color:black;" href="./createAppointment.php">Contact</a></button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/Sam.jpeg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Govind Jha</h2>
        <p class="title">Doctor</p>
        <p>Doctor's Detail</p>
        <p>jhag2491@gmail.com</p>
        <p><button class="button"><a style="text-decoration:none;color:black;" href="./createAppointment.php">Contact</a></button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/Sam.jpeg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Govind Jha</h2>
        <p class="title">Doctor</p>
        <p>Doctor's Detail</p>
        <p>jhag2491@gmail.com</p>
        <p><button class="button"><a style="text-decoration:none;color:black;" href="./createAppointment.php">Contact</a></button></p>
      </div>
    </div>
  </div>
</div>
<style>

.row{
    margin-top: 20px;
    width: 100%;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: black;
  background-color: #3399ff;
  text-align: center;
  cursor: pointer;
  width: 27%;
  border-radius: 5px;
  border: 2px solid #008CBA;
}

.button:hover {
  background-color: white;
}
</style>
</body>
</html>