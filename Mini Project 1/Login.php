<?php

$username="admin";
$password="hello";

session_start();

if(isset($_SESSION['username'])){
	echo "<h1> Hello ".$_SESSION['username']."! Welcome to your account page!</h1>";
	
	echo "<a href='purchased_products.php'>Check out your purchased products!</a><br>";
	
	echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
}
else{
	if($_POST['username']==$username && $_POST['password']==$password){
		
		$_SESSION['username']=$username;
		
		echo "<script>location.href='Login_Page.php'</script>";
	}
	else{
		
		echo "<script> alert('Username or password is incorrect! Please try again!')</script>";
		
		echo "<script>location.href='Register_Page.php'</script>";
	}
}

?>


<!doctype html>
<html>
  <head>
    <title>Account Page</title>
	<style type="text/css">
	body{
		background: grey;
		text-align: center;
	}
	h2{
		color: Red;
		font-style: italic;
		font-size: 175%;
	}
	li a {
		display: block;
		font-size: 150%;
		font-style: italic;
		color: #000;
		padding: 8px 16px;
		text-align: center;
	}
	li a:hover {
		background-color: black;
		color: red;
	}	
	p{
		font-size: 125%;
	}
	</style>
  </head>
  <body>
	<h2> Navigation </h2>
		<nav>
		<ol>
			<li><a href="MainPage.html">Home</a></li>
			<li><a href="Photography.html">Photo Showcase</a></li>
			<li><a href="Contact.html">Contact Me</a> </h3>
			<li><a href="Biography.html">About Me</a> </h3>
			<li><a href="PurchasingPhotos.php">Purchase Photos</a> </h3>
		</ol>
		</nav>
  </body>
</html>
