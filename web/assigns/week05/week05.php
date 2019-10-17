<?php
  require('dbConnect.php');
  $db = get_db();
  $query = 'SELECT comment_title, comment_text, users_id FROM comments';
  $stmt = $db->prepare($query);
  $stmt->execute();
  $comment_infos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="eng">

<head>

<h1>Pulling Information from ym Database</h1>
<div class="jumbotron text-center">
  <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p>
</div>
</head>

<body>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3></h3>
      <p>Reviews</p>
      <?php
  echo "<h3>Reviews</h3>";
  $temp_comment_title;

  foreach ($comment_infos as $comment_info) {
    $id = $comment_info['users_id'];
    global $temp_comment_title, $temp_comment_text, $temp_users_id;
    $temp_comment_title = $comment_info['comment_title'];
    $temp_comment_text = $comment_info['comment_text'];
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
<?php
/*
  echo "<h3>Reviews</h3>";
  $temp_comment_title;

  foreach ($comment_infos as $comment_info) {
    $id = $comment_info['users_id'];
    global $temp_comment_title, $temp_comment_text, $temp_users_id;
    $temp_comment_title = $comment_info['comment_title'];
    $temp_comment_text = $comment_info['comment_text'];
    echo "<br><br>";
    echo "<p><pre>$temp_comment_title</pre><p>";
    echo "<br>";
    echo "<p><pre> Comment: $temp_comment_text</pre></p>";
    echo "<br>";
  }
*/
?>

</body>

</html>