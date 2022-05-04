<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link href="//fonts.googleapis.com/css?family=Ropa+Sans:400,400i&amp;subset=latin-ext" rel="stylesheet">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/form_css.css">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/slider_style.css"> -->
  <!-- slider files start -->
  <link href="css/thumbs2.css" rel="stylesheet" />
  <link href="css/thumbnail-slider.css" rel="stylesheet" />
  <script src="js/thumbnail-slider.js" type="text/javascript"></script>
    <!-- slider files end -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <meta charset="utf-8">
<style>
    
body, html {
  height: 100%;
  width: 100%;
  overflow-x: hidden; 
  margin: 0;
  /*font: 400 15px/1.8 "Lato", sans-serif;*/
/*  color: #777;*/
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  /*opacity: 0.65;*/
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("images/bkg-img6.jpg");
  min-height: 70%;
}

.bgimg-2 {
  background-image: url("images/bkg-img5.jpg");
  height: 80%;

}
/*
.bgimg-3 {
  background-image: url("img_parallax3.jpg");
  min-height: 400px;
}*/

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;/*
  text-align: center;*/
  text-transform: capitalize;
  font-size: 35px;
  font-weight: bold;
  letter-spacing: 1.6px;
  color:  #fff;
}
.caption_2{
  top:6%; 
  padding: 40px 60px;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}
.division_2 ,.division_3{
  background-color:white;
  text-align:center;
  padding:55px 50px;
  height:820px; 
  text-align: justify;
}
.division_3{
 /* height: 100%; */
 margin-bottom: 50px;
}
/*
h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}*/

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}

  </style>
</head>
<body>
<!-- start header -->
      
  <?php include("header.php"); ?>
<!-- end header -->

<!-- start  division 1 -->

  <div class="bgimg-1">

      <div class="caption">
        <div class="row">
            <div class="rest-name">
            <p><?php 
                include("conn.php");
                $id=$_GET['cid'];
                $sql="select * from category where cid=$id";
                $result=mysqli_query($link,$sql);
                $row=mysqli_fetch_array($result);
                echo $row["r_name"];

            ?></p>
            </div>
        </div>
      </div>
  </div>
<!-- end division 1 -->


<!--start division 2 -->
<div class="division_2">
  <!-- <h3 style="text-align:center;">Parallax Demo</h3> -->
    <div class="col-md-12">
          <div class="col-md-10">
                <div class="col-md-6 info-left">
                    <?php 
                        $sql2="select * from sub_cat where cid=$id && people=2";
                        $result2=mysqli_query($link,$sql2);
                        $row2=mysqli_fetch_array($result2);
                    ?>
                  <img src="images/<?php echo $row2["t_img"]; ?>" class="img-responsive rest-img" />
                  <div class="rest-info">
                    <p>
                      for 2 people<br>
                      price per table : <?php echo $row2["price"]; ?> Rs.
                    </p>
                    <br><a href="reserve-tbl.php" class="mybtn">Book Now</a>
                  </div><br></br>
                          
                </div>

                <div class="col-md-4">
                       <?php 
                            $sql3="select * from sub_cat where cid=$id && people=4";
                            $result3=mysqli_query($link,$sql3);
                            $row3=mysqli_fetch_array($result3);
                        ?>
                      <img src="images/<?php echo $row3["t_img"]; ?>" class="img-responsive rest-img" />
                      <div class="rest-info">
                          <p>for 4 people</br>price per table : <?php echo $row3["price"]; ?> Rs.</p>
                          <br><a href="reserve-tbl.php" class="mybtn">Book Now</a>
                      </div><br></br>
                </div>
          </div>
          
          <div class="col-md-2">
            <a href="http://www.shein.com"><img src="images/topshop2.gif" class="img-responsive ad" alt="advertisement"></a>
          </div>

    </div>

    <div class="col-md-12">
      <div class="col-md-10">
        <div class="col-md-6 info-left">
            <div class="info-left">
                <?php 
                            $sql4="select * from sub_cat where cid=$id && people=8";
                            $result4=mysqli_query($link,$sql4);
                            $row4=mysqli_fetch_array($result4);
                ?>
            <img src="images/<?php echo $row4["t_img"]; ?>" class="img-responsive rest-img" />
                  
                  <div class="rest-info">
                    <p> for 8 people<br>
                      price per table:<?php echo $row4["price"]?> Rs.</p>
                    <br><a href="reserve-tbl.php" class="mybtn">Book Now</a>
                  </div>

            </div><br></br> 
        </div>

        <div class="col-md-4">
            <div class="info-left">
              <?php 
                      $sql5="select * from sub_cat where cid=$id && people=10";
                      $result5=mysqli_query($link,$sql5);
                      $row5=mysqli_fetch_array($result5);
              ?>
              <img src="images/<?php echo $row5["t_img"]; ?>" class="img-responsive rest-img" />
              <div class="rest-info">
                  <p>for 10+ people</br>
                  price per table:<?php echo $row5["price"]; ?> Rs.</p>
                  <br><a href="reserve-tbl.php" class="mybtn">Book Now</a>
              </div>
            </div><br></br>
        </div>
      </div>
      
      <div class="col-md-2">
        <a href="http://www.shein.com"><img src="images/topshop2.gif" class="img-responsive ad" alt="advertisement"></a>
      </div>

    </div>
    
