<?php

session_start();

$server = "localhost";
$username = "root";
$password = "";
$insert= false;
$print=false;

// Create a database connection
$con = mysqli_connect($server, $username, $password);

// Check for connection success
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
//echo "CONNECTED";
mysqli_select_db($con,'maa ki rasoi');
$name = $_POST['Name'];
$email = $_POST['EMail'];
$password  =  $_POST['Password'];
$cpassword=$_POST['Cpassword'];
$s="SELECT * FROM validate WHERE  email='$email'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if( $num==0)
{
    $sql="INSERT INTO  `maa ki rasoi`. `validate`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
    if($con->query($sql) == true){

  //echo "your data has been registered.Our customer care executive will call you shortly";
  $print=true;

      
  //Flag for successful insertion
}
else{
 echo "ERROR: $sql <br> $con->error";
}
}

else{
    
    //echo "username already taken";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="images/foodie3.jpg " type="image-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet"> <!-- navbar -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="content" style="display: flex;padding: 90px;">
<div class="image">
      <img src="chef2.jpg" alt="">
    </div>
    <div class="container">
    <?php
   
    if($print==true)
    {    echo '<p style font-face:"bold">Registered Successfully </p>';
        echo '<a href="login.php">Login Here</a>';
    }

    else{
        echo '<p style text-align:"center" font-face:"bold" width:"50%" margin:"auto";>username already taken</p>';
    }
?>
    </div>

</div>
</body>
</html>

