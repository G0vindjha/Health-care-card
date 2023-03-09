<?php include "header.php";
include "config.php";

$loguname = $_GET['loguname'];
$logfname = $_GET['logfname'];
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
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h2 class="mb-0 pb-3 mt-2"><span> Upload Image </span></h2>
            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
            <!-- <label for="reg-log"></label> -->
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <h4 class="mb-4 pb-3">Image</h4>
                      <div class="form-group">
                        <form method="POST" action="./injuriesandallergies.php?logfname=<?php echo $logfname ?>&loguname=<?php echo $loguname ?>" enctype="multipart/form-data">
                          <div style="height: 200px; overflow-y: scroll;">
                            <div class="form-group mt-2">
                              <input class="form-style" type="file" name="uploadfile" value="" />
                            </div>


                            <div class="form-group mt-2">
                              <?php
                              include 'config.php';
                              $loguname = $_GET['loguname'];
                              $query = " select * from userimage  where username = '{$loguname}'";
                              $result = mysqli_query($conn, $query) or die("Query Faild!!");
                              if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                              ?>
                                  <img style="height: 10%;width:90%;" src="./upload/<?php echo $row['filename']; ?>">
                              <?php
                                }
                              } else {
                                echo "<h3> Uploaded Image will show up here !!!! </h3>";
                              }
                              ?>
                            </div>
                          </div>
                          <div class="form-group ">
                            <button class="btn mt-4"><a href="./injuriesandallergies.php?loguname=<?php echo $_GET['loguname'];; ?>">Save</a> </button>
                          </div>

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

      body {
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
        font-size: 15px;
        line-height: 1.7;
        color: black;
        background-color: #3399ff;
        overflow-x: hidden;
      }

      h4 {
        font-weight: 600;
      }

      h6 span {
        padding: 0 20px;
        text-transform: uppercase;
        font-weight: 700;
      }

      .section {
        position: relative;
        width: 100%;
        display: block;
      }

      .full-height {
        min-height: 100vh;
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
        position: absolute;
        top: 0;
        left: 0;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
        transition: all 600ms ease-out;
      }

      .card-front,
      .card-back {
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

      .center-wrap {
        position: absolute;
        width: 100%;
        padding: 0 35px;
        top: 50%;
        left: 0;
        transform: translate3d(0, -50%, 35px) perspective(100px);
        z-index: 20;
        display: block;
      }


      .form-group {
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
        box-shadow: 0 4px 8px 0 rgba(21, 21, 21, .2);
      }

      .form-style:focus,
      .form-style:active {
        border: none;
        outline: none;
        box-shadow: 0 4px 8px 0 rgba(21, 21, 21, .2);
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

      .form-group input:-ms-input-placeholder {
        color: white;
        opacity: 0.7;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
      }

      .form-group input::-moz-placeholder {
        color: white;
        opacity: 0.7;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
      }

      .form-group input:-moz-placeholder {
        color: white;
        opacity: 0.7;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
      }

      .form-group input::-webkit-input-placeholder {
        color: white;
        opacity: 0.7;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
      }

      .form-group input:focus:-ms-input-placeholder {
        opacity: 0;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
      }

      .form-group input:focus::-moz-placeholder {
        opacity: 0;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
      }

      .form-group input:focus:-moz-placeholder {
        opacity: 0;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
      }

      .form-group input:focus::-webkit-input-placeholder {
        opacity: 0;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
      }

      .btn {
        border-radius: 4px;
        height: 44px;
        font-size: 13px;
        font-weight: 600;
        text-transform: uppercase;
        -webkit-transition: all 200ms linear;
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
        box-shadow: 0 8px 24px 0 rgba(255, 235, 167, .2);
      }

      .btn:active,
      .btn:focus {
        background-color: #3399ff;
        color: white;
        box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2);
      }

      .btn:hover {
        background-color: white;
        color: #3399ff;
        box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2);
      }
    </style>
</body>

</html>