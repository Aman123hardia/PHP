<?php 
session_start();
if(isset($_SESSION['AdminId']))
{
  require_once('../connection/databaseCon.php');
  if ($conn-> query("use ems") === TRUE) 
  {
		$id=$_REQUEST['UserId'];
		// Delete Employee
				
		$qry = "DELETE FROM `UserId` WHERE `AdminId` = '$id'";
		$result = mysqli_query($conn,$qry);
			if($result == true){
				?>
				<script>
				alert('Data Deleted Successfully');
				window.open('adminlist.php','_self');
				</script>
			<?php
		}
	}
}
else{
  header('location: ../website/signIn.php');
}
?>
