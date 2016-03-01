<?php

  // returns http:// or https://
  function getProtocol(){
	$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://'; 
	return $protocol;
  }
  
  // returns full filepath; http://www.hiltongrandvacations.com/
  function getHost($isSecure = null){
	if($isSecure=="secure"){
	  $host = "https://";
	}
	else {
	  $host = "http://";
	  //$host = getProtocol();	
	}
	$host .= $_SERVER['HTTP_HOST'] . "/experiences/";
	return $host;
  }
  
  function addHeader(){
	include("include/header.php");
  }
  
  function addFooter(){
	include("include/footer.php");
  }
  
  function addStyles(){
	include("include/styles.php");
  }
  
  function addScripts(){
	include("include/scripts.php");  
  }
  
?>