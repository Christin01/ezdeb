<!DOCTYPE html>
<html lang="en">
<head>
<title>EZ-DEB</title>
<!-- Latest compiled and minified CSS & JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> 
<link rel='stylesheet' href='style.css' />  
<script src="js/jquery-3.2.1.min.js"></script>
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">-->
<link rel="stylesheet" href="./comment/styles.css"><!-- Stylesheet -->
<!--exte--->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>

jQuery(document).ready(function($) {
if (window.history && window.history.pushState) {
  $(window).on('popstate', function() {
    var hashLocation = location.hash;
    var hashSplit = hashLocation.split("#!/");
    var hashName = hashSplit[1];
    if (hashName !== '') {
      var hash = window.location.hash;
      if (hash === '') {
       // alert('Back button was pressed.');
          window.location='packagelist.php';
          return false;
      }
    }
  });
  window.history.pushState('forward', null, 'packagelist.php');
}
});
</script>

</head>
<body>
  <?php
session_status() === PHP_SESSION_ACTIVE ?:session_start();
?>
<section id="nav-bar"> 
   <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark">
      <div class="container-fluid">
          <a class="navbar-brand" href="/index.php" style="color:#fff">EZDEB</a> 
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
             aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
             <!--class="navbar-toggler-icon"navbar-toggler -->
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                 <li class="nav-item">
                   <a style="color:#fff;" class="nav-link "  href="index.php">Home</a>
                 </li>
                 <li class="nav-item">
                    <a style="color:#fff;"class="nav-link" href="guide/index.php">Installation</a>
                  </li>
                  <li class="nav-item">
                    <a style="color:#fff;" class="nav-link" href="missing.php">Request Missing Package</a>
                  </li>
                  <li class="nav-item">
                    <a style="color:#fff;" class="nav-link" href="packagelist.php">Packages</a>
                  </li>
                  <!--<li class="nav-item">
                    <a class="nav-link" href="#" >Services</a>
                  </li>-->
                  <li class="nav-item">
                    <a style="color:#fff;" class="nav-link" href="bot.php">Chat with us</a>
                  </li>
                  <li class="nav-item">
                  <a style="color:#fff;" class="nav-link" href="https://ezdeb.flarum.cloud">Forum</a>
                  </li>
                  <li class="nav-item">
                    <a style="color:#fff;" class="nav-link "href="about.php">About us</a>
                  </li>
                  <li>
                    <?php
                    //session_status() === PHP_SESSION_ACTIVE ?:
                  
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
if(isset($_POST['logout'])) {
    unset($_SESSION['id']); ?>
    <script type="text/javascript"> window.setTimeout(function() { window.location.href='index.php'; }, 100); </script>
   <?php }
    ?>