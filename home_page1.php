<?php
$con = mysqli_connect("localhost","root","","bookappoint");
  // echo"connection established";
  if($con===false )
  {	  
	  die("failed to connect!");	  
  }				
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $location = $_POST['location'];
  $speciality = $_POST['speciality'];
  $date = $_POST['date'];

  $query="INSERT INTO `booking` ( `name`, `gender`, `email`, `phone`, `location`, `speciality`, `date`) VALUES ( '$name', '$gender', '$email', '$phone', '$location', '$speciality', '$date')";

$result = mysqli_query($con, $query);
if($result)
{
	session_start();
header("location:revert_page.html");
}
else{
		    echo"ERROR :could not able to execute sql.";
	   }
 
?>
