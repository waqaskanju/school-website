<?php
session_start();

if(!isset($_SESSION['mysession']))
{
header('location:index.php');	
	
}

?>


<?php  include('config/connect.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Page Manager</title>
<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
</head>

<body>

<div class="container">

<?php include('template/header.php'); ?>
  
  <div class="sidebar1">
<?php include('template/nav.php'); ?>  
<!--nav-->
    
   <!-- 
    <aside>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      
    </aside>-->
  <!-- end .sidebar1 --></div>
  <!--content-->
  <?php  include('content/'.$do.'.php') ?>
 <!-- <aside>
    <h4>&nbsp; my asigde</h4>
  </aside>
  -->
  
  <?php include('template/footer.php')?>
  
  <!---->
  <!-- end .container --></div>
</body>
</html>
