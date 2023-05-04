<?php
 require_once('signUpcheck.php');
  if ($conn-> query("use ems") === TRUE) 
  {
    $val="('$name','$lname','$email','$encryptPass','$filename')";
    $sql= "INSERT INTO `User`( `First_Name`, `Last_Name`, `Email`,`Password`,`ProfileImage`) VALUES $val";
    if ($conn->query($sql) === TRUE) {
      ?>
      <script>
        alert('SignUp Successfully');
        window.open('signIn.php','_self');
      </script>
      <?php
 
    } else {
      // echo $sql;
      ?>
      <script>
      alert('Something Went Wrong Try Again');
       window.open('signUp.php','_self');
      </script>
      <?php
    }
  }
?>  