<!-- slider head -->
  <div class="slider_head">
    <!-- <img src="images/menu.png" alt="DineTime"> -->
    <p class="more-img">more images </p>

    <hr class="menu-hr"></hr>
  </div>
  <!-- slider start-->
  <div class="container-fluid fluid">
        <div id="thumbnail-slider">
            <div class="inner">             
              <!-- 
                        // $sql6="select * from slider where cid=$id";
                        // $result6=mysql_query($sql6,$link);
                        // $row6=mysql_fetch_array($result6);
                        // $count=mysql_num_rows($result6);
                        // echo $count;
                -->

                <ul>
                    <li>
                        <a class="thumb" href="images/rest-2(1).jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/rest-2(2).jpg"></a>
                    </li>
                     <li>
                        <a class="thumb" href="images/rest-2(3).jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/rest-2(4).jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/rest-2(5).jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" src="images/rest-2(6).jpg"></a>
                    </li>
                    <li> 
                        <a class="thumb" src="images/rest-2(7).jpg"></a>
                    </li>                   
                     <li>
                        <a class="thumb" href="images/rest-2(8).jpg"></a>
                    </li>
                     <li>
                        <a class="thumb" href="images/rest-2(9).jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/rest-2(10).jpg"></a>
                    </li>
                   
                </ul>
            </div>
         </div>
          <div id="thumbs2" style="display:none;">
            <div class="inner">
                <ul>
                    <li>
                        <a class="thumb" href="images/rest-2(1).jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/rest-2(2).jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/rest-2(3).jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/rest-2(4).jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/rest-2(5).jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/rest-2(6).jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/rest-2(7).jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/rest-2(8).jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="images/rest-2(9).jpg"></a>
                    </li>
                   <li>
                        <a class="thumb" href="images/rest-2(10).jpg"></a>
                    </li>
                   
                </ul>
            </div>
            <div id="closeBtn">CLOSE</div>
          
       </div>
  </div>
      
<!-- slider end -->
  
</div>

<!-- end div 2 -->


<div class="bgimg-2" >
  <div class="caption caption_2">
        <div class="slider_head">
             <!-- <img src="images/menu.png" class="img-responsive slider_head" alt="DineTime">  -->
                <p class="menu"> 
                    Delicious Cousine</p>
                   <p style="font-family: 'Suranna', serif;"> DISCOVER THE MENU
                </p>
           <!--  <hr class="menu-hr"></hr> -->
        </div>
    </div>
  </div>
