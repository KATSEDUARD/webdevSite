<?php

function articles_all($link)
{
    $query = "SELECT * FROM articles ORDER BY id DESC";
    $result = mysqli_query($link, $query);

    if (!$result) die("Error: " . mysqli_error($link));

    $n = mysqli_num_rows($result);
    $articles = array();

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }

    return $articles;
}

function articles_get($link, $id_article)
{
    $query = sprintf("SELECT * FROM articles JOIN author ON articles.id_author = author.id WHERE articles.id=%d", (int)$id_article);

    $result = mysqli_query($link, $query);

    if (!$result) die("Error: " . mysqli_error($link));

    $article = mysqli_fetch_assoc($result);

    return $article;
}

function articles_new($link, $title, $date, $content, $image, $id_author)
{
    $title = trim($title);
    $content = trim($content);
    $image = trim($image);
    $id_author = trim($id_author);

    if ($title == "") return false;

    $t = "INSERT INTO articles (title, date, content, image, id_author) VALUES ('%s', '%s', '%s', '%s', '%d')";

    $query = sprintf($t, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $date), mysqli_real_escape_string($link, $content), mysqli_real_escape_string($link, $image), mysqli_real_escape_string($link, $id_author));

    // echo $query;
    $result = mysqli_query($link, $query);

    if (!$result) die(mysqli_error($link));

    return true;
}

function articles_edit($link, $id, $title, $date, $content, $image, $id_author)
{
    $title = trim($title);
    $content = trim($content);
    $image = trim($image);
    $date = trim($date);
    $id_author = trim($id_author);
    $id = (int)$id;

    if ($title == "") return false;

    $sql = "UPDATE articles SET title='%s', content='%s', image='%s', date='%s', id_author='%d' WHERE id='%d'";

    $query = sprintf(
        $sql,
        mysqli_real_escape_string($link, $title),
        mysqli_real_escape_string($link, $content),
        mysqli_real_escape_string($link, $image),
        mysqli_real_escape_string($link, $date),
        mysqli_real_escape_string($link, $id_author),
        mysqli_real_escape_string($link, $id)
    );

    $result = mysqli_query($link, $query);

    if (!$result) die(mysqli_error($link));

    return mysqli_affected_rows($link);
}

function articles_delete($link, $id)
{
    $id = (int)$id;

    if ($id == 0) return false;

    $query = sprintf("DELETE FROM articles WHERE id='%d'", mysqli_real_escape_string($link, $id));
    $result = mysqli_query($link, $query);

    if (!$result) die(mysqli_error($link));

    return mysqli_affected_rows($link);
}

function articles_intro($text, $len = 200)
{
    return mb_substr($text, 0, $len);
}
