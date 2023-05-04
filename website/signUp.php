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
<?php  require_once('title.php') ?>
<body>
  <!-- container start -->
  <div class='container-fluid mt-1 bg-light border border-grey '>	
    <!-- Header start -->
    <?php require_once('navbar.php') ?>
    <!-- Header End -->
   
    <div class="row">
      <!-- Right Side Image Start -->
      <div class="col-lg-6 mt-1 mb-3">
        <img src='../images/sign.png' class="img-fluid " style='height:100%'/>
      </div>
      <!-- Right Side Image End -->
         
      <!-- Sign Up Form Start-->
      <div class="col-lg-6 mt-1 pt-1 bg-light mb-1 p-3">
        
       <form action="formData.php" enctype="multipart/form-data"  method="post">
       <h2 class='text-center text-dark p-1 text-center pb-3' >SignUp Form</h2>
          <?php require_once('formSignUp.php')?>
          <div class="form-check mb-3">
            <span class="w-30 bg-blue" style='margin-left:28%'>
            <a href="forget.php" style='text-decoration:none' >Forget Password</a>
            </span>
            <span class="w-30" style='margin-left:5%'>
               <a href="signIn.php" style='text-decoration:none' >SignIn</a>
            </span>
          </div>
          
          
          <div class="text-center mt-2">
          <button type="submit" class="btn btn-secondary btn-lg btn-block w-50">Submit</button>
          </div>
        </form>
          <!-- SignUp Form End -->
    </div>
    <!-- row End-->
  </div>

</body>

