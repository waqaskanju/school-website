<?php
if(isset($_GET['work'])=='delete'){
	
	$work =$_GET['work'];
	$id =$_GET['id'];
	
	$q="DELETE FROM news WHERE id='$id'";
	mysqli_query($dbc,$q);
	
	echo "News deleted";
	header('refresh:2;url=?do=news');
		}
	
if(isset($_GET['work'])=='edit'){
	
	$work =$_GET['work'];
	$id =$_GET['id'];
	
//	$q="UPDATE news SET body='$body', date='$date' WHERE id=$id";
//	mysqli_query($dbc,$q);
		}
	
	
	
if(isset($_POST['insert'])==1)
{
	$bd=$_POST['body'];
	$dt=$_POST['date'];
	
 $q="INSERT INTO news (body,date) VALUES ('$bd','$dt')";
	mysqli_query($dbc,$q);	
	
	
}	
	
?>


<div style="">
<form name="frm" action="#" method="post">
      <table cellpadding="10px" >
   <caption> <h1>Insert News </h1> </caption>
    <tr> <td> Body:</td><td><textarea name="body" cols="20" rows="5"> </textarea> </td></tr>
 
     
     <tr>
     <td>Date:</td><td><input type="date" name="date"></td>
     </tr>
    <tr> <td><input type="hidden" name="insert"> </td> </tr>
     <tr><td><input type="submit" value="submit"></td>
        <td align="right"><input type="reset" value="clear"></td></tr>
        </table>
        </form>
<br> <br>        
</div>  




        
<?php 
echo '<table border="1px">';
echo '<tr><th>Body</th><th>Date </th><th>Edit </th><th>Delete </th>';
$q ="select * from news order by id DESC";

$r=mysqli_query($dbc,$q);

while($ans=mysqli_fetch_assoc($r))
{
	
echo '<tr><td>'. $ans['body'].'</td><td>'.$ans['date'].'</td><td><a href="?do=editnews&work=edit&id='.$ans['id'].'">Edit</a></td><td><a href="?do=news&work=delete&id='.$ans['id'].'">Delete</a></td></tr>';	
	
}
echo '</table>';


?>