<?php
  require('dbConnect.php');
  $db = get_db();
  
  $query='SELECT comment_title, comment_text, comments.users_id, rating, user_name FROM comments, ratings, users WHERE comments.users_id=users.id AND ratings.users_id=users.id;';
  $stmt = $db->prepare($query);
  $stmt->execute();
  $comment_infos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="eng">

<head>
  <title>Customer Reviews</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="jumbotron text-center">
    <h1>Welcome to the Review Page!</h1>
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

<?php
/*
  function insertInfo($comment_user_name, $comment_rating, $comment_text, $comment_user_type, $comment_title, $users_id) {
    $query = "INSERT INTO users (user_name, user_type) VALUES ($comment_user_name, $comment_user_type)";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $query = "INSERT INTO ratings (rating, users_id) VALUES ($comment_rating, $users_id);";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $query = "INSERT INTO comments (comment_title, comment_text, users_id) VALUES ($comment_title, $comment_text, $users_id)";
    $stmt = $db->prepare($query);
    $stmt->execute();
  }
  */
?>

<form action="insertInfo" method="get"><br>
  User name: <input type="text" name="user_name"><br>
  <input type="radio" name="user_type" value="Homeowner"> Homeowner<br>
  <input type="radio" name="user_type" value="lDesigner"> Landscape Designer<br>
  Rating: <input type="text" name="comment_rating"><br>
  Review Title: <input type="text" name="comment_title"><br> 
  Review Comment: <br><textarea rows="10" cols="50" name="comment_content"></textarea><br>
  <input type="submit">
</form>

  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h3></h3>
        <p>Reviews</p>
        <?php

        foreach ($comment_infos as $comment_info) {
          $id = $comment_info['users_id'];
          $temp_comment_title = $comment_info['comment_title'];
          $temp_comment_text = $comment_info['comment_text'];
          $temp_comment_rating = $comment_info['rating'];
          $temp_comment_person = $comment_info['user_name'];

          echo "<br><br>";
          echo "<p><pre>$temp_comment_title Rating: $temp_comment_rating/5 </pre></p>";
          echo "<br>";
          echo "<p><pre> $temp_comment_person: $temp_comment_text</pre></p>";
          echo "<br>";
          }
        ?>
      </div>
    </div>
  </div>

</body>
</html>