<?php

if(isset($_GET['work'])=='delete'){
	
	$work =$_GET['work'];
	$id =$_GET['id'];
	
	$q="DELETE FROM admission WHERE id='$id'";
	mysqli_query($dbc,$q);
	
	echo "Admssion Data deleted";
	header('refresh:2;url=?do=admission');
		}




if(isset($_POST['update'])==1)
{
	   $id=$_POST['id'];
		$name=$_POST['name'];
		$fname=$_POST['fname'];
		$pyear=$_POST['pyear'];
		$obtmarks=$_POST['obtmarks'];
		$tutmarks=$_POST['tutmarks'];
		$cellno=$_POST['cellno'];
		$address=$_POST['address'];
				
	
 $q2 ="UPDATE admission SET Name='$name', Fname='$fname',PassingYear='$pyear',ObtMarks='$obtmarks',TutMarks='$tutmarks',CellNo='$cellno',Address='$address' WHERE id='$id'";
$r=mysqli_query($dbc,$q2) or die('cant executed');	
	
	echo "data updated";
//	header('refresh:3;url=?do=admission');

}









?>



<?php
if(isset($_GET['editwork'])){

$id=$_GET['id'];

$q ="select * from admission WHERE id='$id'";
$r=mysqli_query($dbc,$q);
$ans=mysqli_fetch_assoc($r);
echo'
<form action="?do=admission" method="post">
	<table style="line-height:40px; font-style:oblique; font-size:18px;">
			
            <caption> <h1> Edit Data In Admission Form </h1> </caption>
            <tr><td> Name: </td>         <td> <input type="text" name="name" value="'.$ans['Name'].'"> </td></tr>
            <tr><td> Father Name:</td>   <td><input type="text" name="fname" value="'.$ans['Fname'].'">  </td></tr>
            <tr><td> Passing Year:</td>  <td> <input type="text" name="pyear" value="'.$ans['PassingYear'].'"> </td></tr>
            <tr><td> Obtained Marks:</td><td> <input type="number" name="obtmarks" value="'.$ans['ObtMarks'].'"> </td></tr>
            <tr><td> Total Marks:</td>   <td> <input type="number" name="tutmarks" value="'.$ans['TutMarks'].'"> </td></tr>
            <tr><td> Cell No:</td>        <td><input type="text" name="cellno" value="'.$ans['CellNo'].'">  </td></tr>
            <tr><td> Address:</td>       <td> <textarea name="address" cols="22">   '.$ans['Address'].   '</textarea> </td></tr>
            <tr> <td> <input type="hidden" name="id" value="'.$id.'"</td></tr>
			<tr> <td> <input type="hidden" name="update" value="1"</td></tr>
            <tr><td></td><td><input type="submit"> <input type="reset"></td> </tr>




</table>





</form>
';

}
?>

        
<?php 
echo '<table border="1px">';
echo '<tr><th>Name</th><th>Father Name </th><th>Address </th><th>Passing Year</th><th>Obtain Marks</th><th>Total Marks</th><th> Cell NO </th><th>Edit </th><th>Delete </th>';
$q ="select * from admission order by id DESC";

$r=mysqli_query($dbc,$q);

while($ans=mysqli_fetch_assoc($r))
{
	
echo '<tr><td>'. $ans['Name'].'</td><td>'.$ans['Fname'].'</td><td>'.$ans['Address'].'</td><td>'.$ans['PassingYear'].'</td><td>'.$ans['ObtMarks'].'</td><td>'.$ans['TutMarks'].'</td><td>'.$ans['CellNo'].'</td><td><a href="?do=admission&editwork=edit&id='.$ans['Id'].'">Edit</a></td><td><a href="?do=admission&work=delete&id='.$ans['Id'].'">Delete</a></td></tr>';	
	
}
echo '</table>';


?>