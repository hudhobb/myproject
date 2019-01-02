<?php include('h.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style type="text/css">
    input[type=number]{
    width:40px;
    text-align:center;
    color:red;
    font-weight:600;
    }
    </style>
  </head>
  <body>
    
      <div class="row">
        <div class="col-md-12">
          <?php include('navbar.php');?>
        </div>
      </div>
      <br>
    <div class="row">
        <div class="col-md-12">
    <?php include('jumbotron.php');?>
    
    </div>
      </div>
      
      <br/> <br/>
      <hr>
 
   <?php  include('sidebar.php');?>
 

  	  <hr>
      
    <!--start show  product-->
    <div class="container">
      <div class="row">
        <!-- categories-->
        <div class="col-md-2 hidden-xs">
          <?php include('category.php');?>
          <br />
           
          </div>
        
        <div class="col-md-7 col-xs-12">
          <div class="panel panel-primary class">
            <div class="panel-heading"> รายการสินค้า
              <a href="product.php" class="btn btn-info btn-xs"> ทั้งหมด </a>  </div>
            </div>
            
            <?php
            
            $t_id = $_GET['t_id'];
            $q = $_GET['q'];
            if($t_id !=''){
            include('listprd_by_type.php');
            }else if($q!=''){
            include('listprd_by_q.php');
            }else{
            include('listprd.php');
            }
            ?>
          </div>
          
          <!-- cart-->
          <div class="col-md-3">
            <?php
            include('cart.php');
            ?>
            <br /><hr />
            <div class="panel panel-primary class">
              <div class="panel-heading"> สินค้าแนะนำ </div>
            </div>
            <?php  include('listprd_by_view.php');?>
            
            <br /><br /><br />
            <hr />
            
           <a href="http://track.thailandpost.co.th/tracking/default.aspx" target="_blank">
              <img src="img/post.png" width="90%">
            </a>
            
          </div>
        </div>
        
      </div>
      
      
            
      <!--end show  product-->
      
       <br> <br>  <br> <br> <br>
 
 
  <div class="container">
<div class="col-xs-12">

<!--carousel-->
 <?php include('carousel.php'); ?>
 </div>
 </div>
 
 
 
 <br> <br>  <br> <br> <br>
 
 
 
 
 <div class="container">
<div class="col-xs-12">
 
  <?php include('mockup_slider.php');?>
   </div>
 
 </div>
 
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5bed6ac970ff5a5a3a7250c0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->    
      
      
      
      
    </body>
  </html>
 <br> <br>  <br> <br> <br>  
  <?php  include('social_bar.php');?>
   
   <?php  include('footer2.php');?>