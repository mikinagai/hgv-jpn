<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo getHost(); ?>js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="<?php echo getHost(); ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo getHost(); ?>js/lazyloader.js"></script>
<script type="text/javascript" src="<?php echo getHost(); ?>js/script.js"></script>
  
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-8225274-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php
if(isset($_GET["standalone"])){
  if($_GET["standalone"] == "true"){
?>
<style>header, footer p, #links { display: none; } .container { margin: 15px auto 20px; }</style>
<?php	  
  }
}
?>