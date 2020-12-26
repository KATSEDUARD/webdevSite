<?php

session_start();
require_once('../db.php');
$link = db_connect();

function like($link, $id_article, $id_user)
{
    $query = "DELETE FROM likes WHERE id_article = $id_article AND id_user = $id_user";
    
    // echo $query;
    $result = mysqli_query($link, $query);

    if (!$result) die(mysqli_error($link));

    return true;
}

like($link, $_POST['article_id'], $_SESSION['logged_user']['id']);

?>