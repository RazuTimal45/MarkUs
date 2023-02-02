<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <!--bootstrap icon-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
          /* basic css */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    background:linear-gradient(rgb(7, 5, 70),#47abcc,#a1caf1);
    font-family: Arial, sans-serif;
  }

  /* login form */
  .login-form {
    width: 400px;
    background-color: #fff;
    padding: 40px;
    height:400px; 
    margin: 100px auto;
    border-radius: 10px;
    transition:0.4s;
  }
  .login-form:hover{
    width: 410px;
    height:405px; 
  }

  /* form inputs */
  .login-form input[type="text"],.login-form input[type="email"],
  .login-form input[type="password"] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  /* login button */
  .login-form input[type="submit"] {
    width: 100%;
    background-color: #0492c2;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  /* Add hover effect to buttons */
  .login-form input[type="submit"]:hover {
    background-color: rgb(7, 5, 70);
  }
  .login-form .message{
    margin-top: 10px;
    font-size: 12px;
}
  footer{
    background:rgb(2, 12, 47);
    color:white;
    height:220px;
    width:100%;
    padding:20px;
    border-top:1px solid white;
}
ul li{
  font-size: 13px;
}
.icons{
    font-size: 13px;
}
    </style>
    <title>MarkUs-Login</title>
</head>
<body>

  <!-- Nav Bar -->
<nav class="navbar fixed-top mb-5 navbar-expand-lg" style="background:linear-gradient(rgb(200, 95, 200),#a8c8e2,#68ebca);border-bottom:2px solid white;">
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
    <div class="login-form">
        <form id="form2" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" onsubmit="return validateForm()" method="post">
            <label for="username">Email</label>
            <input type="email" id="email" name="email">
            <label id="errEmail"></label>
            <br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <label id="errPassword"></label>
            <input type="submit" name="submit" value="Login">
        </form>
        <p class="message">Forget Password?</p>
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
    <script>
      function validateForm() {
  var name = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  if (name == "") {
    document.getElementById("errUsername").innerText="*Enter Username";
    document.getElementById("errUsername").style.color="red";
    return false;
  }

  if (password == "") {
    document.getElementById("errPassword").innerText="*Enter Password";
    document.getElementById("errPassword").style.color="red";
    return false;
  }
}
</script>
    </script>
</body>
</html>