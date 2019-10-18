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
    <img src="curbing1.jpg" width="400" height="300" alt="Curbing Job Example">
    <body>
    <div class="text-center">
    <h3> This is the homepage of the website. Here you can find different information about the services we provide.</h3>
        <div class="btn-group">
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/pproject/index.php';"
              class="btn btn-dark">Home Page</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/pproject/pastjobs.php';"
              class="btn btn-light">Past Jobs</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/pproject/pricing.php';"
              class="btn btn-light">Pricing</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/pproject/reviews.php';"
              class="btn btn-light">Reviews</button>
        </div>
        <p> Feel free to leave a review of the services you have received from us!</p>
        
    </div>

    <?php
    echo "Today's date is " . date("d-m-Y") . "<br>";
    ?>
    
    </body>
</html>