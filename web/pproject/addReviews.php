<?php
    $name_user = $_POST['nameOfUser'];
    $title_review = $_POST['reviewTitle'];
    $rating_review = $_POST['reviewRating'];
    $type_user = $_POST['userType'];
    $content_comment = $_POST['commentContent'];

    require('dbConnect.php');

    $db = get_db();
    
    try {
            $update_query = 'INSERT INTO users (user_name, user_type) VALUES (:name_user, :type_user) ';
            $stmt = $db->prepare($update_query);
            $stmt->bindValue(':name_user', $name_user);
            $stmt->bindValue(':type_user', $type_user);
            $stmt->execute();

            $update_query = 'INSERT INTO comments (comment_title, comment_text) VALUES (:title_review, :content_comment) ';
            $stmt = $db->prepare($update_query);
            $stmt->bindValue(':title_review', $title_review);
            $stmt->bindValue(':content_comment', $content_comment);
            $stmt->execute();

            $update_query = 'INSERT INTO ratings (rating) VALUES (:rating_review) ';
            $stmt = $db->prepare($update_query);
            $stmt->bindValue(':rating_review', $rating_review);
            $stmt->execute();
            
    } catch (Exception $ex) {
        echo "Error with DB. Details: $ex";
        die();
    }

    header("Location: reviews.php");
    die();
?>