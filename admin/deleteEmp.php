<?php 
session_start();
if(isset($_SESSION['AdminId']))
{
  require_once('../connection/databaseCon.php');
  if ($conn-> query("use ems") === TRUE) 
  {
		$id=$_REQUEST['EmId'];
		
		// Delete Employee
				
		$qry = "DELETE FROM `Employees` WHERE `EmpId` = '$id'";
		$result = mysqli_query($conn,$qry);

		echo "".$result;
		// 	if($result == true){
		// 		?>
				<script>
		// 		alert('Data Deleted Successfully');
		// 		window.open('adHome.php','_self');
		// 		</script>
		 	<?php
		// }
	}
}
else{
  header('location: ../website/signIn.php');
}
?>
