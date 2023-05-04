<?php
 require_once('../website/signUpcheck.php');
  if ($conn-> query("use ems") === TRUE) 
  {
    $val="('$name','$lname','$email','$encryptPass','$filename')";
    $sql= "INSERT INTO `Employees`( `First_Name`, `Last_Name`, `Email`,`Password`,`ProfileImage`) VALUES $val";
    if ($conn->query($sql) === TRUE) {
      ?>
      <script>
        alert('Employee Add Successfully');
        window.open('addEmp.php','_self');
      </script>
      <?php
 
    } else {
      // echo $sql;
      ?>
      <script>
      alert('Something Went Wrong Try Again');
       window.open('addEmp.php','_self');
      </script>
      <?php
    }
  }
?>  