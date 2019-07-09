<?php
if(isset($_POST['update'])){
$id = $_POST['id'];	
$name=$_POST['name'];
$qua=$_POST['Qualification'];
$mob=$_POST['Mobile'];
$email=$_POST['Email'];
$imgname=$_POST['Imagename'];
$status=$_POST['Status'];	
	
 $query="UPDATE faculty SET name='$name', qualification='$qua' , mobileno='$mob' , email='$email', imagename='$imgname' , status='$status' WHERE id='$id'";

mysqli_query($dbc,$query) or die('error in update');	
	
	
	echo 'Data is sucessfully updated';
	
	header('refresh:3; url=?do=faculty');
    
  
}
  
if(isset($_GET['work']) )
{  
$id=$_GET['id'];
$q="SELECT * FROM FACULTY where id = '$id'; ";
$r=mysqli_query($dbc,$q);
$ans=mysqli_fetch_assoc($r);

echo'


<form name="frm" action="?do=editfaculty" method="POST">
      
   <table width="300"  height="300">   
      <caption> <h3>Edit Faculty</h3> </caption>
     <tr>
    <td> Name:</td> <td><input type="text" name="name" value="'.$ans['name'].'"></td>
    </tr>
    <tr>
     <td>Qualification:</td><td><input type="text" value="'.$ans['qualification'].'"name="Qualification"></td>
     </tr>
     <tr>
     <td>Mobile:</td><td><input type="text" value="'.$ans['mobileno'].'"name="Mobile"></td></tr>
     
       <td>Email:</td><td><input type="text" value="'.$ans['email'].'"name="Email"></td></tr>
       
       <td>Image name:</td><td><input type="text"value="'.$ans['imagename'].'" name="Imagename"></td></tr>
       
       <td>Status:</td><td><input type="text" value="'.$ans['status'].'"name="Status"></td></tr>
       <tr> <td></td><td><input type="hidden" name="update"></td></tr>
	       <tr> <td></td><td><input type="hidden" name="id" value="'.$ans['id'].'"></td></tr>
		   <tr> <td></td><td><input type="submit" name="" value="Update"></td></tr>
       
    </table>
        </form>
		';
		
}
   ?>