<?php
  require_once('../connection/databaseCon.php');
  $email=$_POST["email"];
  $pass=$_POST["password"];
  echo $email,$pass;
  if ($conn-> query("use ems") === TRUE) 
  {
    $result= mysqli_query($conn,"select * from `Admin` where `Email`='$email'");  //check email in database
    $row=mysqli_fetch_array($result); 
    $decrypt =$row['Password'];
    $verify=password_verify($pass , $decrypt);

    if($verify){
    
      session_start();
      $_SESSION['AdminId']=$row['AdminId'];
  
      ?>
      <script>
        alert('SignIn Successfully');
        window.open('../admin/adHome.php','_self');
      </script>
      <?php
    }
    else {
      $result= mysqli_query($conn,"select * from `Employees` where `Email`='$email'");  //check email in database
      $row=mysqli_fetch_array($result); 
      $decrypt =$row['Password'];
      $verify=password_verify($pass , $decrypt);
  
      if($verify){
      
        session_start();
        $_SESSION['AdminId']=$row['EmpId'];
    
        ?>
        <script>
          alert('SignIn Successfully');
          window.open('../admin/profile.php','_self');
        </script>
        <?php
  }
  else{


    $result= mysqli_query($conn,"select * from `User` where `Email`='$email'");  //check email in database
      $row=mysqli_fetch_array($result); 
      $decrypt =$row['Password'];
      $verify=password_verify($pass , $decrypt);
  
      if($verify){
      
        session_start();
        $_SESSION['AdminId']=$row['UserId'];
    
        ?>
        <script>
          alert('SignIn Successfully');
          window.open('../admin/adHome.php','_self');
        </script>
        <?php
  }
  else{
    ?>
    <script>
      alert("email and Password not Math");
      window.open('signIn.php','_self');
    </script>
    <?php
    
  } 
}
  
}
    $conn->close();
  }
?> 