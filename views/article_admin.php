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
        <?php if ($_GET['action'] == 'edit') { ?>
            <h1>Редагування статті</h1>
        <?php } else if ($_GET['action'] == 'add') { ?>
            <h1>Додавання нової статті</h1>
        <?php } ?>
        <br>
        <div class="row">
            <form class="col-sm-12 col-lg-6" action="index.php?action=<?= $_GET["action"] ?>&id=<?= $_GET["id"] ?>" method="post">
                <div class="form-group">
                    <label for="article_title">Заголовок</label>
                    <input value="<?= $article['title'] ?>" type="text" name="title" class="form-control" id="article_title">
                </div>
                <div class="form-group">
                    <p>Стаття</p>
                    <textarea name="content" id="article_content" cols="90" rows="5"><?= $article['content'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="article_image">Фото</label>
                    <input value="<?= $article['image'] ?>" type="text" name="image" class="form-control" id="article_image">
                </div>
                <div class="form-group">
                    <label for="article_date">Дата</label>
                    <input value="<?= $article['date'] ?>" type="date" name="date" class="form-control" id="article_date">
                </div>
                <div class="form-group">
                    <label for="article_author">Автор</label>
                    <input value="<?= $article['id_author'] ?>" type="text" name="id_author" class="form-control" id="article_author">
                </div>
                <button type="submit" class="btn btn-primary">Зберегти</button>
            </form>
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
    <!-- <script src="js/fonts.js"></script> -->

</body>

</html>