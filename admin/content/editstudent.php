<?php
if(isset($_POST['update'])==1){
	
	$id=$_POST['id'];
    $name=$_POST['name'];
	$fname=$_POST['fname'];
	$rollno=$_POST['rollno'];
	$class=$_POST['class'];
	
	
 $query="UPDATE student SET name='$name', fname='$fname' , rollno='$rollno' , Class='$class' WHERE rollno = '$id'";

mysqli_query($dbc,$query) or die('error in update');	
	
	
	echo 'Data is sucessfully updated';
	
	header('refresh:3; url=?do=student');
	
}



if(isset($_GET['work']))
{
$id = $_GET['id'];

$q="SELECT * FROM student WHERE rollno='$id'";
$r=mysqli_query($dbc,$q);

$ans=mysqli_fetch_assoc($r);

echo'


<form action="?do=editstudent" method="POST">
<table width="600" height="150">
<caption> <h1>       Insert New Student      </h1> </caption>
<tr> <td> Roll No:    </td>  <td><input type="number" readonly="readonly" name="rollno" value="'.$ans['rollno'].'"> </td></tr>
<tr> <td> Name:       </td>  <td><input type="text" name="name" value="'.$ans['fname'].'">     </td></tr>
<tr> <td> Father Name:</td>  <td><input type="text" name="fname" value="'.$ans['fname'].'">    </td></tr>
<tr> <td> Class:      </td>  <td><input type="text" name="class" value="'.$ans['Class'].'">    </td></tr>
<tr> <td> Class:      </td>  <td><input type="text" name="id" value="'.$ans['rollno'].'">    </td></tr>
<tr> <td>  </td>  <td><input type="hidden" name="update" value="1">    </td></tr>
<tr> <td>  </td>  <td><input type="submit" name="" value="UPDATE">    </td></tr>
</table>



</form>






';

}

?>
