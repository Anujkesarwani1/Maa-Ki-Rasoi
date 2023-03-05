<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Order Now</span> </h2>
          <p> माँ के हाथ का "खाना और चांटा" दोनों लाजवाब थे ,
                                                   कितने भी खा लो पेट नहीं भरता!!.</p>
        </div>
      </div>

      
      <div class="container mt-5">

        

        <form action="ordermail.php" method="post" class="php-email-form" onsubmit="return fun()">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
                data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="varchar" class="form-control" name="phone" id="phone" placeholder="Phone Number"
                data-rule="email" data-msg="Please enter a valid email" />
             </div>
          <div class="form-group mt-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email"
              data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
          </div>
          <div class="col-md-6 form-group">
          <label for="starters">Starters</label>
           <select name="starters" id="starters">
                  <option value="select">Select</option>
                  <option value="Paneer tikka">Paneer Tikka --Rs 120</option>
                  <option value="Chilli Paneer">Chilli paneer --Rs 100</option>
                  <option value="veg Burger">Veg Burger --Rs 100</option>
                  <option value="none">None</option>
                  
           </select>
      
           </div>
           <div class="col-md-6 form-group mt-3 mt-md-1">
           <label for="Maincourse">Main Course</label>
           <select name="Maincourse" id="Maincourse">
                  <option value="select">Select</option>
                  <option value="Dal Makhani">Dal Makhani --Rs 110</option>
                  <option value="Butter paneer Masala">Butter Paneer Masala --Rs 150</option>
                  <option value="Mix Veg">Mix Veg --Rs 150</option>
                  <option value="none">None</option>
                  
           </select>
      
           </div>
           <div class="col-md-6 form-group mt-3 mt-md-1">
           <label for="Breads">Breads</label>
           <select name="Breads" id="Breads">
                  <option value="select">Select</option>
                  <option value="Butter naan">Butter Naan --Rs 4</option>
                  <option value="Plain Naan">Plain naan --Rs 2</option>
                  <option value="Tawa roti">Tawa Rot --Rs 1</option>
                  <option value="none">None</option>
                  
           </select>
      
           </div>
           <div class="col-md-6 form-group mt-3 mt-md-1">
           <label for="Thali">Veg Thali</label>
           <select name="Thali" id="Thali">
                  <option value="select">Select</option>
                  <option value="Uttar Thali">Uttar Thali --Rs 250</option>
                  <option value="Rajasthani Thali">Rajasthani --Rs 250</option>
                  <option value="Maharashtrian Thali">Maharashtrian Thali-Rs 250</option>
                  <option value="none">None</option>
                  
           </select>
      
           </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="msg" rows="5" data-rule="required"
              data-msg="Please write something for us" placeholder="Message"></textarea>
           </div>
           
         
          <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
          <div>

        </form>

      </div>
    </section>
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