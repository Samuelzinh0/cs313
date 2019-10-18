<?php
  require('dbConnect.php');
  $db = get_db();
  $query = 'SELECT comment_title, comment_text, users_id FROM comments;';
  /*$query .= 'SELECT rating, users_id FROM ratings;';
  $query .= 'SELECT user_name, users_id FROM users;';*/
  $stmt = $db->prepare($query);
  $stmt->execute();
  $comment_infos = $stmt->fetchAll(PDO::FETCH_ASSOC);
  //vardump(comment_infos);

?>

<!DOCTYPE html>
<html lang="eng">

<head>
  <title>Database Info</title>
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
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h3></h3>
        <p>Reviews</p>
        <?php
        $temp_comment_title;
        /*$temp_comment_rating;*/
        foreach ($comment_infos as $comment_info) {
          $id = $comment_info['users_id'];
          global $temp_comment_title, $temp_comment_text, $temp_users_id;
          $temp_comment_title = $comment_info['comment_title'];
          $temp_comment_text = $comment_info['comment_text'];
          /*$temp_comment_rating = $comment_info['rating'];*/
          echo "<br><br>";
          echo "<p><pre>$temp_comment_title</pre><p>";
          echo "<br>";
          echo "<p><pre> Comment: $temp_comment_text</pre></p>";
          echo "<br>";
          }
        ?>
      </div>
    </div>
  </div>

</body>
</html>