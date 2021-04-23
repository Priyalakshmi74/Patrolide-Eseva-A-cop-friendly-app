<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:logincon.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style>
		body {
    background: url('https://d7hftxdivxxvm.cloudfront.net/?resize_to=width&src=https%3A%2F%2Fartsy-media-uploads.s3.amazonaws.com%2F2RNK1P0BYVrSCZEy_Sd1Ew%252F3417757448_4a6bdf36ce_o.jpg&width=1200&quality=80');
    background-repeat: no-repeat;
    
    background-position: center center;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
button[type=submit]
    {
      width: 10%;
      box-sizing: border-box;
      padding: 10px 0;
      margin-top: 30px;
      outline: none;
      border: none;
      background: grey;
      opacity: 0.7;
      border-radius: 20px;
      font-size: 20px;
      color: black;

    }
    button[type=submit]:hover{
      background: blue;
      opacity: 0.7;
    }

		body{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			background-color: skyblue;
		}
		.container
		{
			position: relative;
			width: 1200px;
			height: 300px;
			margin: 240px auto;
			
		}
		.container .box
		{
			position: relative;
			width: calc(400px - 30px);
			height: calc(300px - 30px);
			background: #000;
			float: left;
			margin: 15px;
			box-sizing: border-box;
			overflow: hidden;
			border-radius: 10px;
		}
		.container .box .icon
		{
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background:#f00;
			transition: 0.5s
			z-index: 1;

		}
		.container .box:hover .icon
		{
			top: 20px;
			left: calc(50% - 40px);
			width: 80px;
			height: 80px;
			border-radius:50%;

		}
		.container .box .icon .fa
		{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			font-size: 80px;
			transition: 0.5s;
			color: #fff;

		}
		.container .box:hover .icon .fa
		{
			font-size: 40px;
		}
		.container .box .content {
			position: absolute;
			top: 100%;
			
			height: calc(100% - 100px);
			text-align: center;
			padding: 20px;
			box-sizing: border-box;
			transition: 0.5s;
			opacity: 0;
		}
		.container .box:hover .content  {
			top: 100px;
			opacity: 1;
			
		}
		.container .box .content h3 {
			margin: 0 0 10px;
			padding: 0;
			color:#fff ;
			font-size: 24px;
		}
		.container .box .content p {
			margin: 0;
			padding: 0;
			color: #fff;
			font-size: 24px;
		}
		.container .box:nth-child(1) .icon 

		{
			background: blue;
		}
		.container .box:nth-child(1) .icon 
		{
			background: #blue;
		}
		.container .box:nth-child(2) .icon 

		{
			background: green;
		}
		.container .box:nth-child(2) .icon 
		{
			background: green;
		}
		.container .box:nth-child(3) .icon 

		{
			background:red ;
		}
		.container .box:nth-child(3) .icon 
		{
			background: red;
		}

	</style>
</head>
<body>
	<div>
	<b id="logout"><a href="logout.php">Log Out</a></b>

	
</div>
<div id="profile">
</div>
<h1 align="center"><b>Welcome <?php echo $_SESSION['username']; ?> to PatrolAide</h1></b>
</marquee>
<div class="container">
	<div>
<h3 align="center"><b>CLICK THE BUTTON TO REGISTER<i class="fa fa-arrow-down" aria-hidden="true"></i></b></h3></div>
<div>

 <div class="box">
  <div class="icon"><i class="fa fa-road" aria-hidden="true"></i></div>
   <div class="content">
	<h3 >  Traffic Cop</h3>
	<p><a href="trafcop.html"><button>GO</button></p></a>
  </div>
 </div>

 <div class="box">
  <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
   <div class="content">
	<h3 >Traffic Central Team</h3>
	<p> <a href="dashboard2.php"><button>GO</button></p></a>
  </div>
 </div>

 <div class="box">
  <div class="icon"><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
   <div class="content">
	<h3 >Medical Rapid Force Team </h3>
	<p><a href="dashboard.php"><button>GO</button></p></a>
  </div>
 </div>
 <div>
</div>
<div>

</div>

	<h1>Kindly register the violation and emergency for immediate action!!!</h1>
</div>





 <div class="but">
<a href="firstpage.html">
 
<button type ="Submit" value="submit">BACK</button></a>
</div>
</body>
</html>


	