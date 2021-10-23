<?php 
  include('./connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f6a7b0942f.js" crossorigin="anonymous"></script>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
    crossorigin="anonymous"
  />
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"></script>
      <link rel="stylesheet" href="./css/style.css  ">
      <link rel="stylesheet" href="./css/your_views.css  ">

    <title>Your Views</title>
    
</head>
<body>
<nav class=" navbar navbar-expand-lg bg-dark">
      <a class="navbar-brand" href="home.html"
        ><img style="height: 60px" src="./images/logo1.png" alt=""
      /><img style="height: 60px" src="./images/Ctrl+s (1).png" alt=""
      /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
        <h2><i class="fas fa-bars"></i></h2>
        
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link" href="./home.html"
              >Home <span class="sr-only">(current)</span></a>
            
              <a class="nav-link" href="./home.html#about">About</a>
              <a class="nav-link" href="./map.html">Maps</a>
  
            <a class="nav-link " href="articles.html">Articles</a>
            <a class="nav-link" href="./facts.html">Facts</a>
            <!-- <a class="nav-link" href="#">Test Youerself</a> -->
            <a class="nav-link active" href="./your_views.html">Your Views</a>
  
          </div>
        </div>
      </nav>
    <div class="form-section">
        <div class="form-container">
          <h2>Your Views</h2>
            <form class="form" method="POST" action="./your_views_back.php" >
               <input name="uname" type="text" class="form-input" placeholder="Your name">
               <textarea name="uviews" type="text"  rows=5   class="form-input" placeholder="Your views"></textarea>
               <button name="submit" >Share</button>
            </form>
        </div>
    </div>
    <div class="comment-section">
      <h3>Peoples views</h3>
      <?php
      $query1 = "SELECT * FROM `views`";
      $res1 = mysqli_query($connect,$query1);
    
        while($rows= mysqli_fetch_array($res1)){
          // $user = $rows['uname'];
          // $views = $rows['uviews'];
        
      
      ?>

      <div class="comment">
        <h5><?php echo $rows['uname'] ?></h5>
        <p><?php echo  $rows['uviews'] ?></p>
      </div>
      <?php } ?>
    </div>
</body>
</html>