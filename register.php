<?php


session_start();
include("dbconn.php");

if(isset($_POST['submitdata'])) {
	$firstname = $_POST['firstname'];
	$email = $_POST['email'];
	$fileupload = $_FILES['fileupload']['name'];
	$fileuploadtmp = $_FILES['fileupload']['tmp_name'];
	$password = $_POST['password'];
	$folder = "images/";

move_uploaded_file($fileuploadtmp, $folder.$fileupload);

$insert = "INSERT INTO `regt`( `firstname`, `fileupload`, `email`, `password`) VALUES ('$firstname','$fileupload','$email','$password')";


$qry = mysqli_query($conn, $insert);

if($qry) {
     $_SESSION['email'] = $email;
	header("location: website.php");
}

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

#formone {
	text-align: center;
	padding: 20px;
	margin: 10px;

}

#formone input[type="submit"], input[type="file"],input[type="text"], input[type="password"],input[type="email"] {
   padding:10px;
   width:190px;

}
	</style>
</head>
<body>

	<div id="container">
		<div id="navigation">
		

   </div>

   <form action="" method="post" id= "formone" enctype="multipart/form-data">

	<input type="text" name="firstname"  placeholder="First Name"/><br /><br />
	<input type="file" name="fileupload"  /><br /><br />
	<input type="email" name="email"  placeholder ="Email"/><br /><br />
	
	<input type="password" name="password"  placeholder ="Password"/><br /><br />
	<input type="submit" name="submitdata"  />

	</form>
	</div>


</body>

</html>