

<?php
session_start();
if(!isset($_SESSION['email'])) {
	header("location:login.php");
} else {
	$_SESSION['email'];
}


?>


<!DOCTYPE>
<html>
<head>

	<title>LOGIN LOGOUT REGISTER TUTORIAL SESSIONS PHP</title>

	<style type="text/css">

	#container {
		background-color: green;
		height: 1000px;
		width: 1000px;
		margin-right: auto;
		margin-left: auto;
	}

	#navigation {
		width: 1000px;
		background-color: black;
		height: 50px;
	}

	nav ul {
		padding: 0px;
		margin: 0px;

	}
nav ul li{
		list-style-type: none;
		float:left;
	}

nav ul li:last-child{
		float:right;
	}

nav ul li a{
	
	color:#ffffff;
	display: block;
	padding: 10px;
	text-decoration: none;

}

nav ul li a:hover{
	color:gray;
	
}

	</style>
</head>
<body>

	<div id="container">
		<div id="navigation">
		<nav>
       <ul>
       	<li><a href="#"> Home </a></li>
       	
       	<li><a href="logout.php"> logout </a></li>
       	</ul>
       </nav>

   </div>
	</div>
</body>

</html>