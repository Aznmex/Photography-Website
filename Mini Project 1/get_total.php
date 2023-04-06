<?php
  
  if (isset($_POST['product_name'])) {
    $product_name = $_POST['product_name'];
  } else {
    $product_name = "";
  }
  
  if (isset($_POST['quantity'])) {
    $total_photos = $_POST['quantity'];
  } else {
    $c = "";
  } 
  
   $error = "";
  if ($product_name === "") {
    $error = "No product given";
  } else if ($total_photos === "") {
    $error = "No quantity given";
  }
  if ($error !== "") {
    include('PurchasingPhotos.php');
    exit(0);
  }
  
  function get_user_total($total_for_user) {
	$age = array("0"=>"$0","1"=>"$5","2"=>"$10","3"=>"$15","4"=>"$20","5"=>"$25","6"=>"$30","7"=>"$35","8"=>"$40","9"=>"$45","10"=>"$50");
    if ($total_for_user == 1) {
      return $age[1];
    } else if ($total_for_user == 2) {
      return $age[2];
    } else if ($total_for_user == 3) {
      return $age[3];
    } else if ($total_for_user == 4) {
      return $age[4];
    } else if ($total_for_user == 5) {
      return $age[5];
    } else if ($total_for_user == 6) {
      return $age[6];
    } else if ($total_for_user == 7) {
      return $age[7];
    } else if ($total_for_user == 8) {
      return $age[8];
    } else if ($total_for_user == 9) {
      return $age[9];
    } else if ($total_for_user == 10) {
      return $age[10];
    } else if ($total_for_user == 0) {
      return $age[0];
    } else{
		return 'invalid';
	}
  }

  // read data from file
  $fh = fopen('user_data.csv', 'r');
  while (!feof($fh)) {
    $line = fgets($fh);
    $data = explode(',', $line);
    if ($product_name !== $data[0]) {
	  continue;
    }
	if ($total_photos > $data[1]) {
      $error = "Sorry cannot purchase more than max per user!";
      break;
    }
	else{
		$total = $total_photos;
		$total_amount = get_user_total($total);
		break;
	}
  }
  
  if (!isset($total_photos) && $error == "") {
    $error = "Product unavaliable to purchase!";
  }
  fclose($fh);
  include('PurchasingPhotos.php'); 
   
  // write data to file
  $fp = fopen('log_'.date("Y_m_d").'.csv','a');
	fprintf($fp, "User Ordered: %s. Amount Ordered %s. Total: %s.", $product_name, $total_photos, $total_amount);
	fprintf($fp, "\r\n");
  fclose($fp);
?>



