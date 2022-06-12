<?php include('config/connect.php'); ?>


<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
    <title>Search Result</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="css/style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="css/style.responsive.css" media="all">


    <script src="javascript/jquery.js"></script>
    <script src="javascript/script.js"></script>
    <script src="javascript/script.responsive.js"></script>


</head>
<body>
<div id="art-main">

<!--HTML Header-->
<?php include('template/header.php');?>
<!-- End of Header-->

<div class="art-sheet clearfix">
<!--Navigation Starts-->
<?php include('template/nav.php');?>
<!--Navigation End--> 
<div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <h2 class="art-postheader">Search Result</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 50%" >
        <br>
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
        	<table>
            <tr> <th colspan="2"> <h4>Search Result By Name  </h4></th> </tr>
              <tr> <td> Please Enter Your Name </td> <td bgcolor="#009900"> <input type="text" name="name"> </td></tr>
              
              <tr> <td> <input type="submit" name="byname" value="Search"> </td> </tr>
            </table>
        
        
        </form>
       
    </div><div class="art-layout-cell" style="width: 50%" >
       <br>
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
        	<table>
            <tr> <th colspan="2"> <h4>Search Result By Roll No  </h4></th> </tr>
              <tr> <td> Please Enter Your Roll No </td> <td bgcolor="#009900"> <input type="text" name="rollno"> </td></tr>
              
              <tr> <td> <input type="submit" name="byrollno" value="Search"> </td> </tr>
            </table>
        
        
        </form>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 100%" >
        <p><br> <?php
/*Search by Roll No*/        
		if(isset($_GET['rollno']))
{
	$selected=$_GET['rollno'];
echo '<table border="1" cellpadding="10px"><tr><th colspan="5"> Name </th> <th> Father Name </th> <th> Roll_No </th> <th> Class </th>'; 

  $q="SELECT student.rollno, student.name, student.fname, student.Class, marks.English, marks.Urdu, marks.Physics, marks.Chemistry, marks.Math, marks.Biology, marks.Pakstudy, marks.Islamyat FROM student INNER JOIN marks ON student.rollno = marks.rollno WHERE student.rollno='$selected'";
 
	
	  $r =mysqli_query($dbc,$q);
	 $result=mysqli_fetch_assoc($r);
	   if($result=="" || empty($result))
		{
	echo  " <p id='red'> No Record Found.Please Correct Your Roll No </p>";
	    }
		else
		{
		echo "<tr><td colspan='5'>".$result['name']."</td> <td>".$result['fname']."</td> <td>".$result['Class']."</td> <td>".$result['rollno']."</td> </tr>" ;	
	
echo '<tr><td> English  </td> <td> Urdu </td> <td> Math </td> <td> Islamayat </td> <td> Pakstudy </td> <td> Physics </td> <td> Chemistry </td> <td> Biology </td>'; 	

echo "<tr><td>".$result['English']."</td> <td>".$result['Urdu']."</td> <td>".$result['Math']."</td> <td>".$result['Islamyat']."</td> <td>".$result['Pakstudy']."</td><td>".$result['Physics']."</td><td>".$result['Chemistry']."</td><td>".$result['Biology']."</td> </tr>" ;
		
		}
		
		echo '</table>';
}
		
		

/*Search by Name*/        

		if(isset($_GET['name']))
{
	$selected=$_GET['name'];
echo '<table border="1" cellpadding="15px"><tr><th colspan="5"> Name </th> <th> Father Name </th> <th> Roll_No </th> <th> Class </th>'; 

  $q="SELECT student.rollno, student.name, student.fname, student.Class, marks.English, marks.Urdu, marks.Physics, marks.Chemistry, marks.Math, marks.Biology, marks.Pakstudy, marks.Islamyat FROM student INNER JOIN marks ON student.rollno = marks.rollno WHERE student.name='$selected'";
 
	
	  $r =mysqli_query($dbc,$q);
	 $result=mysqli_fetch_assoc($r);
	   if($result=="" || empty($result))
		{
	echo  " <p id='red'> No Record Found.Please Correct Your  Name </p>";
	    }
		else
		{
		echo "<tr><td colspan='5'>".$result['name']."</td> <td>".$result['fname']."</td> <td>".$result['Class']."</td> <td>".$result['rollno']."</td> </tr>" ;	
	
echo '<tr><td> English  </td> <td> Urdu </td> <td> Math </td> <td> Islamayat </td> <td> Pakstudy </td> <td> Physics </td> <td> Chemistry </td> <td> Biology </td>'; 	

echo "<tr><td>".$result['English']."</td> <td>".$result['Urdu']."</td> <td>".$result['Math']."</td> <td>".$result['Islamyat']."</td> <td>".$result['Pakstudy']."</td><td>".$result['Physics']."</td><td>".$result['Chemistry']."</td><td>".$result['Biology']."</td> </tr>" ;
		
		}
		
		echo '</table>';
}
		
		

		
		
		
		
		?>


		
		
		</p>
    </div>
    </div>
</div>
</div>


</article></div>
                    </div>
                </div>
            </div>
            
            <!--footer Here-->
            
            <?php  include('template/footer.php'); ?>

    </div>
</div>


</body></html>