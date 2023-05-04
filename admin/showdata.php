<?php
 require_once('../website/title.php');
 require_once('../connection/databaseCon.php')
?>

  <?php
  if ($conn-> query("use ems") === TRUE)
   $result=mysqli_query($conn,"select * from `Employees`");
    $sn=1;
    while($row=mysqli_fetch_array($result)){
    echo var_dump($row);}
?> 