<?php
include 'config.php';
$page = basename($_SERVER['PHP_SELF']);
switch($page){
    case "single.php":
        if(isset($_GET['id'])){
            $sql_title = "SELECT * FROM post WHERE post_id = {$_GET['id']}";
            $result_title = mysqli_query($conn,$sql_title) or die("Query Failed!!!");
            $row_title = mysqli_fetch_assoc($result_title);
            $page_title = $row_title['title'];
        }else{
            $page_title = "NO post found!!!";
        }
    break;    
    case "author.php":
        if(isset($_GET['aid'])){
            $sql_title = "SELECT * FROM user WHERE user_id = {$_GET['aid']}";
            $result_title = mysqli_query($conn,$sql_title) or die("Query Failed!!!");
            $row_title = mysqli_fetch_assoc($result_title);
            $page_title = "News By ".$row_title['first_name']." ".$row_title['last_name'];
        }else{
            $page_title = "NO post found!!!";
        }
    break;
    case "category.php":
        if(isset($_GET['cid'])){
            $sql_title = "SELECT * FROM category WHERE category_id = {$_GET['cid']}";
            $result_title = mysqli_query($conn,$sql_title) or die("Query Failed!!!");
            $row_title = mysqli_fetch_assoc($result_title);
            $page_title = $row_title['category_name']."News";
        }else{
            $page_title = "NO post found!!!";
        }
    break;
    case "search.php":
        if(isset($_GET['search'])){
            $page_title = $_GET['search'];
        }else{
            $page_title = "NO post found!!!";
        }
    break;
    default :
    $page_title = "News Site";
    break;


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $page_title; ?></title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- HEADER -->
<div id="header">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- LOGO -->
            <div class=" col-md-offset-4 col-md-4">
            <?php
                    include 'config.php';

                    $sql = "SELECT * FROM settings";
                    
                    $result = mysqli_query($conn,$sql) or die("Query Faild!!");
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result))
                        {
                            if($row['logo'] == ""){
                                echo '<a href="index.php"><h1>'.$row['websitename'].'</h1></a>';
                            }else{
                                echo '<a href="index.php" id="logo"><img src="admin/images/'.$row['logo'].'"></a>';
                            }
                
                        }
                    }
                ?>
            </div>
            <div>
            <a href="./userRegistration.php"><button class="btn bg-primary">Login/SignUp</button></a>
            </div>
            <!-- /LOGO -->
        </div>
       
    </div>
</div>
<!-- /HEADER -->
<!-- Menu Bar -->
<div id="menu-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                include 'config.php';
                if(isset($_GET['cid'])){
                    $cat_id = $_GET['cid'];
                }

                $sql = "SELECT * FROM category WHERE post > 0";
                $result = mysqli_query($conn,$sql) or die("Querry is not working!!!");
                if(mysqli_num_rows($result)>0){
                ?>
                <ul class='menu'>
                <li  ><a href='<?php echo $hostname; ?>'>Home</a></li>
                    <?php
                    while($row = mysqli_fetch_assoc($result)){
                        $active = "";
                        if(isset($_GET['cid'])){
                            if($row['category_id'] == $cat_id){
                                $active = "active";
                            }else{
                                $active = "";
                            }
                        }
                        
                        echo "<li  ><a class = '{$active}' href='category.php?cid={$row['category_id']}'>{$row['category_name']}</a></li>";
                    }
                    
                    ?>
                    
                </ul>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<!-- /Menu Bar -->

<div class="Slider">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="./images/modiji.jpg" style="width:100%">
  <div class="text">India consistently trying to minimise dependence on foreign countries in health sector: PM Modi <br>
  <a class='read-more bg-primary' href='single.php?id=81'>read more</a>
  </div>
  

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="./images/pexels-pixabay-160846.jpg" style="width:100%">
  <div class="text">How to make Holi safer for your pets: A quick guide.<br>
  <a class='read-more bg-primary' href='single.php?id=73'>read more</a>
  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="./images/pexels-pixabay-356040.jpg" style="width:100%">
  <div class="text">Bharat Biotech dispatches first shipments of iNCOVACC across India<br> 
  <a class='read-more bg-primary' href='single.php?id=77'>read more</a>
  </div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>
    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- post-container -->
                    <div class="post-container">
                        <?php
                        include 'config.php';
                        $limit = 3;
                        if(isset($_GET['page'])){
                            $page = $_GET['page']; 
                        }else{
                            $page = 1;
                        }
                        $offset = ($page - 1) * $limit;
                        $sql = "SELECT * FROM post 
                        LEFT JOIN category ON post.category = category.category_id
                        LEFT JOIN user ON post.author = user.user_id
                        ORDER BY post.post_id DESC LIMIT {$offset},{$limit}";
                         $result = mysqli_query($conn,$sql) or die("Query Faild!!");
                         if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result))
                            {
                        ?>
                        <div class="post-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="post-img" href="single.php?id=<?php echo $row['post_id'];?>"><img src="admin/upload/<?php echo $row['post_img'];?>" alt=""/></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="inner-content clearfix">
                                        <h3><a href='single.php?id=<?php echo $row['post_id'];?>'><?php echo $row['title'];?></a></h3>
                                        <div class="post-information">
                                            <span>
                                                <i class="fa fa-tags" aria-hidden="true"></i>
                                                <a href='category.php?cid=<?php echo $row['category'];?>'><?php echo $row['category_name'];?></a>
                                            </span>
                                            <span>
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <a href='author.php?aid=<?php echo $row['author'];?>'><?php echo $row['username'];?></a>
                                            </span>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <?php echo $row['post_date'];?>
                                            </span>
                                        </div>
                                        <p class="description">
                                        <?php echo substr($row['description'],0,130)."....";?>
                                        </p>
                                        <a class='read-more pull-right' href='single.php?id=<?php echo $row['post_id']?>'>read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        }else{
                            echo "<h2>No Record Found</h2>";
                        }
                        ?>
                         <?php
                        $sql1 = "SELECT * FROM post";
                        $result1 = mysqli_query($conn,$sql1) or die("Query Failed!!!");
                        if(mysqli_num_rows($result1)>0){
                            $total_records = mysqli_num_rows($result1);
                            $total_page = ceil($total_records/$limit);
                            echo " <ul class='pagination admin-pagination'>";
                            if($page > 1){
                                echo '<li><a href = "index.php?page='.($page - 1).'">prev</a></li>';
                            }
                            
                            for($i = 1;$i<=$total_page;$i++){
                                if($i == $page){
                                    $active = "active";
                                }else{
                                    $active = "";
                                }
                                echo "<li class='$active'><a href = 'index.php?page={$i}'>{$i}</a></li>";   
                            }
                            if($total_page > $page)
                            {
                                echo '<li><a href = "index.php?page='.($page + 1).'">next</a></li>'; 
                            }
                            echo "</ul>";
                        }
                  ?>
                    </div><!-- /post-container -->
                </div>
                <?php include 'sidebar.php'; ?>
            </div>
        </div>
    </div>
    <style>
        * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
    </style>

    
<script>

(function(d, m){
        var kommunicateSettings = 
            {"appId":"23bc85afe6c6514e2f3a10cd6fabd01fe","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
<?php include 'footer.php'; ?>
