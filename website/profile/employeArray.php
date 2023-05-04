<?php

//multidimensional Array

$employeeData= array("emp1_Name"=>"Aman","emp1_age"=>30,"emp1_email","aman@gmail.com","emp1_contactNu"=>123456789,
      						  "emp2_Name"=>"Shubham","emp2_age"=>40,"emp2_email","shubham@gmail.com","emp2_contactNu"=>987654321,
  									"salary"=>array("emp1"=>30000,"emp2"=>40000)
);

//empty arrays
$employeeDetails = array();
$employeeSalary  = array();
                    
foreach($employeeData as $key => $val){
  if($key!="salary"){
    array_push($employeeDetails,$key."=>".$val);
	} 
  else{
    foreach($val as $key => $val){
      array_push($employeeSalary,$key."=>".$val);
    }
	}
}

//details
echo "<pre> ";
echo "<pre> ".var_dump($employeeData)."<br><br>";
echo "<pre> <br>";
echo var_dump($employeeDetails)."<br><br>";
echo "<pre>".var_dump($employeeSalary)."<br><br>";


?>
















<!-- else{
       for($i=0;$i<sizeof($val);$i++){
         array_push($employeeSalary,$val[$i]);
       }
    }
  -->