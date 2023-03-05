<?php
session_start();
$insert=false;
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
mysqli_select_db($con,'maa ki rasoi');
$user = $_POST['uname'];
$password  =  $_POST['psw'];
$s="SELECT * FROM admin WHERE  username='$user' && password='$password' ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==0)
{
  echo "<script> alert('Incorrect info')  </script>  ";
  echo "retry again ";
  echo "<adminpanel.php'>click here </a>";
  return false;
  
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        .navbar{
            background-color: lightblue;
            height:40px;
        }
        .navbar a{
            display:inline;
            margin:auto;
            float: right;
            text-decoration: none;
            color: darkblue;
            border:2px solid darkblue
           
        }
    </style>
</head>
<body>
    <div class="navbar">
       <a href="index.php">Logout</a>
       <a href="orderssee.php">See Orders</a>
       <a href="bookings.php">See Bookings</a>
       <a href="contactssee.php">See Contacts info</a>
    </div>







    
</body>
</html>
