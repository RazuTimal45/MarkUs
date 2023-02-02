<?php
  include 'connection.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--CSS-->
    <link rel="stylesheet" href="index.css">
      <!--bootstrap icon-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
     <title>MarkUs</title>
</head>
<body>
           <!-- Nav Bar -->
           <nav class="navbar fixed-top navbar-expand-lg" style="background:linear-gradient(rgb(200, 95, 200),#a8c8e2,#68ebca);border-bottom:2px solid white;">
            <div class="container-fluid">
              <a class="navbar-brand text-primary" href="./index.php"><b>MarkUs</b></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="./dashboard.php">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./about.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./OurTeam.php">Our Team</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-primary" type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div>
            </div>
          </nav>       
    <div class="section_1">
       <div class="text-contain">
          <center>
              <h1 style="color:black; transition: 1.2s;" onmouseenter="mouseenter1()" onmouseleave="mouseleave1()" id="main-text">Welcome to <b style="color:red;">MarkUs</b> Company</h1>
              <p style="color:black; transition: 1.2s;" onmouseenter="mouseenter()" onmouseleave="mouseleave()" id="sub-text">Where you get best services</p>
              <a href="./about.php" id="explore">Explore MarkUs</a>
          </center>
       </div>
    </div>
    <div class="row justify-content-between pt-5 pb-4" style=" background: linear-gradient(rgb(229, 113, 215), yellow,red);border-top: 1px solid white;">
      <div class="col-md-5 ps-5 m-5" data-aos="flip-right" data-aos-duration="1500">
        <img src="images/website.jpeg" class="img-fluid rounded-5" alt="">
      </div>
      <div class="col-md-5 pe-5 m-5" data-aos="flip-left">
          <h2>Creating Website</h2>
          <p>"We specialize in creating visually stunning websites and delivering them on time."Our goal is to help you establish a strong online presence that will help you reach your target audience and achieve your business objectives. Whether you're looking to create a simple brochure website or a complex e-commerce platform, we have the skills and expertise to deliver a website that will fulfill your expectations.</p>
      </div>
    </div>
    <div class="row justify-content-between pt-4 pb-4" style=" background: linear-gradient(#F0F8FF,#7CB9E8, purple);">
      <div class="col-md-5 ps-5 m-5" data-aos="flip-right" data-aos-duration="1500">
          <h2>Content Writing</h2>
          <p>"We specialize in crafting unique and original content that stands out from the crowd."If you're looking for a reliable and professional content writing company that can help you achieve your communication and marketing goals, then look no further. Contact us today to discuss your project and find out how we can help you achieve your business objectives.</p>
      </div>
      <div class="col-md-5 pe-5 m-5" data-aos="flip-left" data-aos-duration="1500">
        <img src="images/blog.jpeg" class="img-fluid rounded-5" alt="">
      </div>
    </div>
    <div class="row justify-content-between pt-4 pb-5" style=" background: linear-gradient(#804717,#7CB9E8, rgb(41, 3, 41));">
      <div class="col-md-5 ps-5 m-5" data-aos="flip-right" data-aos-duration="1500">
        <img src="images/videoEdit.jpeg" class="img-fluid rounded-5" alt="">
      </div>
      <div class="col-md-5 pe-5 m-5" data-aos="flip-left" data-aos-duration="1500">
         <h2>Video Editing</h2>
         <p>Whether you're looking for a simple video edit, a complex animation, color grading, or visual effects, we have the skills and expertise to bring your vision to life.If you're looking for a professional video editing company that can help you create visually stunning and engaging videos that will help you achieve your goals, then look no further. Contact us today to discuss your project and find out how we can help you achieve your objectives.</p>
      </div>
    </div>
    <div class="row justify-content-between pt-4 pb-5" style=" background: linear-gradient(#808080,#ffa500, #a32cc4);">
      <div class="col-md-5 ps-5 m-5" data-aos="fade-up" data-aos-duration="1500">
      <h2>Digital Marketing</h2>
         <p>Our company is considered one of the best digital marketing companies due to our focus on delivering results for our clients. Our team of experts stay up-to-date on industry trends and use data-driven strategies to create custom campaigns for each unique business. Our services cover a range of digital marketing techniques, including search engine optimization (SEO), pay-per-click advertising (PPC), social media marketing, email marketing, content marketing. Our goal is to help businesses reach their full potential by effectively reaching their target audience and driving conversions through digital channels.</p>
      </div>
      <div class="col-md-5 pe-5 m-5" data-aos="flip-left" data-aos-duration="1500">
      <img src="images/market.jpeg" class="img-fluid rounded-5" alt="">
      </div>
    </div>
    <div class="section_2">
    <div class="registration">
       <form id="registration" onsubmit="return ValidateForm()" method="post">
       <fieldset>
       <legend><h3 style="color:black;text-align:center;">Register Here</h3></legend>
        <label for="fname">First Name :</label>
        <br>
        <input type="text" name="fname" id="fname" placeholder="Enter Your First Name..." autofocus="">
        <label id="errFname"></label>
        <br>
        <label for="lname">Last Name :</label>
        <br>
        <input type="text" name="lname" id="lname" placeholder="Enter Your Last Name...">
        <label id="errLname"></label>
        <br>
        <label for="age">Your Age:</label>
        <br>
        <input type="number" name="age" id="age"  placeholder="How old are you?">
        <label id="errAge"></label>
        <br>
        <label for="email">Email :</label>
        <br>
        <input type="email" name="email" id="email" placeholder="Your Email..."> 
        <label id="errEmail"></label>
        <br>
        <label for="password">Password:</label>
        <br>
        <input type="text" name="password" id="password" placeholder="Enter Your Password..">
        <label id="errPassword"></label>
        <br>
        <label for="phone">Your Phone Number:</label>
        <br>
        <input type="number" name="phone" id="phone" placeholder="Your Phone number...">
        <label id="errPhone"></label>
        <br>
        <label for="gender">Gender :</label>
        <br>
        <input type="text" name="gender" id="gender" placeholder="Gender">
        <label id="errGender"></label>
        <br>
        <label for="lang">Known coding Language</label>   
        <br> 
        <input type="text" name="lang" type="lang" id="lang" placeholder="Enter Programming languages you know...">
          <datalist id="lang">
            <option value="HTML">HTML</option>
            <option value="PHP">PHP</option>
            <option value="CSS">CSS</option>
            <option value="JS">JS</option>
            <option value="JAVA">Java</option>
            <option value="Python">Python</option>
            <option value="C++">C++</option>
            <option value="C#">C#</option>
            <option value="C">C</option>
         </datalist>
        <label id="errLang"></label>
        <br>
        <input type="submit" value="Register" name="register" id="register">
        <p class="message">Not registered? <a href="./login.php">Login</a></p>
        </fieldset> 
      </form>
    </div><!--end Register-->
  </div>
  <footer>
    <div class="row justify-content-around ms-5">
      <div class="col-md-3" style="border-left:1px solid white;">
         Our Team 
         <ul>
          <li>Raju Timalsina</li>
          <li>Nabin Thapa</li>
          <li>Manish Karki</li>
          <li>Riches Thapa</li>
          <li>Prajun Acharya</li>
         </ul>
      </div>
      <div class="col-md-3" style="border-left:1px solid white;">
           services
           <ul>
            <li>Website Creating</li>
            <li>Content Writing</li>
            <li>Video Editing</li>
           </ul>

      </div>
      <div class="col-md-3" style="border-left:1px solid white;">
         Resources
         <ul>
          <li>Different AI design Tools</li>
          <li>Youtube</li>
          <li>Google</li>
         </ul>
      </div>
      <div class="col-md-3" style="border-left:1px solid white;">
        Links
        <p class="icons">
          <i class="bi bi-facebook"></i> facebook<br>
          <i class="bi bi-linkedin"></i> linkedin<br>
          <i class="bi bi-github"></i> github<br>
        </p>
     </div>
    </div>
    <h6 style="text-align:center;">New design and idea everyday<i class="bi bi-lightbulb"></i></h6>
    <p style="text-align:center;font-size:12px;">&copy; All rights reserve @MarkUs | 2023 | privacy policy | Terms of Services</p>
  </footer>


      <!--AOS js-->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <script>
        AOS.init();
      </script>
      <script src="index.js"></script>
<?php
  if(isset($_POST['register'])){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
   $prolang = $_POST['lang'];
  
    $insertquery = "INSERT INTO `register` (`FirstName`, `LastName`,`Age`,`Email`,`Password`,`PhoneNum`,`Gender`,`ProLanguages`) VALUES ( '$fname', '$lname', '$age', '$email', '$password', '$phone', '$gender', '$prolang')";
    $result = mysqli_query($conn, $insertquery);
  }
?>
</body>
</html>