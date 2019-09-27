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
    <h1> Welcome to my Introduction </h1>
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
        <p> My name is Sam Moreira. I have a strange last name because I was born in Portugal. Portguese is my first language and
        as a kid I used to play a lot of video games in Spanish, therefore, Spanish became my second language. I went on to move to 
        England when I was eleven due to my Father's work. My Father is a Facilities Manager for the Church and was invited to work
        closer to the European offcies of the Church located in Solihull which have noew moved to FRankfurt but he and my mother decided
        to stick around the motherland across the pond. My mother is from Angola Africa and I get a lot of my music taste from her and
        Africa that is in her blood. I love to play video games to pass the time. I also love programming. I also love my beautiful wife 
        her name is Kendra and we have been married for just over a year and loving every minute of it! My family is pictured at the bottom 
        of this webpage from left to right Pedro my older brother, my father Laurentino, me, my wife Kendra, and my mother Elizette.</p>
    </div>

    <img src="images/sam2.jpg" width="500" height="800" alt="Website Creator">
    <?php
    echo "Today's date is " . date("d-m-Y") . "<br>";
    ?>
    
    </body>
</html>