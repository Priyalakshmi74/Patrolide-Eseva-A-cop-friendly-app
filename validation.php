<?php 
session_start();


  $con = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($con,'userregistration');
  //$username = "";
  //$email = "";
  
    $username = $_POST['username'];
    //$email = $_POST['email'];
    $password = $_POST['password'];

    $s = "SELECT * FROM usertable WHERE username='$username' && password='$password'";
    $result = mysqli_query($con, $s);
    //$num = "SELECT * FROM users WHERE email='$email'";
     //or die(mysqli_error($db));
    //$res_e = mysqli_query($db, $sql_e)die(mysqli_error($db));
    $num=mysqli_num_rows($result);

    if ($num==1) {
      $_SESSION['username']=$username;
     header('location:home1.php');

    }
    else{
      echo "incorrect username or password";
         header('location:logincon.php');


    }
  
?>