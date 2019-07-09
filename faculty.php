<?php include('config/connect.php');?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Our Faculty</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

   
    <link rel="stylesheet" href="css/style.css" media="screen">
   
    <link rel="stylesheet" href="css/style.responsive.css" media="all">


    <script src="javascript/jquery.js"></script>
    <script src="javascript/script.js"></script>
    <script src="javascript/script.responsive.js"></script>

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
                        <div class="art-layout-cell art-content">
                        
                   
                        <article class="art-post art-article">
                                <h2 class="art-postheader">Our Faculty Member</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">
                	<p><img width="209" height="244" alt="" class="art-lightbox" src="images/hayat.jpg" style="float: left; margin-right: 10px;">Name:Hyat Khan</p><p>Qualification:M Phil MAD<br></p><p>Mobile No:03334560890</p><p>Email Address:Hyat@yahoo.com</p>
                    
                 </div>
                 
                 
                 <!---->
                 
                <?php  faculty_pic($dbc); ?>
                 
                 
                 <!---->


</article></div>
                    </div>
                </div>
            </div>

   <?php  include('template/footer.php'); ?>

    </div>
</div>


</body></html>