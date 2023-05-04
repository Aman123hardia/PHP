<?php 
	session_start();
	$profileUser=0;
    $ad=$_SESSION['AdminId'];

	if(isset($ad))
	{
    
		require_once('../website/title.php'); 
		require_once('sideNav.php');
		require_once('../connection/databaseCon.php');
        $EmId = $_GET['EmId'];
		 if($conn-> query("use ems") === TRUE) 
		$qur = "SELECT * FROM `Admin` WHERE `AdminId` = '$EmId'";
		$run = mysqli_query($conn,$qur);
		$record=mysqli_fetch_assoc($run);
		if($record==''){
		$qur = "SELECT * FROM `Employees` WHERE `EmpId` = '$EmId'";
		$run = mysqli_query($conn,$qur);
		$record=mysqli_fetch_assoc($run);
		$profileUser=1;
		}
		 if($record==''){
			$qur = "SELECT * FROM `User` WHERE `UserId` = '$EmId'";
			$run = mysqli_query($conn,$qur);
			$record=mysqli_fetch_assoc($run);
			echo "Meow Meow".$record['EmpId'];
			$profileUser=2;
		 }
	}
	else{
		header('location: ../website/signIn.php');
	}
?>


<div class="col py-3 px-5 border border-light  bg-light">
	<!--  UPDATE HEADER -->
	 <h3 class="text-center mb-5 pb-2 pt-2" style="background-color:rgb(228, 221, 212)"><?php echo ($check==0)? 'Update Admin ':(($check==1 ) ? "Update Employee" : " Update User");?>
		<spna> <img src="../images/addEm.png" width="50" height="50" alt="" class="pl-3"></span>

	</h3> 

   <!-- update Form -->
	 <form action="<?php echo ($profileUser==0)?"adminUpdate.php":(($profileUser==2 ) ? "userUpdate.php" : "updateEmp.php");?>"  enctype="multipart/form-data"  method="post">
		<div class="mb-3 mt-3 ">
			<label for="EmId"><?php echo ($check==0)? 'AdminId':(($check==1 ) ? "EmployeeId" : "UserId");?></label>
			<input type="number"   readonly="readonly" class="form-control" id="EmId" name="EmId" value="<?php echo ($check==0)? $row['AdminId']:(($check==1 ) ? $row['EmpId'] : $row['UserId']);?>">
		</div>

		<div class="mb-2 mt-2 ">
			<label for="fname">First Name</label>
			<input type="text" class="form-control" id="fname" value=<?php echo $record['First_Name'] ?> name="fname"
			required>
		</div>

		<div class="mb-3 ">
			<label for="fname">Last Name</label>
			<input type="text" class="form-control" id="lname" value=<?php echo $record['Last_Name'] ?> name="lname">
		</div>

		<div class="mb-3 mt-3 ">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" value=<?php echo $record['Email'] ?> name="email">
		</div>
		
		<div class="mb-3 mt-1 ">
  		<label for="profileImage">Upload Your Profile:</label>
		  <img src="../website/profile/<?php echo $record['ProfileImage']; ?>" alt="hugenerd" width="50" height="50" id='blah' class="rounded-circle">


		 <span class='pl-5 w-50' style='margin-left:2vw'>
			<label for="files" class="btn text-white bg-secondary">Change Profile Image</label>
			<input type="file"  name="uploaded_file" style="visibility:hidden" class="form-control" onchange="readURL(this)" id="files" accept="png,jpg,svg,jpeg,gif,jfif" value="<?php echo $record['ProfileImage']; ?>" alt=''>
      </span>
		
</div>
		<div class="text-center mt-5">
			<button type="submit" class="btn btn-success text-white btn-lg btn-block w-50">Update</button>
		</div>
	</form>
</div> 

<script>

function readURL(input) {
	console.log("check");
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#blah')
				.attr('src', e.target.result)
		};

		reader.readAsDataURL(input.files[0]);
	}
}
 </script>