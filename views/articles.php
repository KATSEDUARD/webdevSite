<?php
session_start();
ini_set('error_reporting', 0);
ini_set('display_errors', 0);

$link = db_connect();

$n = 0;

if ($_POST) {
    $a = $_POST['title_search'];
    setcookie("Query", $a, time() + 10);
} else {
    $a = null;
}

if ($_GET["show"] == 'all') {
    $sql = "SELECT * FROM articles ORDER BY id DESC";
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Heavy Metal</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/common/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="menu" id="menu">
            <div class="row">
                <div class="link-item col-lg-3 text-center">
                    <a class="item-a" href="index.php">HOME</a>
                </div>
                <div class="link-item col-lg-3 text-center">
                    <div class="dropdown">
                        <a onclick='window.location.href = "bands.php"' class="dropdown-toggle item-a" id="dropdownMenuButton" data-toggle="dropdown" onmouseover='mouseover_button(event)' onmouseout='mouseout_button(event)'>BANDS</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" onmouseover='mouseover_menu(event)' onmouseout='mouseout_menu(event)'>
                            <a class="dropdown-item" href="maiden.php">IRON MAIDEN</a>
                            <a style="font-size: 25px !important; padding-bottom: 0 !important; padding-top: 0 !important;" class="dropdown-item" href="metallica.php">Metallic<span class='flip_H'>A</span></a>
                            <a class="dropdown-item" href="megadeth.php">MEGADETH</a>
                            <a class="dropdown-item" href="rammstein.php">RAMMSTEIN</a>
                        </div>
                    </div>
                </div>
                <div class="link-item col-lg-3 text-center">
                    <a class="item-a" href="news.php">NEWS</a>
                </div>
                <div class="link-item col-lg-3 text-center">
                    <a class="item-a" href="account.php">ACCOUNT</a>
                </div>
            </div>
        </div>
        <form action="news.php" method="post" style="margin-top: 50px;">
            <label for="article_title">Пошук</label>
            <input type="text" name="title_search" placeholder="Пошук" value="<?= $_COOKIE["Query"] ?>" class="form-control" id="article_title">
            <br>
            <input type="submit" class="btn btn-primary" id="search" value='Шукати'>
        </form>
        <form action="news.php?show=all" method="get">
            <input type="submit" style="margin-top: 15px;" class="btn btn-primary" value="Показати всі статті">
        </form>
        <div class="row">
            <?php
            $sql = "SELECT articles.*, COUNT(likes.id) FROM articles LEFT JOIN likes ON articles.id = likes.id_article WHERE articles.title LIKE'%$a%' GROUP BY articles.id ORDER BY articles.id DESC";
            
            $r = mysqli_query($link, $sql);

            while ($article = mysqli_fetch_array($r)) {
            ?>

                <div class="col-sm-12" style="margin-top: 20px;">
                    <div class="row">
                        <img class="col-sm-12 col-lg-5" style="padding-right: 0px;" src="images/<?= $article['image'] ?>" alt="<?= $article['title'] ?>">
                        <div class="col-sm-12 col-lg-7" style="padding-bottom: 10px; padding-left: 125px; padding-right: 125px; border: 1px solid grey; border-left: none; padding-top: 70px;">
                            <div class="news-content-wrapper">
                                <h3><b><?= $article['title'] ?></b></h3>
                                <p style="margin-top: 50px; font-size: 18px;"><?= articles_intro($article['content']) ?>...</p>
                                <p style="color: grey; font-size: 15px; margin-top: 25px;"><?= $article['date'] ?></p>
                                <?php
                                if (isset($_SESSION['logged_user'])) {
                                ?>
                                    <button class="like_button like" data-id="<?= $article['id'] ?>" data-status="like"><i class="far fa-heart"></i></button>
                                    <span style="font-size: 17px;"><?= $article['COUNT(likes.id)'] ?></span>
                                <?php
                                }
                                ?>
                                <br>
                                <br>
                                <a href="../article.php?id=<?= $article['id'] ?>">Перейти до статті</a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
                $n++;
            }


            if ($n == 0) {
                echo "<p style='margin-left: 50px; margin-top: 50px;'>This item does not exist in database</p>";
            }

            ?>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="js/ajax.js"></script>
    <script src="js/ajax_query.js"></script>
    <script src="js/initbt.js"></script>
    <script src="js/fonts.js"></script>
    <script src="https://kit.fontawesome.com/5c78eed0ca.js" crossorigin="anonymous"></script>

</body>

</html>