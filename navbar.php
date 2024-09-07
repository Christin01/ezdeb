<!DOCTYPE html>
<html>
  <head>
    <title>EZ-DEB</title>
      <!-- Latest compiled and minified CSS & JS -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> 
      <link rel='stylesheet' href='style.css' />  

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

  </head>
  <body>
<section id="nav-bar">  
        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark" >
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="images/demo-logo1.png"> </a> 
<!-- /images/demo-logo1.png-->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <!--class="navbar-toggler-icon"navbar-toggler -->
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto" >
                  <li class="nav-item">
                    <a style="color:#fff;" class="nav-link "  href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a style="color:#fff;"class="nav-link" href="">Installation</a>
                  </li>
                  <li class="nav-item">
                    <a style="color:#fff;" class="nav-link" href="packagelist.php">Packages</a>
                  </li>
                 <!-- <li class="nav-item">
                    <a class="nav-link" href="#" >Services</a>
                  </li>-->
                  
                  <li class="nav-item">
                    <a style="color:#fff;" class="nav-link" href="bot.php">Chat with us</a>
                  </li>
                  <li class="nav-item">
                    <a style="color:#fff;" class="nav-link" href="">Forum</a>
                  </li>
                  <li class="nav-item">
                    <a style="color:#fff;" class="nav-link "href="about.php">About us</a>
                  </li>
                  <li>
                    <?php
                    session_status() === PHP_SESSION_ACTIVE ?: session_start();
                     if (!isset($_SESSION['id'])) {  ?>
                        <button type="button" class="bml ms-auto btn btn-primary" data-bs-toggle="modal" 
                        data-bs-target="#ModalForm">Login </button>
                        <?php
                      }
                      else{  ?>
                      <form action="?" method="post">
                        <button type="submit"  name="logout"class="bml ms-auto btn btn-primary" >Logout</button> 
                      </form> <?php
                      }
                    ?>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>
    <?php 
   // session_start();
   if(isset($_POST['logout'])) {
    unset($_SESSION['id']); ?>
    <script type="text/javascript"> window.setTimeout(function() { window.location.href='index.php'; }, 100); </script>
   <?php }
    ?>

