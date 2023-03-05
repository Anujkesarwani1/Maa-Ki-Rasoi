<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="images/foodie3.jpg " type="image-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet"> <!-- navbar -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<style>
    .content .container #username {
        margin-top: 0px;
        margin-bottom: 0px;
    }
</style>

<body>
    <!-- header section start -->


    <!-- header section ends -->

    <!-- login section starts  -->
    <div class="content" style="display: flex;padding: 90px;">
    <div class="image">
      <img src="chef2.jpg" alt="">
    </div>
    <div class="container">
            <h1>Register to <b>Foodie</b></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, adipisci?</p>
           
      <form name="RegForm" action="registervalidation.php" onsubmit="return fun()" method="post"> 
        
        <input type="text" id="fname" placeholder="Username" name="Name" style="border: none;">
       <hr style="margin-top: 0px">
       <input type="text"  placeholder="Email" name="EMail"  style="border: none;">
      <hr style="margin-top: 0px">
      <input type="password"  placeholder="Password" name="Password"  style="border: none;">
      <hr style="margin-top: 0px">
      <input type="password" id="password" placeholder="Confirm Password" name="Cpassword"style="border: none;">
        <hr style="margin-top: 0px"> 
        <div id="forget">
        <input type="checkbox" id="remember">
        <label for="remember">Remember me</label> <br>
        <a href="#" id="forgetpassword">forget Password</a>? <br>
      </div>
      <button id="btn" type="submit" name="submit" >Register</button>
    </form> 
      
      
          <p id="register" style="color: black;margin-top: 10px;">Have an account?<a href="login.php"> Log In</a></p>
 
            
            </div>
           

            <script> 
	function fun() { 
		var name = document.forms["RegForm"]["Name"]; 
		var email = document.forms["RegForm"]["EMail"]; 
		var password = document.forms["RegForm"]["Password"]; 
		var cpassword = document.forms["RegForm"]["Cpassword"]; 

		if (name.value == "") { 
			window.alert("Please enter your name."); 
			name.focus(); 
			return false; 
		} 

		if (email.value == "") { 
			window.alert( "Please enter a valid e-mail address."); 
			email.focus(); 
			return false; 
    } 
    // if(email.value!=" /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/")
    // {
    //   window.alert("please enter email in proper format");
    //   email.focus();
    //   return false;
    // }

		if (password.value == "") { 
			window.alert("Please enter your password"); 
			password.focus(); 
			return false; 
		} 

		if(cpassword.value==""){
      window.alert("Please enter your confirm password");
      cpassword.focus();
      return false;
    } 
    if(cpassword.value!=password.value)
    {
      alert("please enter same password");
      return false;
    }

		return true; 
	} 
</script> 

    
    <!-- login section ends  -->
</body>

</html>