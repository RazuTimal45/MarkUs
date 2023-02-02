<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <style>
        /* basic css */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: #f2f2f2;
    font-family: Arial, sans-serif;
    background:linear-gradient(#151E3D,#52B2BF,#63C5DA);
}

/* container */
.container {
    max-width: 1200px;
}

/* header */
header {
    background-color: black;
    color: #fff;
    text-align: center;
    width:100%;
    margin:60px 0 0 0;
}

header h1 {
    margin: 0;
}
/* main content */
main {
    display: flex;
    justify-content: space-between;
    padding: 20px;
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
table th, table td{
    font-size:14px;
    border:2px solid rgb(96, 96, 225);
    padding:4px 2px 4px 10px;
    border-radius:3px;
    color:#002244;
}
table tr{
    margin-bottom:5px;
}
table {
   border:2px solid white;
   background:#ccc;
   border-radius:10px;
   width:100%;
}
.center-div{
    margin:2% 5%;
    padding:20px;
    background-color: rgb(96, 96, 225);
    border-radius:5px;
}
#updt{
    color:#03C03C;
    font-size:15px;
}
#del{
    color:red;
    font-size:15px;
}
.container-stat{
  display: flex;
  flex-direction: column;
  width:5rem;
  height:6rem;
  border: 1px solid #ececec;
  background-color: #1b234e;
  border-radius: 12px;
  align-items: center;
  justify-content: center;
  height:auto;
  width:auto;
}
.container-stat h4{
  font-weight:600;
}
.container-btn{
  background-color: #63C5DA;
}
.income-count,.expense-count,.clients-count,.project-count,.profit-count,.skill-level{
  font-size: 1rem;
  font-weight: bold;
  color:white;
}
#income-count,#expense-count,#clients-count,#project-count,#profit-count,#skill-level{
  background:#023020;
  color:white;
  font-size:20px;
  border:1px solid white;
  padding: 4px 8px;
  border-radius:6px;
}
#increment-button{
background: #000;
color:white;
padding:4px 10px;
border:1px solid white;
border-radius:6px;
margin:5px auto;
}

