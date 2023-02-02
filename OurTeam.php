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
    <!--Custom css-->
    <link rel="stylesheet" href="index.css">
     <!--bootstrap icon-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>MarkUs-Team</title>
</head>
<body>
       <!-- Nav Bar -->
       <nav class="navbar fixed-top navbar-expand-lg" style="background:linear-gradient(rgb(200, 95, 200),#a8c8e2,#68ebca);border-bottom:1px solid white;">
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
                <a class="nav-link" href="./index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./OurTeam.php">Our Team</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit"><i class="bi bi-search"></i></button>
            </form>
          </div>
        </div>
      </nav>       
    <div class="row justify-content-evenly pb-5 pt-5 mt-5" style="background:linear-gradient(rgb(7, 5, 70),#a1caf1,#47abcc);">
        <h1 style="text-align: center;"><button style="color:white;font-weight:600;background:#1b234e;border-radius: 10px;padding:5px 10px;">MarkUs Team</button></h1>
        <div class="col-md-3 text-center mt-5 ms-1" width="100px" height="100px" data-aos="flip-left" data-aos-duration="1500">
            <div class="card" style="width: 18rem; padding: 5px;">
                <img src="images/raju.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2>Founder</h2>
                    <a href="./CV.php"><h4 style="background-color: black;text-decoration:none;color:white;">Raju Timalsina</h4></a>
                  <p class="card-text"><details><summary>About Founder...</summary>As a founder, He ensure the company enjoys profits and success.</details></p>
                </div>
              </div>
        </div>
        <div class="col-md-3 text-center mt-5" width="100px" height="100px" data-aos="flip-left" data-aos-duration="1500">
            <div class="card" style="width: 18rem; padding: 5px;">
                <img src="images/nabin.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2>CEO</h2>
                    <h4 style="background-color: black; color:white;">Nabin Thapa</h4>
                  <p class="card-text"><details><summary>About CEO...</summary>As a CEO, He helps the founder in the company with his idea.</details></p>
                </div>
              </div>
        </div>
        <div class="col-md-3 text-center mt-5" width="100px" height="100px" data-aos="flip-left" data-aos-duration="1500">
            <div class="card" style="width: 18rem; padding: 5px;">
                <img src="images/Manish.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2>Creative Head</h2>
                    <h4 style="background-color: black; color:white;">Manish Karki</h4>
                  <p class="card-text"><details><summary>About Creative Head...</summary>As a Creative Head, He is a person who makes high-level creative decisions.</details></p>
                </div>
              </div>
       </div>
       </div>
       <div class="row justify-content-end pb-5" style="background:linear-gradient(#47abcc,#a1caf1,rgb(7, 5, 70));">
        <div class="col-md-5 text-center mt-5" width="100px" height="100px" data-aos="flip-right" data-aos-duration="1500">
            <div class="card" style="width: 18rem; padding: 5px;">
                <img src="images/prajun.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2>Designer</h2>
                    <h4 style="background-color: black; color:white;">Prajun Acharya</h4>
                  <p class="card-text"><details><summary>About Designer...</summary>As a Designer, he works on a wide range of projects, visualize and develop innovative graphic designs that meet Company's goals.</details></p>
                </div>
            </div>
        </div>
        <div class="col-md-5 text-center mt-5" width="100px" height="100px" data-aos="flip-right" data-aos-duration="1500">
          <div class="card" style="width: 18rem; padding: 5px;">
              <img src="images/riches.png" class="card-img-top" alt="...">
              <div class="card-body">
                  <h2>Content Writer</h2>
                  <h4 style="background-color: black; color:white;">Riches Thapa</h4>
                <p class="card-text"><details><summary>About Content Writer...</summary>As a Designer, he works on a wide range of projects, visualize and develop innovative graphic designs that meet Company's goals.</details></p>
              </div>
          </div>
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
    <!--AOS js-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>