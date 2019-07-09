<?php
if(isset($_GET['deletework'] )=='delete')
{
$id = $_GET['id'];	
	
$q="DELETE FROM marks WHERE rollno='$id'";	
	
mysqli_query($dbc,$q);
	
	echo "Data Deleted";
	header('refresh:3;url=?do=result');	
}


if(isset($_POST['insert'])==1)
{
	
 $rollno =$_POST['rollno'];
 $eng=$_POST['English'];
 $urd=$_POST['Urdu'];
 $mat=$_POST['Math'];
 $phy=$_POST['Physics'];
 $che=$_POST['Chemistry'];
 $bio=$_POST['Biology'];
 $isl=$_POST['Islamyat'];
 $pak=$_POST['PakStudy'];
	
	

$query="INSERT INTO marks (rollno,English,Urdu,Math,Islamyat,Pakstudy,Physics,Chemistry,Biology) VALUES ('$rollno','$eng','$urd','$mat','$isl','$pak','$phy','$che','$bio')";

mysqli_query($dbc,$query) or die('Insert query can not be executed');
	
	echo "data inserted";
	
header('refresh:3;url=?do=result');	
}



?>

<form  action="?do=result" method="post">
    <h2 align="center"> Insert Marks Table </h2>            
    <table align="center" >
         <tr>
            <td>Roll NO</td>
            <td><input type = "number" value="" name = "rollno"></td>
         </tr>
         <tr>
            <td>Urdu</td>
            <td><input type ="text" value="" name = "Urdu"></td>
         </tr>
         <tr>
            <td>English</td>
            <td><input type ="number" value="" name = "English"></td>
         </tr>
         <tr>
            <td>Mathematics</td>
            <td><input type ="number" value="" name = "Math"></td>
         </tr>
          <tr>
            <td>Physics</td>
            <td><input type ="number" value="" name = "Physics"></td>
         </tr>
          <tr>
            <td>Chemistry</td>
            <td><input type ="number" value="" name = "Chemistry"></td>
         </tr>
          <tr>
            <td>Biology</td>
            <td><input type ="number" value="" name = "Biology"></td>
         </tr>
         
         <tr>
            <td>Islamyat</td>
            <td><input type ="number" value="" name = "Islamyat"></td>
         </tr>
         
         
          <tr>
            <td>Pak Study</td>
            <td><input type ="number" value="" name = "PakStudy"></td>
         </tr>
         
         
         
         
             <tr>
            <td></td>
            <td><input type ="hidden" value="1" name ="insert"></td>
         </tr>
         
         <tr>
            <td></td>
           <td><input type ="submit"  name="" value="Submit"><input type ="reset" value="Reset"></td>
         </tr>
     </table> 
     
    </form>
    
   <br><br> 
     <?php
$q="SELECT * FROM  marks";
$r=mysqli_query($dbc,$q);

echo '<table border="1px" align="center"> <tr> <th> Roll No </th><th> English </th><th> Urdu </th><th> Maths </th><th>Pak Study  </th><th> Islamyat </th><th>Physics  </th><th> CHemistry </th><th> Biology </th><th> Edit </th><th> Delete </th></tr>';
while($ans=mysqli_fetch_assoc($r)){

echo '	
<tr><td>'.$ans['rollno'].'</td><td>'. $ans['English'] .'</td><td>' .$ans['Urdu']. '</td><td>'. $ans['Math']. '</td><td>'. $ans['Pakstudy'] .'</td><td>'. $ans['Islamyat']. '</td><td>' .$ans['Physics'] .'</td><td>'. $ans['Chemistry']. '</td><td>' .$ans['Biology'] .'</td><td><a href="?do=editresult&work=edit&id='.$ans['rollno'].'">Edit </a> </td><td><a href="?do=result&deletework=delete&id='.$ans['rollno'].'">Delete </a> </td>                        </tr>';	
	
}

echo "</table></br></br>";
	?>
 