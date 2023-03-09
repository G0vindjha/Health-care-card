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
    
      <?php
      $query = " select * from doctordetails";
      $result = mysqli_query($conn, $query) or die("Query Faild!!");
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
         <div class="column">
          <div class="card">
          <img class="userimg" src="./upload/<?php echo $row['img'];?>" style="width:100%;height:275px">
            <div class="container">
              <h2><?php echo $row['doctorfname']." ".$row['doctorlname']; ?></h2>
              <p class="title">Doctor</p>
              <p><?php echo $row['specilize']; ?></p>
              <p><?php echo $row['email']; ?></p>
              <p><button class="button"><a style="text-decoration:none;color:black;" href="./createAppointment.php?logduname=<?php echo $row['doctoruname'];?>">Contact</a></button></p>
            </div>
          </div>
          </div>
      <?php
        }
      }
      ?>    
  </div>
  <style>
    .row {
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

    .container::after,
    .row::after {
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