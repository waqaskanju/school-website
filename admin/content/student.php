<?php

if(isset($_GET['dwork'])=='delete'){
	
	$id =$_GET['id'];
	
	$q="DELETE FROM student WHERE rollno='$id'";
	mysqli_query($dbc,$q);
	
	echo "Student data deleted. <br> Page Refreshing.....";
	header('refresh:2;url=?do=student');
		}


if(isset($_POST['insert'])==1)
{
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$rollno=$_POST['rollno'];
	$class=$_POST['class'];
	
	
$q="INSERT INTO student (name,fname,rollno,Class) VALUES ('$name','$fname','$rollno','$class')";
$succ=mysqli_query($dbc,$q) or die('query fail');	
	
	if($succ)
	{echo "New Student inserted";
	header('refresh:3; url=?do=student');
	
	}
}	


?>







<form action="?do=student" method="POST">
<table width="600" height="150">
<caption> <h1>       Insert New Student      </h1> </caption>
<tr> <td> Roll No:    </td>  <td><input type="number" name="rollno" value=""> </td></tr>
<tr> <td> Name:       </td>  <td><input type="text" name="name" value="">     </td></tr>
<tr> <td> Father Name:</td>  <td><input type="text" name="fname" value="">    </td></tr>
<tr> <td> Class:      </td>  <td><input type="text" name="class" value="">    </td></tr>
<tr> <td>  </td>  <td><input type="hidden" name="insert" value="1">    </td></tr>
<tr> <td>  </td>  <td><input type="submit" name="" value="INSERT">    </td></tr>
</table>



</form>
<?php
$q="SELECT * FROM student ";
$r=mysqli_query($dbc,$q);
 echo '<table border="1" align="center"><tr><th>Name</th><th> Father Name</th><th>Roll No</th><th>Class</th><th>Edit</th><th>Delete</th></tr>';

while($ans=mysqli_fetch_assoc($r)){
	
	
 echo '<tr><td>'.$ans['name'].'</td>
 <td>'.$ans['fname'].'</td>
 <td>'.$ans['Class'].'</td>
 <td>'.$ans['rollno'].'</td>
 			<td><a href="?do=editstudent&work=edit&id='.$ans['rollno'].'">edit</a></td>
			<td><a href="?do=student&dwork=delete&id='.$ans['rollno'].'">delete</a></td>
	</tr>';
}
 echo'</table>';
 
 ?>