<?php /*
  require('dbConnect.php');
  $db = get_db();
  $query = 'SELECT comment_title, comment_text, users_id FROM comments';
  $stmt = $db->prepare($query);
  $stmt->execute();
  $comment_infos = $stmt->fetchAll(PDO::FETCH_ASSOC); */
?>

<!DOCTYPE html>
<html lang="eng">

<head>

</head>

<body>
<h1>test</h1>
<?php
  /*$temp_comment_title;
  $temp_comment_text;
  $temp_users_id;
  foreach ($comment_infos as $comment_info) {
    $id = $comment_info['users_id'];
    global $temp_comment_title, $temp_comment_text, $temp_users_id;
    $temp_comment_title = $comment_info['comment_title'];
    $temp_comment_text = $comment_info['comment_text'];
    }
  }

  echo "<br><br>";
  echo "<h3>Reviews</h3>";
  echo "<p><pre>$temp_comment_title</pre><p>";
  echo "<br>";
  echo "<p><pre> Comment: $temp_comment_text</pre></p>";
  echo "<br>";*/
?>

</body>

</html>