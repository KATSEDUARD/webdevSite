<?php

require_once("../db.php");

$link = db_connect();

function search($link) {
    $title = trim($_POST['title_search']);

    $query = "SELECT * FROM articles WHERE title LIKE'%$title%'";

    $result = mysqli_query($link, $query);

    if(!$result) die("Error: ".mysqli_error($link));

    $articles = array();

    $n = mysqli_num_rows($result);

    for($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }

    return $articles["title"];
}

search($link);
