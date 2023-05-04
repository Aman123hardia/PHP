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
<?php require_once('navbar.php')?>
    <!-- Header End -->
   
    <div class="row">
      <!-- Right Side Image Start -->
      <div class="col-lg-6 mt-2 mb-5 ">
        <img src='../images/sign.png' class="img-fluid " style='height:100%'/>
      </div>
      <!-- Right Side Image End -->
         
      <!-- Sign Up Form Start-->
      <div class="col-lg-6 mt-4 pt-3 bg-light mb-5 p-3">
        
      <form action="sign.php" method="post">
       <h2 class='text-center text-dark p-1 text-center' >SignIn Form</h2>
         <div class="mb-3 mt-3 ">
            <label for="email">Email:</label>
            <input type="email" class="form-control p-2" id="email" placeholder="Enter Your Email" name="email">
          </div>

          <div class="mb-3 mt-3 ">
            <label for="email">Password:</label>
            <div class="input-group mb-3">
                <input name="password" type="password" value="" class="input form-control" id="password" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                  <span class="input-group-text p-3" onclick="showPass();">
                    <i class="fa fa-eye" id="show_eye" aria-hidden="true"></i>
                    <i class="fa fa-eye-slash" id="hide_eye" aria-hidden="true"  style='display:none' ></i>
                  </span>
            </div>
          </div>
            
            <div class="form-check mb-3 pt-3">
             <span class="w-30 bg-blue" style='margin-left:28%'>
               <a href="forget.php" style='text-decoration:none' >Forget Password</a>
              </span>
              <span class="w-30" style='margin-left:5%'>
               <a href="signUp.php" style='text-decoration:none' >SignUp</a>
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
 <script>
  function showPass(){

  let x = document.getElementById("password");
  let y = document.getElementById("show_eye")
  let z = document.getElementById("hide_eye");
  if (x.type === "password") {
    x.type = "text";
    y.style.display='none';
    z.style.display='block';
  } else {
    x.type = "password";
    y.style.display='block';
    z.style.display='none';
    
  }

}
 </script>
</body>
