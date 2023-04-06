<!doctype html>
<html>
  <head>
    <title>Purchasing Photos</title>
	<link rel="stylesheet" href = "PurchasingPhotos.css">
  </head>
  <body>
    <h1>-Purchase Photos-</h1>
	<main>
		<h2> Navigation </h2>
		<nav>
			<li><a href="MainPage.html">Home</a></li>
			<li><a href="Photography.html">Photo Showcase</a></li>
			<li><a href="Contact.html">Contact Me</a> </h3>
			<li><a href="Biography.html">About Me</a> </h3>
			
		</nav>
	</main>	
    <p>Please enter the photo type and how many you would like to purchase (MAX 10 PHOTOS)!</p>
	<p>Current Photos Avaliable: Sunset, Ocean, Nature, and Action! Photo prices start at $5 each!</p>
    <form name="purchasing_form" method="post" action="get_total.php">
		Product Type: <input type="text" name="product_name" value="<?php
          echo (isset($product_name) ? htmlspecialchars($product_name) : "");
        ?>"><br>
		Quantity: <input type="quantity" name="quantity" value=""></br></br>
      <input type="submit" name="submit" value="Get your total"></br>
    </form>
    <p>
      <?php
        if (isset($error) && $error !== "") {
          echo "ERROR: " . htmlspecialchars($error);
        } else if (isset($total)) {
          echo "Your total will be $total_amount";
        }
      ?>
    </p>
  </body>
</html>