<?php
  
  // global var
  $query_string = "";
  $kv = array();
  $proxy = "10.80.40.19:443";
  $url = "https://hgv--qa.cs13.my.salesforce.com/servlet/servlet.WebToLead";
 
  if($_GET){ // if GET key value array exists
    foreach($_GET as $key => $value){ // for each pair in GET array
      $kv[] = stripslashes($key) . "=" . htmlspecialchars(stripslashes($value)); // set kv array with GET variable as string "first_name=Adam"
    }  
    $query_string = join("&", $kv); // create a query string with join function separated by ampersand
  } // end GET if

  // if cURL is not installed then just fail
  if(!function_exists("curl_init")){
    die("Sorry cURL is not installed!");
  }
 
  // for debugging purposes, display various shizzy
  for($i = 0; $i < count($kv); $i++){
	 echo $kv[$i] . "<br />"; 
  }
  echo "<br /><br />URL: " . $url . "<br /><br />";
  echo "Params: " . $query_string . "<br /><br />";
  echo "Full URL: " . $url . "?" . $query_string;
 
  $ch = curl_init(); // open cURL connection
 
  // set the url, POST data, and proxy ip
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, count($kv));
  curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);
  //curl_setopt($ch, CURLOPT_PROXY, $proxy);
 
  // additional settings for salesforce
  curl_setopt($ch, CURLOPT_HEADER, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
   
  $result = curl_exec($ch); // execute SalesForce web to lead PHP cURL
 
  curl_close($ch); // close cURL connection

?>