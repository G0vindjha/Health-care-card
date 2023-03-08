<?php include 'header.php'; ?>
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
