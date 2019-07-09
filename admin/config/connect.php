<?php
$dbc=@mysqli_connect('localhost','root','','mujahaid') or die('There is an error in connect') . mysqli_connect_error();

include('functions/sandbox.php');

if (empty($_GET['do'])) 
{
$do = 'Home';
}
else{
$do =$_GET['do'];	
}



?>