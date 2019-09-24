<!DOCTYPE html>

<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylist.css">
    </head>
    <title>Accent Curbing</title>
    <body>
    <div class="text-center">
    <h1> Welcome to Accent Curbing </h1>
    <h3> This is the homepage of the website. Here you can find different information about the services we provide.</h3>
        <div class="btn-group">
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/index.php';"
              class="btn btn-dark">Home Page</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/pastjobs.php';"
              class="btn btn-light">Past Jobs</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/pricing.php';"
              class="btn btn-light">Pricing</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/reviews.php';"
              class="btn btn-light">Reviews</button>
        </div>
        <p> Feel free to leave a review of the services you have received from us!</p>
        
    </div>

    <?php
    echo "Today's date is " . date("d-m-Y") . "<br>";
    ?>
    
    </body>
</html>