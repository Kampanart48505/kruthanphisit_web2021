<?php 
session_start();
include("connect/connect.php");    
?>




<!DOCTYPE html>
<html lang="en">
    <!--start head-->
    <?php
        include_once 'component/head.php';
    ?>
    <!--end head-->

    <style>
        .headbanner{
            font-weight: 700;
            font-family: 'Kanit', sans-serif;
        }
        .head{
            font-weight: 500;
        }
        .card-title{
            font-family: 'Kanit', sans-serif;
        }
        .kanit{
            font-family: 'Kanit', sans-serif;
        }
        .blue{
            color: #304fa0;
        }
        .footer-link{
            color: white;
            transition: 0.3s;
        }
        .footer-link:hover,.footer-link:active{
            color: #304fa0;
        }
        .main-menu{
            border: 1px solid lightgray;
            border-radius: 5px;
            background-color: white;
            color: black;
            font-size: 15px;
            transition: 0.2s;
        }
        .main-menu:hover,.main-menu:active{
            border: 1px solid #304fa0;
            transform: translate(10px,0px);
            background-color: #304fa0;
        }
        .parallax1{
            background-image: url(assets/pic/paralax.jpg);
            background-size: cover;
            background-attachment: fixed;
        }
        .text-marquee{
            background-image: url(assets/img/linebanner.jpg);
            border-radius: 100px;  
        }
        .box-header{
            background-color:#0f558c;
            color:white;
            height:auto;
            width:auto;
            padding:5px;
            margin: -5px 0 0;
            border-top: 5px solid #2196f3;
        }
        .btn{
          font-size: 14px;
        }
        #topbar {
          background-color:white ;
         
          min-height: 106px;
          z-index: 999999999;
          font-size: 16px;
          
          padding: 10px 5%;
          font-weight: 200;
          display: block;
          position: relative;
          top: 0px;
          width: 100%;
      }
      .navbar .navbar-nav .nav-item .nav-link {
          font-size: 15px;
      }
      .bottom-banner {
          margin: 0;
          padding: 0;
          position: relative;
          margin-top: -110px;

          background: url("assets/pic/bottombanner.png") ;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          padding-top: 0 !important;
          padding-bottom: 0 !important;
          max-width: 100%;
          height: 330px;
      }
      .bottom-banner2 {
          margin: 0;
          padding: 0;
          position: relative;
          margin-top: -110px;

          
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          padding-top: 0 !important;
          padding-bottom: 0 !important;
          max-width: 100%;
    
      }
      hr{
          color: black;
          background-color: black;
          height: 1px;
      }
      body{
          font-family: "Mitr" , sans-serif;
      }
      .section-title{
            padding: 14px;
            background-color: #e91e63;
        }
    </style>

    <body style="background-image: url(assets/img/test3.jpg);">

        <!--start banner-->
        <?php
            include_once 'component/navbar.php';
        ?>
        <!--end banner-->
        
        <!--start banner-->
        <?php
            include_once 'component/banner.php';
        ?>
        <!--end banner-->
        <div class="line-banner" style="background-image: url(assets/img/rose.jpg);height: 7px;"></div>

     
      <div class="container bg-white" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2)">
        <!-- Section 1 -->
        <div class="col-xl-12">  
                <div class="container">
                <div class="row">
              
              <div class="col-xl-12 pt-4">
                  <h3 class="section-title text-light s6">ข่าวประชาสัมพันธ์</h3>
                  <?php 
                      $sqlnews = "SELECT * FROM news ORDER BY n_id ASC";
                      $querynews = mysqli_query($conn,$sqlnews);
                      while($fetchn = mysqli_fetch_array($querynews)){

                  ?>
                  <li style="padding: 10px 10px 2px 10px; border-bottom: 1px dashed #ccc;">
                      <a href="news_detail.php?id=<?php echo $fetchn[0] ?>" style="font-size: 16px;"><?php echo $fetchn['n_name'] ?> <label class="badge badge-rose" style="font-size: 14px;"><?php echo $fetchn['n_date'] ?>/<?php echo $fetchn['n_month'] ?>/<?php echo $fetchn['n_year'] ?></label></a>
                      
                  </li>

                  <?php } ?> 
                 
              </div>

          </div>
                </div>
            <br>
        </div>
      </div>
             

      
        

        
        
        
         

        


        <!--start footer-->
        <?php
            include_once 'component/footer.php';
        ?>
        <!--end footer-->

        <!--start linkjs-->
        <?php
            include_once 'component/jslink.php';
        ?>
        <!--end lnikjs-->
    
    </body>
</html>
   
      