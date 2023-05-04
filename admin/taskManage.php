<!-- 
// $t=time();
// echo($t . "<br>");
// class TaskManage {
//   // Properties
//   public $stTime=;
//   public $color;

//   // Methods
//   function set_name($name) {
//     $this->name = $name;
//   }
//   function get_name() {
//     return $this->name;
//   }
// }
 -->


<!-- // time= -->
<?php
session_start();
$sid= $_SESSION['AdminId'];
if(isset($sid))
{
    require_once('../connection/databaseCon.php');
    $task=$_POST["task"];
    echo $task;
    if ($conn-> query("use ems") === TRUE) 
    {
      $val="('$sid','$task','In Progress')";
      $sql= "INSERT INTO `EmployeesTask`( `EmpId`, `Task_Name`, `Status`) VALUES $val";
      if ($conn->query($sql) === TRUE) {
        ?>
        <script>
          alert('Task Add  Successfully');
          window.open('today.php','_self');
        </script>
        <?php
   
      } else {
        // echo $sql;
        ?>
        <script>
        alert('Something Went Wrong Try Again');
         window.open('today.php','_self');
        </script>
        <?php
      }
    }
}
else{
    header('location: ../website/signIn.php');
}




?>