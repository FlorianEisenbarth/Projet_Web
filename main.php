<?php
  session_start();
?>

<!DOCTYPE html>
<head>

</head>
<title>TP5: Introduction au Framework Bootstrap</title>  
        <meta charset="utf-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>  
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<body>
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="#"> 
    <img src="ECE_Amazon.png" width="40" height="40" class="d-inline-block align-top" alt="">ECE Amazon</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#"> Ventes Flash<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Categories
          </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Livres.php"><span> <span class="fa fa-book"></span> Livres</span></a>
          <a class="dropdown-item" href="#">  <i class="fa fa-music"></i><span> Musique</span> </a>
          <a class="dropdown-item" href="#"> <i class="fa fa-black-tie"></i> <span> Vêtements</span> </a>
          <a class="dropdown-item" href="#"> <i class="fa fa-bicycle"></i> <span> Sports et Loisirs</span></a>
        </div>
        </li>
        <div><?php echo $_SESSION['nom']; ?></div>

      </ul>
          <div class="nav pull-right"> 
        <button class="  btn btn-outline-success my-2 my-sm-0  " onclick="document.location.href='loginPage.php';">Sign in</button>
        <button class="btn btn-outline-primary my-2 my-sm-0" onclick="document.location.href='signup_vendeur.html';">Sign up</button>
        <button class="  btn btn-outline-danger my-2 my-sm-0 " onclick=""><span class="fa fa-shopping-basket"></span></button>
        </div>
      
    </div>
  </nav>
  
</body>