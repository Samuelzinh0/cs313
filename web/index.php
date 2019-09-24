<!DOCTYPE html>

<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylist.css">
    </head>
    <title>Sam Moreira</title>
    <body>
    <div class="text-center">
    <h1> Welcome to the Homepage </h1>
        <div class="btn-group">
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/index.php';"
                class="btn">Home</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/intro.php';"
                class="btn btn-success">Introduction</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/assigns/assign.php';" 
                class="btn btn-danger">Assignments</button>
            <button type="button"onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/pproject/index.php';"
                class="btn btn-primary disabled">Final Project</button>
        </div>
        <h2> This is the homepage of the website created by Sam Moreira. 
                Feel free to explore the inner working of his mind.</h2>
    </div>

    <?php
    echo "Today's date is " . date("d-m-Y") . "<br>";
    ?>
    
    </body>
</html>