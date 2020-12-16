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
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <img id="left-block" src="images/<?= $article["image"] ?>" class="col-lg-6 col-sm-12">
            <div id="right-block" class="col-lg-6 col-sm-12">
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
                <div id="content-wrapper" class="content-wrapper">
                    <div class="col-sm-12" style="padding-top: 10px;">
                        <div class="news-content-wrapper">
                            <h3><b><?= $article['title'] ?></b></h3>
                            <p style="margin-top: 50px; font-size: 18px;"><?= $article['content'] ?></p>
                            <p style="color: grey; font-size: 15px; margin-top: 50px;"><?= $article['date'] ?></p>
                            <p style="font-size: 15px; margin-top: 50px;"><?= $article['surname'] ?> <?= $article['name'] ?></p>
                        </div>
                    </div>
                </div>
                <?php
                include('views/language.php');
                ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- <script src="js/description.js"></script> -->
    <script src="js/initbt.js"></script>
    <script src="js/fonts.js"></script>

</body>

</html>