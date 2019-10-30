<!DOCTYPE html>

<html>
<head>
  <title>A.C: Past Jobs Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="jumbotron text-center">
    <h1>Welcome to the Past Jobs Page!</h1>
  </div>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Accent Curbing</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li class="active"><a href="pastjobs.php">Past Jobs</a></li>
      <li><a href="pricing.php">Pricing</a></li>
      <li><a href="reviews.php">Reviews</a></li>
    </ul>
  </div>
</nav>

    <div class="text-center">
    <h3> This is a sneak peak at the past jobs we have completed.</h3>
    <p> Feel free to leave a review of the services you have received from us!</p>    
    </div>

    <div class="container">
    <h2>Past Jobs Are Shown Here</h2>
    <p>Click on the images to enlarge them.</p>
  
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="curbing1.jpg" target="_blank">
              <img src="/w3images/lights.jpg" alt="Past Job 1" style="width:100%">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="curbing2.jpg" target="_blank">
              <img src="curbing2.jpg" alt="Past Job 2" style="width:100%">
            </a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="thumbnail">
            <a href="curbing3.jpg" target="_blank">
              <img src="curbing3.jpg" alt="Past Job 3" style="width:100%">
            </a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="thumbnail">
            <a href="curbing4.jpg" target="_blank">
              <img src="curbing4.jpg" alt="Past Job 4" style="width:100%">
            </a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="thumbnail">
            <a href="curbing5.jpg" target="_blank">
              <img src="curbing5.jpg" alt="Past Job 4" style="width:100%">
            </a>
          </div>
        </div>
      
      </div>
    </div>

    <?php
    echo "Today's date is " . date("d-m-Y") . "<br>";
    ?>
    
    </body>
</html>