<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Marketing Website</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/0f4b29f3d9.js"></script>
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="include/css/index_4.css">

</head>
<body>
	<!-- menu_bar  -->
   <div class="overlay">
   	<div  id="ov-menu">
   		<div class='menu_t' id="menu_top">
   			<div class="me_ba_comp_img"style="padding-top: 4%;"><a href="index.php?PageName=homePage"><img src="other/Icon_Health_and_Fitness_Logo_2015.jpg" width="100" height="40"></a></div>
   			<div class="delete_menu"style="padding-top: 6%; font-size: 20px;width: 300px;"><i class="fas fa-times"></i></div>
   		</div>
        <div class="mob_bottom_1">
   	       <div><i class="fas fa-home"></i></div>
   	       <div><i class="fas fa-shopping-cart"></i></div>
   	       <div><i class="fas fa-bell"></i></div>
   	       <div><i class="fas fa-comment-alt"></i></div>
   	  
        </div>
   		<div class="e_va">
   			<div style="    text-align: center;
                            padding-top: 13%; 
                             font-size: 28px;">E-Valance</div>
   			<button class="e_va_login">Login</button>
   		</div>
   		<div class="menu-catg">
   			<ul class="menu_catg_ul">
   				<li><i class="fas fa-chevron-right"></i>Best Selling </li>
   				<li><i class="fas fa-chevron-right"></i>New Arrival </li>
   				<li><i class="fas fa-chevron-right"></i>Shop </li>
   				<li><i class="fas fa-chevron-right"></i>Brand </li>
   				<li><i class="fas fa-chevron-right"></i>Electronic Devices </li>
   				<li><i class="fas fa-chevron-right"></i>Mens Feshions </li>
   				<li><i class="fas fa-chevron-right"></i>women Feshions </li>
   				<li><i class="fas fa-chevron-right"></i>Baby</li>
   				<li><i class="fas fa-chevron-right"></i>Mobile</li>
   				<li><i class="fas fa-chevron-right"></i>Mobile Accessories </li>
   				<li><i class="fas fa-chevron-right"></i>Computer Accessories </li>
   				<li><i class="fas fa-chevron-right"></i>Other</li>
   				<li><i class="fas fa-chevron-right"></i>Apple</li>
   			</ul>
   		</div>
     	
   	</div> 
   	<div id="part_of_menu">
   		<ul class="menu_catg_ul">
   			    <i class="fas fa-chevron-left"></i>
   				<li>Best Selling </li>
   				<li>New Arrival </li>
   				<li>Shop </li>
   				<li>Brand </li>
   				<li>Electronic Devices </li>
   				<li>Mens Feshions </li>
   				<li>women Feshions </li>
   				<li>Baby</li>
   				<li>Mobile</li>
   				<li>Mobile Accessories </li>
   				<li>Computer Accessories </li>
   				<li>Other</li>
   				<li>Apple</li>
   			</ul>
   	</div>	
   </div>
   <!-- end menu bar -->
   <nav class="nav bg-light sticky">
         <div class="container-fluid">
    	    <div class="row">
    		   <div class="col-lg-2 col-md-6 col-sm-10 col-xs-6 order-lg-1 order-sm-1 order-1 nav-1st">
    			 <a class="navbar-brand" href="#"> <i class="fas fa-bars"></i><img src="other/Icon_Health_and_Fitness_Logo_2015.jpg" width="100" height="40"></a>
    			 <div class="nav-1st-user" style="float: right; margin-top: 4%; margin-right:4%;text-align: center; "><i class="fas fa-user"></i></div>
    		   </div>
    		   <div class="col-lg-7 col-sm-12  col-xs-12 order-lg-2 order-sm-3 order-3 nav-2nd">
    		   	  <div><input type="text" name="search" class="search_bar">
                      <button class="search_bar_button"><i class="fas fa-search"></i></button>
                  </div>
    		   </div>
    		   <div class="col-lg-2 col-sm-3 col-xs-6 order-sm-2  order-2 nav-3rd container-fluid">
    		   	 <div class="row">
    		   	 	<div class="col-lg-3 col-md-3 nav-3rd-i"><i class="fas fa-shopping-cart"></i></div>
    		   	 	<div class="col-lg-3 col-md-3 nav-3rd-i"><i class="fas fa-bell"></i></div>
    		   	 	<div class="col-lg-3 col-md-3 nav-3rd-i"><i class="fas fa-comment-alt"></i></div>
    		   	 	<div class="col-lg-3 col-md-3  order-sm-1"><a href="login.php"><i class="fas fa-user"></i></a></div>
    		   	 	
    		   	 </div>
    		   
                
               
               
    		   </div>
    	    </div>
    	
         </div>
   </nav>
<!--    
   <div class='mobile_bottom'>
   	  <div class="container-fluid">
   	  	 <div class="row">
   	  	 	<div class="col-xs-3 mobile_bottom_block"><i class="fas fa-shopping-cart"></i></div>
   	  	 	<div class="col-xs-3 mobile_bottom_block"><i class="fas fa-bell"></i></div>
            <div class="col-xs-3 mobile_bottom_block"><i class="fas fa-comment-alt"></i></div>
            <div class="col-xs-3 mobile_bottom_block"><i class="fas fa-user"></i></div>

   	  	 </div>
   	  </div>
   </div> -->
   
 
   <!-- middile of the webpage --box -->

   <div class="box">
     <?php 
              
              if(!empty($_GET['PageName']))
              {
                $PageName=$_GET['PageName'];
                $myPagesFolder='C:\xampp\htdocs\marketing website\Pages';
                $directory=scandir($myPagesFolder,0);
                unset($directory[0],$directory[1]);
                 // print_r($directory);
                if(in_array($PageName.'.php', $directory))
                {
                 
                 include($myPagesFolder.'/'.$PageName.'.php');
                }
                else
                {
                  echo "404: not found";
                }
                
              }
              else
              {
                 $myPagesFolder='C:\xampp\htdocs\marketing website\Pages';
                include($myPagesFolder.'\homePage.php');
              }


            ?>	
   </div>


  <!--  <div class="mob_bottom">
   	  <div><i class="fas fa-home"></i></div>
   	  <div><i class="fas fa-shopping-cart"></i></div>
   	  <div><i class="fas fa-bell"></i></div>
   	  <div><i class="fas fa-comment-alt"></i></div>
   	  
   </div> -->
   

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="include/js/index_2.js"></script>
</body>
</html>