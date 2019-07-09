<?php
include('config/connect.php');

if(isset($_GET['submitted'])==1){
	
 $name = $_GET['name'];
 $fname = $_GET['fname'];
 $pyear = $_GET['pyear'];
 $obtmarks = $_GET['obtmarks'];
 $tutmarks = $_GET['tutmarks'];
 $cell = $_GET['name'];
 $address = $_GET['name'];	
	

	

$q="INSERT INTO admission (Name, Fname, PassingYear, ObtMarks, TutMarks, CellNo, Address) 
	
	VALUES ('$name','$fname','$pyear','$obtmarks','$tutmarks','$cell','$address')";	

mysqli_query($dbc,$q) or die('Invalid Query');


?>

<script>
alert('Thank You for Your Admission');
</script>	
	

<?php }?>









<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
    <title>New Admission</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

      <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="css/style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
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
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <h2 class="art-postheader">FILL THE FOWLLOWING FORM</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><p><br>
                
               <center>  <form  action="#" method="GET">
      <table border="2" bgcolor="FFCCCC" width="400" height="500" bgcolor="#FFFFFF">
      <tr>
         <Caption> <h1 align="center">New Admission Form </h1> </Caption>
      </tr>
     <tr>    <td> Name:</td> <td><input type="text" name="name"></td>   </tr>
    <tr>	 <td>Fname:</td><td><input type="text" name="fname"></td> </tr>
    <tr>     <td>passing Year:</td><td><input type="text" name="pyear"></td></tr>
     <tr>    <td>Obtanmarks:</td><td><input type="text" name="obtmarks"></td> </tr>
      <tr><td>Totalmarks:</td><td><input type="text" name="tutmarks"></td></tr>
        <tr> <td>Cell No:</td><td><input type="text" name="cell"></td></tr>  
        <tr> <td>Address:</td><td><input type="text" name="address"></td></tr> 
         <tr> <td><input type="hidden" value="1" name="submitted"></td> </tr>
           
           
           <tr> <td><input type="submit" value="submit"></td> <td><input type="reset" value="clear"></td></tr> 
           
        
        </table>
        </form></center>
                
                
                
                
                
                
                
                </p></div>


</article></div>
                    </div>
                </div>
            </div>

   <?php  include('template/footer.php'); ?>


    </div>
</div>


</body></html>