<?php


if(isset($_POST['update'])==1)
{
	   $id=$_POST['id'];
		$body=$_POST['body'];
		$date=$_POST['date'];
$q ="UPDATE news SET body='$body', date='$date' WHERE id='$id'";
$r=mysqli_query($dbc,$q);	
	
	echo "data updated";
	header('refresh:3;url=?do=news');
}

$id=$_GET['id'];
$q ="select * from news WHERE id='$id'";
$r=mysqli_query($dbc,$q);
$ans=mysqli_fetch_assoc($r);


echo'
<div style="">
<form name="frm" action="#" method="post">
      <table cellpadding="10px" >
   <caption> <h1>Edit News </h1> </caption>
    <tr> <td> Body:</td><td><textarea name="body" cols="20" rows="5">'.$ans['body']. '</textarea> </td></tr>
 
     
     <tr>
     <td>Date:</td><td><input type="date" name="date" value="$ans[date]"> </td>
     </tr>
    <tr> <td><input type="hidden" name="update"> </td> </tr>
	<tr> <td><input type="hidden" name="id" value="'.$_GET['id'].'"> </td> </tr>
     <tr><td><input type="submit" value="submit"></td>
        <td align="right"><input type="reset" value="clear"></td></tr>
        </table>
        </form>
<br> <br>        
</div>  

';

?>