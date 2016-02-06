<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> 
  <title>A Message from Lisa Cohen</title>
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
  <link type="text/css" rel="stylesheet" href="css/default.css" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link type="text/css" rel="stylesheet" href="http://vjs.zencdn.net/4.10/video-js.css" />
  <script type="text/javascript" src="http://vjs.zencdn.net/4.10/video.js"></script>
  <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script type="text/javascript" src="js/css3-mediaqueries.js"></script>
    <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  <video id="lisavid" class="video-js vjs-default-skin" controls autoplay preload="auto" width="100%" height="100%" poster="MY_VIDEO_POSTER.jpg" data-setup="{ controls: 'false' }">
   <source src="lisa.mp4" type="video/mp4">
   <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
</video>

  <script type="text/javascript">
    $(document).ready(function(e){
	  var width = $(window).width();
	  var height = $(window).height();
      $("video").width(width).height(height);
	  if($.browser.msie && parseInt($.browser.version, 10) < 9) {
	    $("video").attr("controls","false");
	  }
    });
  </script>

</body>
</html>