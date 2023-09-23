<?php
require 'function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user_tb WHERE id = $id"));
}
else{
  header("Location: login.php");
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
                  <a class="log nav-link text-white" href="logout.php">Log-out</a>
                </li>
              </ul>
          </div>
        </div>
    </nav> 

    

    <section id="content">
        <div class="container">
          <div class="row">
            <!--First-->
            <div class="col-12">
              <div class="cIntro row">
                  <div class="col-12 col-lg-12">
                      <h1 class="cTitle">
                          LEARNING IS A MUST
                      </h1>
                  </div>
                  <div class="col-12 col-lg-12">
                      <p class="tagline">
                        Unlock Your Potential with MUSTery - Mastering Your Must-Haves
                      </p>
                  </div>
              </div>
          </div>
          <!--2nd 1st column-->
          <div class="col-12 col-lg-5 col-md-5">
            <div class="cPicture1 row">
              <img src="img/Picture1.png" alt="" class="Picture1">
            </div>
          </div>
          
          <!--2nd 2nd column-->
          <div class="col-12 col-lg-6 col-md-6 offset-lg-1 offset-md-1">
            <div class="cWe row">
              <div class="col-12 col-lg-12">
                <p class="cMUSTery">
                  MUSTery comes from the combine word of  “MUST” and “MastERY”.
                  We in MUSTery believes in Acquiring knowledge is not just a choice but a necessity for achieving  expertise.
                </p>
              </div>
              <div class="col-12 col-lg-12 col-md-12 text-center mt-2">
                  <a href="#" class="joinBtn">Join Now!</a>
              </div>
            </div>
          </div>
        </div>
    </section>
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