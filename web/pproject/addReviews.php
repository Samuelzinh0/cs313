<?php
    $name_user = $_POST['nameOfUser'];
    $title_review = $_POST['reviewTitle'];
    $rating_review = $_POST['reviewRating'];
    $type_user = $_POST['userType'];
    $content_comment = $_POST['commentContent'];

    require('dbconnect.php');

    $db = get_db();
    
    /*
    INSERT INTO users (user_name, user_type) VALUES ('Sam', 'Homeowner');
    INSERT INTO comments (comment_title, comment_text, users_id) VALUES ('Quick Workers!', 'I was wondering if it would be a day job and we decided it would be and it worked out great! Good professionalism as well!', 1);
    INSERT INTO ratings (rating, users_id) VALUES (5, 2);
    */
    
    try {
        // check for change in available credit
        if ($name_user != 0) {
            $update_query = 'INSERT INTO users (user_name, user_type) VALUES (:name_user, :type_user) ';
            $stmt = $db->prepare($update_query);
            $stmt->bindValue(':name_user', $name_user);
            $stmt->bindValue(':type_user', $type_user);
            $stmt->execute();
        }

    } catch (Exception $ex) {
        echo "Error with DB. Details: $ex";
        die();
    }

    header("Location: reviews.php");
    die();
?>