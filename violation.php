<?php 
session_start();

  $con = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($con,'userregistration');
         
$Name =$_POST['Name'];
$Mobile =$_POST['Mobile'];
$Gender =$_POST['Gender'];
$Violation_type =$_POST['Violation_type'];
$Vehicle_details =$_POST['Vehicle_details'];
$License_num =$_POST['License_num'];
$veh_color =$_POST['veh_color'];
$veh_property =$_POST['veh_property'];
$Date_time =$_POST['Date_time'];
$Location =$_POST['Location'];
$Fine_amount =$_POST['Fine_amount'];
$Ticket_no =$_POST['Ticket_no'];
//$ =$_POST[''];

$reg = "INSERT INTO violationreg (Name,Mobile,Gender,Violation_type,Vehicle_details,License_num,veh_color,veh_property,Date_time,Location,Fine_amount,Ticket_no)
values ('$Name','$Mobile','$Gender','$Violation_type','$Vehicle_details','$License_num','$veh_color','$veh_property','$Date_time','$Location','$Fine_amount','$Ticket_no')";
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