<div class="division_3">
      <div id="fh5co-menus" data-section="menu">
      
        
        <div class="row row-padded">
        <div class="col-md-12">

            <div class="col-md-6 info-left">
              <div class="fh5co-food-menu to-animate-2">
                <h2 class="fh5co-drinks">Drinks</h2>
                   
                  <ul>
                      <?php 
                            $sql8="select * from menu where d_type='drink'";
                            $result8=mysqli_query($link,$sql8);
                            $row8=mysqli_fetch_array($result8);
                            while ($row8) {
                            
                      ?>
                    <li>
                        <div class="fh5co-food-desc">
                            <figure>
                              <img src="img/<?php echo $row8['mimage']; ?>" class="img-responsive" alt="Dinetime">
                            </figure>
                            <div>
                              <h3><?php echo $row8['mname']; ?></h3>
                            </div>
                        </div>
                        <div class="fh5co-food-pricing">
                          <?php echo $row8['price']; ?> Rs.
                        </div>
                    </li>
                    <?php 
                         $row8=mysqli_fetch_array($result8); 
                     } ?>
                     
                  </ul>
             </div>
          </div>

          <div class="col-md-6 info-left">
            <div class="fh5co-food-menu to-animate-2">
              <h2 class="fh5co-dishes">Steak</h2>
              <ul>
                <?php 
                            $sql9="select * from menu where d_type='dish'";
                            $result9=mysqli_query($link,$sql9);
                            $row9=mysqli_fetch_array($result9);
                            while ($row9) {
                            
                ?>
                <li>
                  <div class="fh5co-food-desc">
                    <figure>
                      <img src="img/<?php echo $row9['mimage']; ?>" class="img-responsive" alt="Dinetime">
                    </figure>
                    <div>
                      <h3><?php echo $row9['mname']; ?></h3>
                      <!-- <p>Far far away, behind the word mountains.</p> -->
                    </div>
                  </div>
                  <div class="fh5co-food-pricing">
                    <?php echo $row9['price']; ?> Rs.
                  </div>
                </li>
                <?php 
                         $row9=mysqli_fetch_array($result9); 
                  } ?>
                 
              </ul>
            </div>
          </div>
        </div>

      </div>
  </div>
<?php
  if(isset($_SESSION['uid']))
  {

?>
  <div class="fdbk">
    <p>Your Feedback</p>
    <!-- <div class="fdbk-hr"></div> -->
    <form action="#" method="POST">
      <textarea class="form-group fdbk_text" rows="3" name="fbtext" placeholder="write your feedback"></textarea>
      <br><button class="fdbk_btn" name="fbbtn" style="margin: 5px; position: relative;">Submit</button>
<?php 
     
     if(isset($_POST['fbbtn']))
    {
     include("conn.php");
        $u_id=$_SESSION['uid'];
        
        $fb=$_POST['fbtext'];
        
        $res=mysqli_query($link,"insert into feedback values('',$u_id,'$fb')");
        
   }

?>

    </form>
  </div>
  <?php
    }
  ?>
</div>

<div class="container-fluid fluid">
<div class="row">
    <div class="col-md-12">
<?php
      $dis_fb=mysqli_query($link,"select * from feedback");
      $deta=mysqli_fetch_row($dis_fb);
      while ($deta) {
            
      
?>

         <div class="div_fb">
          <?php 
                  $usernm=Mysqli_query($link,"select * from user where uid=$deta[1]");

                  $res_user=mysqli_fetch_row($usernm);
          ?>
              <span class="fa fa-user"></span><span class="fb-usrnm"><?php echo $res_user[1]; ?></span>
             
               <div class="fb-msg"><?php echo $deta[2]; ?></div>  
         </div>
   
<?php 
  $deta=Mysqli_fetch_row($dis_fb);
}
?>
 </div>
</div>
</div>
<!-- JAVA SCRIPT CODE -->

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<!-- start slider script -->
<script>
            //Note: this script should be placed at the bottom of the page, or after the slider markup. It cannot be placed in the head section of the page.
            var thumbs1 = document.getElementById("thumbnail-slider");
            var thumbs2 = document.getElementById("thumbs2");
            var closeBtn = document.getElementById("closeBtn");
            var slides = thumbs1.getElementsByTagName("li");
            for (var i = 0; i < slides.length; i++) {
                slides[i].index = i;
                slides[i].onclick = function (e) {
                    var li = this;
                    var clickedEnlargeBtn = false;
                    if (e.offsetX > 220 && e.offsetY < 25) clickedEnlargeBtn = true;
                    if (li.className.indexOf("active") != -1 || clickedEnlargeBtn) {
                        thumbs2.style.display = "block";
                        mcThumbs2.init(li.index);
                    }
                };
            }

            thumbs2.onclick = closeBtn.onclick = function (e) {
                //This event will be triggered only when clicking the area outside the thumbs or clicking the CLOSE button
                thumbs2.style.display = "none";
            };
        </script>
<!-- end slider script -->

<!--footer part-->
 <?php include("footer.php"); ?> 
  <!--end footer-->
   <!-- body section end -->

</body>
</html>