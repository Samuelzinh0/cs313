<!DOCTYPE html>

<html>
<head>
  <title>A.C: Pricing Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="jumbotron text-center">
    <h1>Welcome to the Pricing Page!</h1>
  </div>
    <div class="text-center">
    <h3> We will showcase the different moulding we use.</h3>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
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
        <h2> Due to the fluctuation of the land that we build our curbing on and the preparation work needed for the diversity of jobs 
            we are ale to offer we don't have an explicit flat rate. You as our prized customer needs to call our Owner to set up a time to have him come and do the preparation 
            work and give you an accurate estimation for the job requested. His contact information is 208-???-???? </h2>
    </div>

    <?php
    echo "Today's date is " . date("d-m-Y") . "<br>";
    ?>
    
    </body>
</html>