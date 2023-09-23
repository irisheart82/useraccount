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

    <!--Form Login-->
    <div class="modal fade" id="login_modal" aria-hidden="true" aria-labelledby="login_modal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="login">
                <h1 class="log_lbl text-center">Login</h1>

                <form action="">
                  <div class="mb-3 mt-4">
                    <label for="s_Email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="s_Email" aria-describedby="email">
                  </div>
                  <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password">
                  </div>
                  <button type="submit"  onclick="submitData();" class="btnLogin mt-3">LOGIN</button>
                  <p>Not a member? <a href="registration.php" >Signup now</a></p>
                  <?php require 'script.php'; ?>
                </form>
              </div>
          </div>
        </div>
      </div>
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