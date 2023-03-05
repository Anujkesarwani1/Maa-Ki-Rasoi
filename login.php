<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="icon" href="images/foodie3.jpg " type="image-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet"> <!-- navbar -->

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>


<body>


  <!-- header section ends -->
  <!-- login section starts  -->

  <div class="content" style="display: flex;padding: 90px;">
    <div class="image">
      <img src="chef2.jpg" alt="">
    </div>
    <div class="container">
      <h1>Sign In to <b>Maa Ki Rasoi</b></h1>
      <p>“It's easier to be faithful to a restaurant than it is to a woman.”</p>
       <div class="forms">
       <div class="center">
       <form action="loginvalidation.php" method="post" onsubmit="return fun()" >
       <input type="text"  placeholder="Username" name="email" id="email" style="border: none;">
      <hr style="margin-top: 0px">
      <input type="password"  placeholder="Password" name="password" id="password" style="border: none;">
      <hr style="margin-top: 0px">
      <div id="forget">
        <input type="checkbox" id="remember">
        <label for="remember">Remember me</label> <br>
        <a href="#" id="forgetpassword">forget Password</a>? <br>
      </div>
      <button id="btn" type="submit" name="submit" >Log In</button>
      <p id="register" style="color: black;margin-top: 10px;">Don't have an account?<a href="register.php"> Register here</a></p>
      </form>
      </div>
      </div>
      
      <script>
        function fun() {
         
          var y=document.getElementById("email").value;
          var z=document.getElementById("password").value;
          
          if(y=="")
          {
            alert("email field should not be empty");
            return false;
          }
          else if(z=="")
          {
            alert("PASSWORD FIELD IS EMPTY");
            return false;
          }
          else{
            return true;
          }

        }
      </script>
  

  <!-- login section ends  -->
</body>

</html>