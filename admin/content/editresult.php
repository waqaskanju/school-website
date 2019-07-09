<?php

if(isset($_POST['update'])==1){
	
 $rollno =$_POST['id'];
 $eng=$_POST['English'];
  $urd=$_POST['Urdu'];
  $mat=$_POST['Math'];
  $phy=$_POST['Physics'];
 $che=$_POST['Chemistry'];
  $bio=$_POST['Biology'];
 $isl=$_POST['Islamyat'];
 $pak=$_POST['PakStudy'];	
	
 $query="UPDATE marks SET English='$eng', Urdu='$urd' , Math='$mat' , Physics='$phy', Chemistry='$che' , Biology='$bio', Islamyat='$isl' , Pakstudy='$pak' WHERE rollno = '$rollno'";

mysqli_query($dbc,$query) or die('error in update');	
	
	
	echo 'Data is sucessfully updated';
	
	header('refresh:3; url=?do=result');
	
	
	
	
	
	}


















if(isset($_GET['work']))
{
$id = $_GET['id'];

$q="SELECT * FROM marks WHERE rollno='$id'";
$r=mysqli_query($dbc,$q);

while($ans=mysqli_fetch_assoc($r))
{
echo'

<form  action="?do=editresult" method="post">
    <h2 align="center"> Insert Marks Table </h2>            
    <table align="center" >
         <tr>
            <td>Roll NO</td>
            <td><input type = "number"  readonly="readonly" name = "rollno" value="'.$ans['rollno'].'"</td>
         </tr>
         <tr>
            <td>Urdu</td>
            <td><input type ="text"  name = "Urdu"  value="'.$ans['Urdu'].'" </td>
         </tr>
         <tr>
            <td>English</td>
            <td><input type ="number"  name = "English" value="'.$ans['English'].'"></td>
         </tr>
         <tr>
            <td>Mathematics</td>
            <td><input type ="number" value="'.$ans['Math'].'" name = "Math" > </td>
         </tr>
          <tr>
            <td>Physics</td>
            <td><input type ="number" value="'.$ans['Physics'].'" name = "Physics"></td>
         </tr>
          <tr>
            <td>Chemistry</td>
            <td><input type ="number" value="'.$ans['Chemistry'].'" name = "Chemistry"></td>
         </tr>
          <tr>
            <td>Biology</td>
            <td><input type ="number" value="'.$ans['Biology'].'" name = "Biology"></td>
         </tr>
         
         <tr>
            <td>Islamyat</td>
            <td><input type ="number" value="'.$ans['Islamyat'].'" name = "Islamyat"></td>
         </tr>
         
         
          <tr>
            <td>Pak Study</td>
            <td><input type ="number" value="'.$ans['Pakstudy'].'" name = "PakStudy"></td>
         </tr>
         
         
         
         
             <tr>
            <td></td>
            <td><input type ="hidden" value="1" name ="update"></td>
         </tr>
		 
		   <tr>
            <td></td>
            <td><input type ="hidden" value="'.$ans['rollno'].'" name ="id"></td>
         </tr>
         
         <tr>
            <td></td>
           <td><input type ="submit"  name="" value="Update"></td>
         </tr>
     </table> 
	 
	 </form>
';
}
}
?> 
	 
	 