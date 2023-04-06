<!doctype html>
<html>
  <head>
    <title>Register Page</title>
	<style type="text/css">
	table{
		margin-top:25px;
		border: 1px solid;
		background-color: #black;
	}
	td{
		border:0px;
		padding: 10px;
	}
	th{
		border-bottom: 1px solid;
		background-color: #black;
	}
	p{
		text-align: center;
	}
	h1{
		text-align: center;
	}
	body{
		background: grey;
	}
	h2{
		color: Red;
		text-align: center;
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
    <h1>Welcome To The Register / Login Page!</h1>
    <p>Please enter your desired username and password!</p>
	<h2> Navigation </h2>
		<nav>
			<li><a href="MainPage.html">Home</a></li>
			<li><a href="Photography.html">Photo Showcase</a></li>
			<li><a href="Contact.html">Contact Me</a> </h3>
			<li><a href="Biography.html">About Me</a> </h3>
			<li><a href="PurchasingPhotos.php">Purchase Photos</a> </h3>
		</nav>
	<form action="Login.php" method="post">
		<table align="center">
			<tr>
				<th colspan="2"><h2 align="center">Login or Register!</h2></th>
			</tr>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
			</tr>
		</table>
	</form>
  </body>
</html>