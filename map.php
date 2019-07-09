<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
    <title>Contact Us</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="css/style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="css/style.responsive.css" media="all">


    <script src="javascript/jquery.js"></script>
    <script src="javascript/script.js"></script>
    <script src="javascript/script.responsive.js"></script>
    
      <script src="https://maps.googleapis.com/maps/api/js"></script>
<style>  
  
  #map-canvas {
        width: 900px;
        height: 400px;
      }


</style>
</head>
<body>
<div id="art-main">

<!--HTML Header-->
<?php include('template/header.php');?>
<!-- End of Header-->

<div class="art-sheet clearfix">
<!--Navigation Starts-->
<?php include('template/nav.php');?>
<!--Navigation End--> 
<div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <h2 class="art-postheader">Contact Us</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">

  <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(34.348239, 71.730188),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
     <div id="map-canvas"></div>



</article></div>
                    </div>
                </div>
            </div>


   <?php  include('template/footer.php'); ?>

    </div>
</div>


</body></html>