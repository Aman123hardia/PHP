
<?php 
	session_start();
	if(isset($_SESSION['AdminId']))
	{
		require_once('../website/title.php'); 
	
	}
	else{
			header('location: ../website/signIn.php');
	}



require_once('sideNav.php');
?>
<!--Container-->
<!-- <div class="col py-3"> -->
<div class="col py-3 px-5 border border-light  bg-light" style='overflow:scroll'>
	<!-- Header -->
	<div class='header' style='position:sticky; top: 0;z-index: 999;'>
	<h3 class=" text-center mb-5 pb-2 pt-2" style="background-color:rgb(228, 221, 212)">Add Employee
		<spna> <img src="../images/addEm.png" width="50" height="50" alt="" class="pl-3"></span>
	</h3>

	<!-- Add Employee Form -->
	<form action="empladd.php" enctype="multipart/form-data"  method="post">
	<?php require_once('../website/formSignUp.php'); ?>

	<!-- show hide password function  -->
	
<script src='../website/pass.js'></script>
	<div class="text-center mt-5">
			<button type="submit" class="btn btn-success text-white btn-lg btn-block w-50">Add</button>
		</div>
	</form>
</div>
</div>
