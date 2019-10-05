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
        <h1> Welcome to the Assignments Page </h1>
        <div class="btn-group">
            <button type="button"
                onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/index.php';"
                class="btn">Home</button>
            <button type="button"
                onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/intro.php';"
                class="btn btn-success">Introduction</button>
            <button type="button"
                onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/assigns/assign.php';"
                class="btn btn-danger">Assignments</button>
            <button type="button"
                onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/pproject/index.php';"
                class="btn btn-primary disabled">Final Project</button>
            <button type="button"
                onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/assigns/test/index.php';"
                class="btn btn-primary disabled">Test</button>
        </div>
        <h2> Below you will find the indiviual assignments done throughout the semester.</h2>

        <div class="btn-list">
            <button type="button"
                onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/assigns/w1hello.html';"
                class="btn btn-dark">W1 Hello World</button>
            <button type="button"
                onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/index.php';"
                class="btn btn-dark">W2 PHP D/T</button>
            <button type="button"
                onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/assigns/week03/index.php';"
                class="btn btn-dark">W3 Cart</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W4 ---</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W5 ---</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W6 ---</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W7 ---</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W8 ---</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W9 ---</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W10 ---</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W11 ---</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W12 ---</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W13 ---</button>
            <button type="button"
                onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/pproject/index.php';"
                class="btn btn-dark disabled">Final Project</button>
        </div>
        <h2> Below you will find the <b>team</b> assignments done throughout the semester.</h2>
        <div class="btn-list">
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/assigns/team/ta03.php';"
                class="btn btn-dark">W3 Forms</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W4 ---</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W5 ---</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W6 ---</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W7 ---</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W8 ---</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W9 ---</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W10 ---</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W11 ---</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W12 ---</button>
            <button type="button" onclick="window.location.href = 'https://young-escarpment-18200.herokuapp.com/...';"
                class="btn btn-dark disabled">W13 ---</button>
        </div>
    </div>

    <?php
    echo "Today's date is " . date("d-m-Y") . "<br>";
    ?>

</body>

</html>