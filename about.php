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
        <!--bootstrap icon-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
      <!--Custom css-->
      <link rel="stylesheet" href="index.css">
      
      <title>MarkUs-About</title>
      <style>
        .card{
          background:black;
          color:white;
        }
      </style>
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
          
          <!--content-->
      <div class="row p-5" style=" background: linear-gradient(#6b03c0,#83b9e2, rgb(209, 186, 9));">
        <div class="col-md-12 card p-5 mt-5" style="width:70%;margin-left: 20%;">
            <h3 style="text-align:center;">About MarkUs</h3>
            <img src="images/About.jpg" class="img-fluid ms-5" alt="Our team" style="width:80%;margin-left:10%;height:400px;border:2px solid white;">
        <p style="padding:2% 6%;">Welcome to our startup, a group of young and ambitious IT students who are dedicated to using their skills and knowledge to create innovative technology solutions that make a difference in the world.

As a startup, we are driven by a passion for technology and a desire to make a difference. We believe that the power of technology can be used to solve some of the world's most pressing problems, and we are committed to using our skills to create solutions that will make a real impact.

Our team is made up of a diverse group of IT students who are experts in a wide range of technologies, including Web development, Content Writing, Video Editing, and many more. We are well-versed in the latest technologies and trends, and are always looking for new and innovative ways to use technology to solve problems.

<details style="padding:2% 6%;"><summary>ReadMore...</summary>One of our key strengths is our ability to think outside the box and to approach problems from new and unique perspectives. We believe that fresh ideas and new perspectives are essential to creating truly innovative solutions, and we are committed to fostering an environment that encourages creativity and experimentation.

As a startup, we are always looking for new opportunities to collaborate and work with others who share our passion for technology and our desire to make a difference. If you're a business, an organization, or an individual who is looking to work with a team of young and ambitious IT students to create innovative technology solutions, then we would love to hear from you.

Contact us today to discuss your project and find out how we can help you achieve your goals. Together, we can make a difference in the world through technology.</details>

</p>
</div>
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
</body>
</html>