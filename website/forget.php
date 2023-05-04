<?php  require_once('title.php') ?>

<body>
  <!-- container start -->
  <!-- container start -->
  <div class='container mt-1 bg-light border border-grey '>
    <!-- Header start -->
    <?php require_once('navbar.php') ?>
    <!-- Header End -->

    <div class="row">
      <!-- Right Side Image Start -->
      <div class="col-lg-6 mt-2 mb-5 ">
        <img src='../images/sign.png' class="img-fluid " style='height:100%' />
      </div>
      <!-- Right Side Image End -->

      <!-- Sign Up Form Start-->
      <div class="col-lg-6 mt-5 pt-3 bg-light mb-5 p-3">

        <form action="/action_page.php">
          <h2 class='text-center text-dark p-1 text-center'>Reset Password</h2>
          <div class="mb-3 mt-3 ">
            <label for="email">Enter password:</label>
            <div class="input-group mb-3">
              <input name="password" type="password" value="" class="input form-control" id="password"
                placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
              <span class="input-group-text p-3" onclick="showPass();">
                <i class="fa fa-eye" id="show_eye" aria-hidden="true"></i>
                <i class="fa fa-eye-slash" id="hide_eye" aria-hidden="true" style='display:none'></i>
              </span>
            </div>
          </div>

          <div class="mb-3 mt-3 ">
            <label for="email">Re-Enter Password</label>
            <div class="input-group mb-3">
              <input name="password" type="password" value="" class="input form-control" id="password"
                placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
              <span class="input-group-text p-3" onclick="showPass();">
                <i class="fa fa-eye" id="show_eye" aria-hidden="true"></i>
                <i class="fa fa-eye-slash" id="hide_eye" aria-hidden="true" style='display:none'></i>
              </span>
            </div>
          </div>

          <div class="text-center mt-4">
            <button type="submit" class="btn btn-secondary btn-lg btn-block w-50">Submit</button>
          </div>
        </form>
        <!-- SignUp Form End -->
      </div>
      <!-- row End-->
    </div>

</body>