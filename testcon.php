

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=div.container, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@500&display=swap" rel="stylesheet">
   
    
</head>

<body>

    <div class="container">
        <h1>CONTACT US</h1>
     
        <form action="mail.php" class="form"   method="post" onsubmit="return fun()">
            <div class="name">
                <span>FULL NAME</span>
                <input type="text" class="input" placeholder="Name You Name" name="name" id="name">
            </div>
            <div class="phn">
                <span>PHONE NUMBER *</span>
                <input type="varchar" class="input" placeholder="Phone Number" name="phone" id="phone">
            </div>
            <div class="email">
                <span>EMAIL</span>
                <input type="email" class="input" placeholder="Email" name="email" id="email">
            </div>
            <div class="msg">
                <span>MESSAGE</span>
                <textarea name="msg" class="input" placeholder="your message here..." ></textarea>
            </div>
            <button class="btn" type="submit" name="submit">Submit</button>
            <button class="btn" type="reset">Reset</button>
        </form>
        <ul class="ul">
            <li class="li">Our customer care executive will call you in working hours</li>
            <li class="li">Please provide valid contact details</li>
            <li class="li">6 working days(mon-sat)</li>
            <li class="li">10am-8pm</li>
        </ul>
        

    </div>
    <script>
        function fun() {
          var x=document.getElementById("name").value;
          var y=document.getElementById("email").value;
          var z=document.getElementById("phone").value;
          
          if(x=="")
          {
            alert("name field should not be empty");
            return false;
          }
          else if(y=="")
          {
            alert("email should not be empty");
            return false;
          }
          else if(z.length>10||z.length<10)
          {
            alert("phone number should not be less than or greater than 10");
            return false;l
          }
          else{
            return true;
          }

        }
      </script>

    
    
</body>

</html>