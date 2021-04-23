<?php 
session_start();

  $con = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($con,'userregistration');
         
$Cop_name =$_POST['Cop_name'];
$Cop_mobile =$_POST['Cop_mobile'];
$Location =$_POST['Location'];
$Accident_type =$_POST['Accident_type'];
$Priority =$_POST['Priority'];
$no_of_people_affected =$_POST['no_of_people_affected'];

$reg = "INSERT INTO emergencyreg (Cop_name,Cop_mobile,Location,Accident_type,Priority,no_of_people_affected)
values ('$Cop_name','$Cop_mobile','$Location','$Accident_type','$Priority','$no_of_people_affected')";
$query_run=mysqli_query($con, $reg);
           echo"registration success";
           if($query_run)
           {
            echo '<script type="text/javascript"> alert("Data saved")</script>';
           }
           else
           {
            echo '<script type="text/javascript"> alert("Data unsaved")</script>';
           }
          
          
           exit();
?>
