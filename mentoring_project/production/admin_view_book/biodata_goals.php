<?php include('mentoring_book_header.php'); ?>
 
 
 <?php
 
  					
			if(isset($_GET['action']))
{
	if($_GET['action']=='edit')
	{
	$id=$_GET['id'];
 
 ?>
 
 
	
	
<body>






<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    
	
	
	
	  <?php include('biodata_section_sidebar.php'); ?>

    <div id="main">
      

        <div class="content">
           <!-- <h2 class="content-subhead">How to use this layout</h2>-->
		   
		   
		   
	




		   
	<br>	   
 
 

    
			
<form class="pure-form pure-form-stacked" action="" method="post">

 <fieldset>

   <h2 class="content-subhead">Accomodation Details</h2>
			
			<table class="pure-table pure-table-horizontal">
        
           
	<?php
  
  
  
  
    
		$sql11="SELECT goal_id FROM `tbl_mn_lifegoals` WHERE `goal_stud_id`='$id'";
		$r1= mysqli_query($con,$sql11);
		
		
		
		$row1 = mysqli_fetch_array($r1, MYSQLI_ASSOC) ;
		
		
		if($row1!="")
		{
		
		


			echo" <thead>
			<tr>
			  
          <th>SlNo</th>
            <th>Personal goals</th>
            <th>Professional goals</th>
            <th>Social goals</th>
        </tr>
    </thead>

    <tbody>";
	
			
			 
			
		
		
		$sql="SELECT * FROM `tbl_mn_lifegoals` WHERE `goal_stud_id`='$id'";
		$r= mysqli_query($con,$sql);
		
		
		
		while($row=mysqli_fetch_assoc($r))
		{  $stid=$row["goal_stud_id"];
				
				
			 echo"<tr>";
        echo"<td>#</td>";
            echo"<td>".$row['goal_perso']."</td>";
            echo"<td>".$row['goal_prof']."</td>";
           echo"<td>".$row['goal_soc']."</td>";
            
			 
			echo"</tr>";
		
		
		
		
		}
		    echo"</tbody>";

		
		}	
		else 
		{			
			
			echo"No data available";	
		
		}
}
}
	
   
	
       

  

 ?>
 
 </table>
 </fieldset>



		
	
  


        
   



















	
		   
		<br>   
		   
	 
		   

</form>	
		   


<?php		   
if(isset($_POST["submit"])) {
	
	
	//$stid=$_POST["stuid"];
	
				$goal_perso=$_POST["goal_perso"];
				$goal_prof=$_POST["goal_prof"];
				$goal_soc=$_POST["goal_soc"];
				
				
				
	


	
								
		
	$sqbio1="INSERT INTO `tbl_mn_lifegoals`(`goal_stud_id`, `goal_perso`
	, `goal_prof`, `goal_soc`) VALUES ('$id','$goal_perso','$goal_prof','$goal_soc')"; 
	
	mysqli_query($con,$sqbio1);
	echo $sqbio1;
	
	
	
	
	?>
	
	<a id="anch1" href="biodata_goals.php?action=edit&id=<?php echo $id; ?>"></a>
    <script>alert("Inserted Successfully");
	
    document.getElementById("anch1").click();
    </script>
    <?php

	
	
	
	
}
?>



	   
		   
		   
        </div>
    </div>
</div>




<script src="js/ui.js"></script>

</body>
</html>