@media screen and (max-width: 1000px) { 
  footer{
    height: 260px;;
  }
}
@media screen and (max-width: 700px) { 
  footer{
    height:550px;
  }
  .center-div{
    margin:1% 1%;
    padding:20px;
    width:100%;
}
}
   
    </style>


    <title>MarkUs-Dashboard</title>
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
            <a class="nav-link active" aria-current="page" href="./dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Home</a>
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
  <!--Container-->
    <div class="container">
      <header>
          <h2>Dashboard</h2>
      </header> 
      </div>  
      <h4 style="text-align:center;"><button style="border:none;padding:5px 10px;background:transparent;font-weight:600;font-family:verdana;">Account Registered in MarkUs</button></h4>
      <div class="center-div">
        <div class="table-representation">
            <table>
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>  
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone No.</th>
                    <th>Gender</th>
                    <th>Known<br>Programming<br>Languages</th>               
                    <th colspan="2">Operation</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                      include 'connection.php';

                      $selecttable= "select * from register";
                      $query = mysqli_query($conn, $selecttable);

                      $num = mysqli_num_rows($query);
                      while($res= mysqli_fetch_array($query)){
                      
                      ?>
                    <tr>
                    <td><?php echo $res['Id']; ?></td>
                    <td><?php echo $res['FirstName']; ?></td>
                    <td><?php echo $res['LastName']; ?></td>
                    <td><?php echo $res['Age']; ?></td>
                    <td><?php echo $res['Email']; ?></td>
                    <td><?php echo $res['Password']; ?></td>
                    <td><?php echo $res['PhoneNum']; ?></td>
                    <td><?php echo $res['Gender']; ?></td>
                    <td><?php echo $res['ProLanguages']; ?></td>
                    <td><a href="update.php?id=<?php echo $res['Id']; ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="update"><i id="updt" class="bi bi-pencil-square"></i></a></td>
                    <td>  <a href="delete.php?id=<?php echo $res['Id']; ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="delete"><i id="del" class="bi bi-trash3-fill"></i></a></td>
                </tr>
                <?php
                      }
                      ?>
                </tbody>
            </table>
        </div>
    </div>

    <!--Main-->
    <div class="container-btn ms-5 me-5" Style="background:transparent;">
    <button id="increment-button" >Increment</button>
    </div>
    <main class="row ms-5 me-5">
      <div class="col-md-3 pb-2 pt-2">
      <div class="container-stat">
        <h4 style="color:black;">Client-Data</h4>
        <p class="clients-count ">Number of Clients:<br><span id="clients-count" class="ms-4">0</span></p>
        <h2 style="background:#040200;color:white;border-radius:50%;padding:10px 15px;"><i class="bi bi-people"></i></h2>
      </div>
      </div>
      <div class="col-md-3 pb-2 pt-2">
      <div class="container-stat">
        <h4 style="color:black;">Income-Data</h4>
        <p class="income-count ">Total Income : <br><span id="income-count" class="ms-2 ">0</span></p>
        <h2 style="background:#040200;color:white;border-radius:50%;padding:10px 15px;"><i class="bi bi-wallet2"></i></h2>
      </div>
      </div>
      <div class="col-md-3 pb-2 pt-2">
      <div class="container-stat">
        <h4 style="color:black;">Expenses-Data</h4>
        <p class="expense-count ">Total Expenses : <br><span id="expense-count" class="ms-4 ">0</span></p>
        <h2 style="background:#040200;color:white;border-radius:50%;padding:10px 15px;"><i class="bi bi-bar-chart-steps"></i></h2>
      </div>
      </div>
      <div class="col-md-3 pb-2 pt-2">
      <div class="container-stat">
        <h4 style="color:black;">Projects-Data</h4>
        <p class="project-count ">Total Projects : <br><span id="project-count" class="ms-4 ">0</span></p>
        <h2 style="background:#040200;color:white;border-radius:50%;padding:10px 15px;"><i class="bi bi-clipboard-data"></i></h2>
      </div>
      </div>
    </main>
    <div class="container-stat ms-5 me-5 pb-2 pt-2">
    <h4 style="color:black;">Profit-Data</h4>
    <p class="profit-count ">Total Profit : <br><span id="profit-count" class="ms-3 ">0</span></p>
    <h2 style="background:#040200;color:white;border-radius:50%;padding:10px 15px;"><i class="bi bi-bar-chart-line"></i></h2>
    </div>
    <div class="container-stat ms-5 me-5 mb-3 mt-2 pb-2 pt-2">
    <h4 style="color:black;">Level</h4>
    <p class="skill-level ">Your Skills : <br><span id="skill-level" class="ms-1 ">Beginner</span></p>
    <h2 style="background:#040200;color:white;border-radius:50%;padding:10px 15px;"><i class="bi bi-cloud-fog2"></i></h2>
    </div>

    <!--Footer-->
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
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
    </script>
<script>
var clientsCount = 0;
var incomeCount = 0;
var expenseCount = 0;
var projectCount = 0;
var profitCount = 0;
document.getElementById("increment-button").addEventListener("click", function() {
  clientsCount++;
  incomeCount += 20;
  expenseCount +=10;
  projectCount++;
  profitCount = incomeCount-expenseCount;
 
  document.getElementById("clients-count").innerHTML = clientsCount;
  document.getElementById("income-count").innerHTML = incomeCount+'$';
  document.getElementById("expense-count").innerHTML = expenseCount+'$';
  document.getElementById("project-count").innerHTML = projectCount;
  document.getElementById("profit-count").innerHTML = profitCount+'$';
  if(projectCount<=10){
    document.getElementById("skill-level").innerHTML = "Beginner";
  }
  if(projectCount>=10 && projectCount<=20){
    document.getElementById("skill-level").innerHTML = "little experienced";
  }
  if(projectCount>=20 && projectCount<=30){
    document.getElementById("skill-level").innerHTML = "Intermediate";
  }
  if(projectCount>=30 && projectCount<=40){
    document.getElementById("skill-level").innerHTML = "little expert";
  }
  if(projectCount>=50){
    document.getElementById("skill-level").innerHTML = "You are Expert now!!";
  } 
});
</script>
</body>
</html>