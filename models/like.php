<?php

session_start();
require_once('../db.php');
$link = db_connect();
function like($link, $id_article, $id_user)
{
    $user_id = "SELECT id_article FROM likes WHERE id_user = $id_user";
    if (!in_array(`$id_article`, mysqli_fetch_array($user_id))) {
        $query = "INSERT INTO likes (id_article, id_user) VALUES ('$id_article', '$id_user')";
}
    
    // echo $query;
    $result = mysqli_query($link, $query);

    if (!$result) die(mysqli_error($link));

    return true;
}

like($link, $_POST['article_id'], $_SESSION['logged_user']['id']);

?>