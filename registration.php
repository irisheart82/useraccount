<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>

    <title>MUSTery</title>

</head>
<body>
    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
          <a class="navbar-brand mt-2" href="#">MUSTery</a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="dashboard.html">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Best Practices</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Forum</a>
                </li>
                <li class="nav-item">
                  <a class="log nav-link text-white" data-bs-toggle="modal" href="#login_modal" role="button">Login</a>
                </li>
              </ul>
          </div>
        </div>
    </nav> 

            <div class="register container">
    
              <h1 class="signUp_lbl text-center">Sign Up</h1>
              <p class="Question"> Are you a...</p>
  
              <form autocomplete="off" action="" method="post" class="info">
                <div class="btn-group position-absolute top-25 start-50 translate-middle" role="group" aria-label="Basic radio toggle button group">
                  <input type="radio" class="btn-check" name="character" id="Student_btnradio1" value="student" autocomplete="off">
                  <label class="btn btn-outline-primary" style="background-color: #FF007F;
                  border-color: #FF007F;" for="Student_btnradio1">Student</label>
                
                  <input type="radio" class="btn-check" name="character" id="Educator_btnradio2" value="educator" autocomplete="off">
                  <label class="btn btn-outline-primary" style="background-color: #FF007F;
                  border-color: #FF007F;" for="Educator_btnradio2">Educator</label>
                </div>


                <div class="row">
                  
                  <div class="col-12 col-lg-6 col-md-6">
                    <label for="fName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="fName" placeholder="First Name">
                  </div>
                  <div class="col-12 col-lg-6 col-md-6">
                    <label for="lName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lName" placeholder="Last Name">
                  </div>
                  <div class="col-12 mt-2">
                    <label for="s_Email" class="form-label">School-issued Email Address</label>
                    <input type="email" class="form-control" id="s_Email" placeholder="youremail@school.edu.ph">
                  </div>
                  <div class="col-12 mt-2">
                    <label for="subject" class="form-label">University/School</label>
                    <select id="form-select" name="school" class="form-select">
                        <option value="" selected hidden>University/School</option>
                        <option value="PLMUN">Pamantasan ng Lungsod ng Muntinlupa</option>
                        <option value="MNHS">Muntinlupa National High School - Main</option>
                    </select>
                  </div>
                  <div class="col-12 col-lg-6 col-md-6 mt-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                  </div>
                  <div class="col-12 col-lg-6 col-md-6 mt-2">
                    <label for="c_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="c_password" placeholder="Password">
                  </div>
                </div>

                <div class="text-center text-info mt-5">
                  <a data-bs-target="#login_modal" data-bs-toggle="modal" data-bs-dismiss="modal" class="haveAcc">Already have an account?</a>
                </div>

                <div class="text-center mt-3">
                  <a href="login.php" type="submit" onclick="submitData();" class="btnCreate text-white"> Create my Account</a>
                  <?php require 'script.php'; ?>
                </div>

              </form>
            </div>
 


    <script type="text/javascript">
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
        nav.classList.add('shadow');
        nav.style.backgroundColor = '#30343F'
        } else {
        nav.classList.remove('shadow');
        nav.style.backgroundColor = '##30343F'
        }
    });
    </script>
</body>
</html>