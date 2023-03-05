<?php
session_start();
$insert=false;
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
mysqli_select_db($con,'maa ki rasoi');





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
       <a href="bookings.php">See Orders</a>
    </div>



<div id="bookings">
<h3  >Contacts Info</h3>
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">message</th>
      <th scope="col">date-time     </th>
     
    </tr>
  </thead>
  <tbody>
      <?php
     

   $select="SELECT * FROM `contact`";
   $query= mysqli_query($con,$select);
   $nums= mysqli_num_rows($query);
   while($res=mysqli_fetch_array($query))
{


?>
    <tr>
      

      <td><?php echo $res['name'];  ?></td>
      <td><?php echo $res['email'];  ?></td>
      <td><?php echo $res['phonenumber'];  ?></td>
      <td><?php echo $res['msg'];  ?></td>
      <td><?php echo $res['date-time'];  ?></td>
      
      
    </tr>
    
  </tbody>
  <?php 

}
?>
</table>
</div>



    
</body>
</html>
