<?php
if(isset($_GET['dwork']))
{

$id=$_GET['id'];
$q= "DELETE FROM FACULTY WHERE id='$id'";
 $r=mysqli_query($dbc,$q);

 echo "Faculty Deleted...... <br> Page Refreshing...";
 
 header('refresh:3;url=?do=faculty');
}


if(isset($_POST['insert']))
{
$name=$_POST['name'];
$qua=$_POST['Qualification'];
$mob=$_POST['Mobile'];
$email=$_POST['Email'];
$imgname=$_POST['Imagename'];
$status=$_POST['Status'];


 $q="INSERT INTO faculty (name,qualification,mobileno,email,imagename,status) VALUES ('$name','$qua','$mob','$email','$imgname','$status')";
	mysqli_query($dbc,$q);	
	
echo "new faculty inserted";
header('refresh:3;url=?do=faculty');
}

?> 
     <form name="frm" action="?do=faculty" method="POST">
      <table width="300" height="300">
      
      <caption> <h3>Insert New Faculty Member </h3> </caption>
     <tr>
    <td> Name:</td> <td><input type="text" name="name"></td>
    </tr>
    <tr>
     <td>Qualification:</td><td><input type="text" name="Qualification"></td>
     </tr>
     <tr>
     <td>Mobile:</td><td><input type="text" name="Mobile"></td></tr>
     
       <td>Email:</td><td><input type="text" name="Email"></td></tr>
       
       <td>Image name:</td><td><input type="file" name="Imagename"></td></tr>
       
       <td>Status:</td><td><input type="text" name="Status"></td></tr>
       </tr>
       
       <td></td><td><input type="hidden" name="insert"></td></tr>
       
     
        <td colspan="3" align="center"><input type="submit" value="submit">&nbsp;&nbsp;&nbsp;<input type="reset" value="clear"></td></tr>
        </table>
        </form>
   <?php
   
$q="SELECT * FROM FACULTY ";
$r=mysqli_query($dbc,$q);
 echo '<table border="1" align="center"><tr><th>Name</th><th>Edit</th><th>Delete</th></tr>';

while($ans=mysqli_fetch_assoc($r)){
	
	
 echo '<tr><td>'.$ans['name'].'</td>
 			<td><a href="?do=editfaculty&work=edit&id='.$ans['id'].'">edit</a></td>
			<td><a href="?do=faculty&dwork=delete&id='.$ans['id'].'">delete</a></td>
	</tr>';
}
 echo'</table>';
   
	
	
   
   ?>

    