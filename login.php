<?php 
  if(isset($_POST['login']))
  {
  	header('location:\marketing website\index.php');
           exit;
  }

 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/0f4b29f3d9.js"></script>
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
	<style type="text/css">
	body{
		background: url('other/Mantle.jpg');
	}
	.lo_form{
    background: white;
    width: 52%;
    margin-left: 7%;
    margin-top: 16%;
    height: 483px;
    border-radius: 5px;
    box-shadow: 0px 0px 14px 12px rgba(0,0,0,0.2);
    padding-left: 3%;
    opacity: 0.9;
    filter: alpha(opacity=90);
    }
    .lo_body{
    	display: grid;
    	grid-template-columns: repeat(auto-fill,minmax(600px,1fr));
    }
    .lo_text
    {
    color: white;
    font-size: 46px;
    font-family: arial;
    padding-left: 28%;
    margin-top: 26%;
    text-shadow: 0px 0px 14px rgba(17, 46, 135, 0.6);
    font-family: arial;
    }
    .lo_connect
    {
    font-size: 14px;
    margin-top: 11%;
    }
    .lo_connect i
    {
       margin-top: 2%;
       font-size: 25px;
       padding-right: 20px;
    }
    form{
       margin-top: 25%;
       margin-left: 3%
    }
    form input
    {
    background: #e7e6e6;
    width: 87%;
    height: 35px;
    margin-bottom: 4%;
    border: 2px solid #e7e6e6;
    border-radius: 3px;
    padding: 1%;
    font-family: arial;
    font-size: 18px;
    padding-left: 3%;

    }
    
    .lo_fo_butn_log
    {
    width: 31%;
    margin-right: 12%;
    height: 38px;
    background: #40ff57cc;
    color: white;
    font-size: 16px;
    box-shadow: inset 0px 2px 20px 3px rgba(17, 244, 147, 0.71);
    border: 2px solid #21ff38;
    border-radius: 3px;
     font-weight: 600;
    }
    .lo_fo_butn_log:hover
    {
     background: white;
     color: #40ff57cc;
     border: 2px solid #40ff57cc;
     box-shadow: inset 0px 0px 0px 0px rgba(17, 244, 147, 0.71);
    
    }
    .lo_fo_butn_cret_acc
    {
     width: 46%;
    margin-left: 2%;
    height: 38px;
    margin-top: 7%;
    font-size: 16px;
    background: #3a9ae9;
    color: white;
    box-shadow: inset 1px 3px 20px 2px rgba(62, 172, 188, 0.7);
    border: 2px solid #1494ff;
    border-radius: 3px;
    font-weight: 600;

    } 
    .lo_fo_butn_cret_acc:hover
    {
    	background: white;
    	border: 2px solid #3a9ae9;
    	color: #3a9ae9;
    	box-shadow: inset 0px 0px 0px 0px rgba(62, 172, 188, 0.7);
    	
    }
</style>
</head>
<body>
<div class="lo_body">
<div class="lo_text">
	<span style="font-family: 'Lobster', cursive;">Company Name</span> <br><span style="font-size: 0.9em;">Welcome back to <br>best online  <br>shoping center</span> <br>
	<div class="lo_connect">
		Connect with us <br>
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>
	</div>
</div>
<div class="lo_form">
	<div style="text-align: center;
    font-size: 30px;
    padding-top: 23px;
    font-family: arial;
    color: #17d6d3;">Login Here</div>

<form action="login.php" method="post">
	<input type="text" name="user_name" placeholder="User Name"><br>
    <input type="password" name="password" placeholder="..........."><br>
    <div class="lo_fo_pas"><a href="">Forget Password?</a></div>
    <button class="lo_fo_butn_log" name="login">LogIn</button>
    <button class="lo_fo_butn_cret_acc" login='create_acc'>Create Account</button>
</form>
</div>
</div>
</body>
</html>



