<?php include("../server-side/library.php"); 

if(isset($_GET["standalone"])){
  $standalone = $_GET["standalone"];
}
else {
  $standalone = false;	
}

if(isset($_GET["elite"])){
  $elite = $_GET["elite"];
}
else {
  $elite = false;	
}

if(isset($_GET["lang"])){
  $lang = $_GET["lang"];
}
else {
  $lang = "eng";	
}

?>
<!doctype html>
<html>
<head>
  <meta name="description" content="A wide array of resorts in various destinations makes planning your vacation easy with Hilton Grand Vacations." />
  <title>Explore Hilton Grand Vacations Resort Collection</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php 
	  addHeader();
	  addResorts($standalone, $elite, $lang);  // standalone (T,F), elite (T,F), language (string)
	  addFooter();
	?>
    
  </div>

  <?php addScripts(); ?>
  <script type="text/javascript" src="../js/swipe.js"></script>
  <script type="text/javascript" src="../js/jquery.cookie.js"></script>
  <script type="text/javascript" src="../js/resorts.js"></script>
  <script type="text/javascript" src="../js/jquery.shuffle.min.js"></script>
  <script type="text/javascript" src="../js/explore.js"></script>

</body>
</html>