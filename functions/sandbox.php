<?php

function  news($dbc){
	
						$q="SELECT * FROM  news order by date DESC LIMIT 6 ";
						$r=mysqli_query($dbc,$q);
						while($ans=mysqli_fetch_assoc($r))
						{
							echo'<h3>'.$ans['date'].'</h3>';
							echo '<hr style="border:none;background-color:#dedede;color:#dedede;height:1px;">';
						   echo '<p>'. $ans['body'].'</p>';
						}
					}

function faculty_pic($dbc){

$q="SELECT * FROM  faculty ";
	
	$r=mysqli_query($dbc,$q);
	
	while($abc=mysqli_fetch_assoc($r))
	
	{
 echo   ' <div class="art-postcontent art-postcontent-0 clearfix">
                	<p><img width="209" height="244" alt="" class="art-lightbox" src="images/'. $abc['imagename'] .'" style="float: left; margin-right: 10px;"> <br> Name:'. $abc['name'].'</p><br> <p>Qualification: '. $abc['qualification'].'<br></p><br><p>Mobile No:'. $abc['mobileno'].'<br></p><br><p>Email Address:'. $abc['email'].'</p><br>
                    
                 </div> ';
	
	}
	}



function ach_pic($dbc){

$q="SELECT * FROM  achievements ";
	
	$r=mysqli_query($dbc,$q);
	
	while($abc=mysqli_fetch_assoc($r))
	
	{
 echo   ' <div class="art-postcontent art-postcontent-0 clearfix">
                	
					<p><img width="209" height="244" alt="" class="art-lightbox" src="images/'. $abc['imagename'] .'" style="float: left; margin-right: 10px;"> <br> Descripton:'. $abc['description'].'</p><br>
                    
                 </div> ';
	
	}
	}























?>