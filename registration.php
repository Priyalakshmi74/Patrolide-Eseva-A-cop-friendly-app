<?php 
session_start();

  $con = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($con,'userregistration');
  //$username = "";
  //$email = "";
  
    $username = $_POST['username'];
    //$email = $_POST['email'];
    $password = $_POST['password'];

    $s = "SELECT * FROM usertable WHERE username='$username'";
    $result = mysqli_query($con, $s);
    
    $num=mysqli_num_rows($result);

    if ($num==1) {
      echo '<script type="text/javascript"> alert("Username already exist")</script>'; 

    }
    else{
           $reg = "INSERT INTO usertable (username, password) 
                VALUES ('$username', '$password')";
           mysqli_query($con, $reg);
           echo"registration success";
           header('location:logincon.php');
          
           exit();
    }
  
?>