<!doctype html>
<html>
  <head>
    <title>Purchased Products Page</title>
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
<?php

	session_start();
	
	$dsn = 'mysql:host=localhost;dbname=user_data';
	$username = 'admin';
	$password = 'hello';
	
	if(isset($_SESSION['username'])){
	
	echo "<h2> Welcome to your products page </h2>";
	
	try {
    $db = new PDO($dsn, $username, $password);
    $query = "SELECT password, product ".
             "FROM products ".
             "WHERE username = :username ";
    $stmt = $db->prepare($query);
    $stmt->bindValue('username', $user_name);
	$stmt->bindValue('password', $user_password);
    $stmt->execute();
    $result = $stmt->fetch();
    $stmt->closeCursor();
    if ($result === FALSE) {
      $error = "User not found!";
    } 
	else if ($result['password'] != $password) {
      $error = "Invalid Password";
    } 
	else {
      $product = (float) $result['product'];
    }
	} catch (PDOException $e) {
    $error = "Can't connect to database: " . $e->getMessage();
    //include('purchased_prodcuts.php');
    exit(0);
	}
		echo "<br><a href='Login.php' ><input type=button name=back value=back></a>";
	}
	else{
		echo "<script>location.href='Register_Page.php'</script>";
	}
	
	if (isset($prodcut)) {
        echo "You bought $prodcut items!";
	}
?>


