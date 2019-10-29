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
      <li><a href="index.php">Home</a></li>
      <li><a href="pastjobs.php">Past Jobs</a></li>
      <li><a href="pricing.php">Pricing</a></li>
      <li class="active"><a href="reviews.php">Reviews</a></li>
    </ul>
  </div>
</nav>

<form action="addReviews.php" method="POST" style="margin-left:5%; margin-right:5%">
  <h2>Write Your Review Here!</h2>
  <div class="form-group">
    <label for="nameOfUser">User name:</label>
    <input type="text" class="form-control" id="nameOfUser" name="nameOfUser" placeholder="(Your name here)">
  </div>
  <div class="form-group">
    <label for="reviewTitle">Review Title:</label>
    <input type="text" class="form-control" id="reviewTitle" name="reviewTitle" placeholder="(Your review title here)">
  </div>
  <div class="form-group">
    <label for="reviewRating">Review Rating:</label>
    <select class="form-control" id="reviewRating" name="reviewRating">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="userType">Type of User:</label>
    <select class="form-control" id="userType" name="userType">
      <option>Landscape Designer</option>
      <option>Homeowner</option>
    </select>
  </div>
  <div class="form-group">
    <label for="commentContent">Review Content:</label>
    <textarea class="form-control" id="commentContent" name="commentContent" rows="3"></textarea>
  </div>

  <input type="submit" value="addReview">
</form>

  <div class="container">
    <div class="row">
        <h3>Already Written Reviews</h3>

        <?php

        foreach ($comment_infos as $comment_info) {
          $id = $comment_info['users_id'];
          $temp_comment_title = $comment_info['comment_title'];
          $temp_comment_text = $comment_info['comment_text'];
          $temp_comment_rating = $comment_info['rating'];
          $temp_comment_person = $comment_info['user_name'];

          
          echo '<div style="border:1px solid grey; border-radius:3px">';
          echo "<p> $temp_comment_title Rating: $temp_comment_rating/5</p>";
          echo "<br>";
          echo "<p> $temp_comment_person: $temp_comment_text</p>";
          echo "</div><br>";
          }
        ?>
      </div>
    </div>
  </div>

</body>
</html>