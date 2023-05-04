<?php require_once('title.php');?>
<div class='container-fluid border border-grey'>
	<!-- Header Start-->
	<div class='header' style='position:sticky; top: 0;z-index: 999;'>
		<nav class="navbar navbar-expand-lg navbar-light " style="background-color:rgb(228, 221, 212)">
			<img src="../images/icon1.png" width="50" height="50" alt="" class="">
			<h6 class="text-lavender mt-3" style="font-family:red-serin;font-size:2vw;">Employee Management System</h6>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
				aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse ml-5 font-weight-bold pt-2" id="navbarNavDropdown"
				style="font-family:serif ; font-size:18px; margin-left:15vw;">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="#">Features</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="signIn.php">SignIn</a>
					</li>
					<li class="nav-item" id='signUp'>
						<a class="nav-link" href="signUp.php">SignUp</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<!-- Header End-->
<?php 
session_start();
if(isset($_SESSION['AdminId']))
{
    // echo $_SESSION['AdminId'];
	?>
<script>
    window.open('../admin/adHome.php','_self');
</script>
	<?php
}
?>

	<!-- Sliding Start-->
	<div class="container-fluid " id="home">
		<div class="w-100 pt-1 shadow-lg  mb-5 bg-white rounded mt-1" style="background-color: #eee; ">
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
						aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
						aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
						aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="../images/slide1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../images/slide1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../images/slide1.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
					data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
					data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
	</div>

	<!-- Sliding End-->

	<!-- About Us-->
	<div class="container-fluid border border-grey mt-5" id="about">
		<?php require_once('about.php');?>
	</div>

	<!-- Contact Us-->
	<div class="container-fluid border border-grey mb-1 mt-5" id="contact">
		<?php require_once('contact.php');?>
	</div>
	<!-- Footer -->
	<div class="container-fluid border border-grey mt-1">
		<?php require_once('footer.php');
			require_once('../connection/databaseCon.php');
			require_once('../connection/table.php');

			?>
	</div>

</div>
</body>