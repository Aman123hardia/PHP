<?php 
session_start();
if(isset($_SESSION['AdminId']))
{
  require_once('../connection/databaseCon.php');
  if ($conn-> query("use ems") === TRUE) 
  {
		$id=$_REQUEST['EmpTaskId'];
		
		// Delete Employee
				
		$qry = "DELETE FROM `EmployeesTask` WHERE `EmpTaskId` = '$id'";
		$result = mysqli_query($conn,$qry);
			if($result == true){
				?>
				<script>
				alert('task Deleted Successfully');
				window.open('today.php','_self');
				</script>
			<?php

			
		}
	}
}
else{
  header('location: ../website/signIn.php');
}
?>
