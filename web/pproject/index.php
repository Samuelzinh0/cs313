<!DOCTYPE html>

<html>
<head>
  <title>A.C: Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<div class="jumbotron text-center">
    <h1>Welcome to Accent Curbing!</h1>
  </div>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Accent Curbing</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="pastjobs.php">Past Jobs</a></li>
      <li><a href="pricing.php">Pricing</a></li>
      <li><a href="reviews.php">Reviews</a></li>
    </ul>
  </div>
</nav>

</body>
</html>

    <img src="curbing1.jpg" width="400" height="300" alt="Home Page Job Example 1">
    <img src="curbing2.jpg" width="400" height="300" alt="Home Page Job Example 2">
    <img src="curbing3.jpg" width="400" height="300" alt="Home Page Job Example 3">
    <body>
    <div class="text-center">
    <h3> This is the homepage of the website. Here you can find different information about the services we provide.</h3>
    <p> Feel free to leave a review of the services you have received from us!</p>
        
    </div>

    <?php
    echo "Today's date is " . date("d-m-Y") . "<br>";
    ?>
    
    </body>
</html>