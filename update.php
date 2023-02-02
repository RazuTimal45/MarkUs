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
    <title>Dashboard-update</title>
    <style>

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
        <div class="section_2 mt-3">
    <div class="registration">
       <h2 style="color:black;text-align:center;">Update Data</h2>
       <form id="registration" onsubmit="return ValidateForm()" method="post">
       <?php
       include 'connection.php';
       
       $ids = $_GET['id'];
        
       $showquery = "select * from register where Id={$ids}";

       $showdata = mysqli_query($conn,$showquery);

       $arrdata = mysqli_fetch_array($showdata);

  if(isset($_POST['register'])){
 
    $idupdate=$_GET['id'];

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
   $prolang = $_POST['lang'];
  
    $insertquery = "INSERT INTO `register` (`FirstName`, `LastName`,`Age`,`Email`,`PhoneNum`,`Gender`,`ProLanguages`) VALUES ( '$fname', '$lname', '$age', '$email', '$phone', '$gender', '$prolang')";
    
    $query="update register set id='$ids',fname='$fname',lname='$lname',age='$age',email='$email',phone='$phone',gender='$gender',prolang='$prolang' where id=$idupdate";
    //$result = mysqli_query($conn, $query);
    // if($result){
    //   echo "update successful";
    // }
    // else{
    //   echo "update unsuccessful";
    // }
  }
?>
        <label for="fname">First Name :</label>
        <br>
        <input type="text" name="fname" id="fname" value="<?php echo $arrdata['FirstName']; ?>" placeholder="Enter Your First Name...">
        <label id="errFname"></label>
        <br><br>
        <label for="lname">Last Name :</label>
        <br>
        <input type="text" name="lname" id="lname" value="<?php echo $arrdata['LastName']; ?>" placeholder="Enter Your Last Name...">
        <label id="errLname"></label>
        <br><br>
        <label for="age">Your Age:</label>
        <br>
        <input type="number" name="age" id="age" value="<?php echo $arrdata['Age']; ?>"  placeholder="How old are you?">
        <label id="errAge"></label>
        <br><br>
        <label for="email">Email :</label>
        <br>
        <input type="email" name="email" id="email" value="<?php echo $arrdata['Email']; ?>" placeholder="Your Email..."> 
        <label id="errEmail"></label>
        <br><br>
        <label for="phone">Password:</label>
        <br>
        <input type="password" name="password" id="password" value="<?php echo $arrdata['Password']; ?>" placeholder="Your Phone number...">
        <br><br>
        <label for="phone">Your Phone Number:</label>
        <br>
        <input type="number" name="phone" id="phone" value="<?php echo $arrdata['PhoneNum']; ?>" placeholder="Your Phone number...">
        <br><br>
        <label for="gender">Gender :</label>
        <br>
        <input type="text" name="gender" value="<?php echo $arrdata['Gender']; ?>" id="gender">
        <br><br>
        <label for="lang">Known coding Language</label>   
        <br> 
        <input type="text" name="lang" type="lang" id="lang" value="<?php echo $arrdata['ProLanguages']; ?>" placeholder="Enter Programming languages you know...">
        <label id="errLang"></label>
        <br><br>
        <input type="submit" value="Update" name="register" id="register">
        <p class="message">Not registered? <a href="./login.php">Login</a></p>
      </form>
    </div><!--end Register-->
  </div>
</body>
</html>